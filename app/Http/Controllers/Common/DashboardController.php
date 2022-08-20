<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Validator;
use \stdClass;
use Response;
use Rap2hpoutre\FastExcel\FastExcel;
use PDF;
use App\Http\Controllers\Controller;
use \Carbon\Carbon;
use DB;
use Auth;
use App\Model\Admin\Config;
use App\Model\Admin\Product;
use App\Model\Admin\Post;
use App\Model\Common\User;

use Spatie\Analytics\Period;
use Analytics;
use App\Libraries\GoogleAnalytics;
use App\Model\Admin\OrderDetail;
use App\Model\Admin\Order;

class DashboardController extends Controller
{
	protected $view = 'admin.dashboard';

	public function index()
	{
		$data = [];
		$g7_ids = [];
		$data['orders'] = Order::whereDate('created_at',Carbon::now())->count();
		$data['total_price'] = OrderDetail::whereDate('created_at',Carbon::today())
								->sum('price');

		// Google Analytics
		$data_analytics['active'] = Analytics::getAnalyticsService()->data_realtime->get('ga:'.env('ANALYTICS_VIEW_ID'), 'rt:activeVisitors')->totalsForAllResults['rt:activeVisitors'];
		// dd($data_analytics['active']);
		$data_analytics['total_page_views'] = Analytics::fetchTotalVisitorsAndPageViews(Period::days(10));
		$data_analytics['today'] = Analytics::fetchTotalVisitorsAndPageViews(Period::days(0));

		$data_analytics['top_visited_pages'] = Analytics::fetchMostVisitedPages(Period::days(7), 6);

		$data_analytics['devices'] = GoogleAnalytics::fetchDeviceVisitors(Period::days(29));
		$data_analytics['organic_search'] = GoogleAnalytics::fetchOrganicSearch(Period::days(29));
		$data_analytics['month_visitor'] = Analytics::fetchTotalVisitorsAndPageViews(Period::days(30));
		$data_analytics['month_visitor'] = $data_analytics['month_visitor']->sum('visitors');

		$startDate =  \Carbon\Carbon::now()->startOfMonth();
		$endDate = new \Carbon\Carbon('now');

		if($startDate == $endDate) {
			$data_analytics['month_visitors'] = Analytics::fetchTotalVisitorsAndPageViews(Period::day(0));
		} else {
			$data_analytics['month_visitors'] = Analytics::fetchTotalVisitorsAndPageViews(Period::create($startDate, $endDate));
		}
		$data_analytics['month_visitors'] = $data_analytics['month_visitors']->sum('visitors');

		// dd($data_analytics);
		$sales = $this->getOrderByDay();
		// dd($sales);

		return view($this->view.'.dash', compact('data','data_analytics','sales'));
	}

	// public function updateSiteMap ()
	// {
		// dd(1);
		// create new sitemap object
		$sitemap = App::make('sitemap');

	// set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
	// by default cache is disabled
		$sitemap->setCache('laravel.sitemap', 60);

	// check if there is cached sitemap and build new only if is not
		if (!$sitemap->isCached()) {
		// add item to the sitemap (url, date, priority, freq)
			$sitemap->add(URL::to('/'), \Carbon\Carbon::now(), '1.0', 'daily');

			
			$sitemap->add(route('front.about'), \Carbon\Carbon::now(), '0.8', 'daily');
			$sitemap->add(route('front.about2'), \Carbon\Carbon::now(), '0.8', 'daily');
			$sitemap->add(route('front.about3'), \Carbon\Carbon::now(), '0.8', 'daily');
			$sitemap->add(route('front.about4'), \Carbon\Carbon::now(), '0.8', 'daily');
	
			$sitemap->add(route('front.investments1'), \Carbon\Carbon::now(), '0.8', 'daily');
			$sitemap->add(route('front.investments2'), \Carbon\Carbon::now(), '0.8', 'daily');
			$sitemap->add(route('front.investments3'), \Carbon\Carbon::now(), '0.8', 'daily');

			$sitemap->add(route('front.globalReach'), \Carbon\Carbon::now(), '0.8', 'daily');
			$sitemap->add(route('front.insights'), \Carbon\Carbon::now(), '0.8', 'daily');
			

			// danh mục bài viết
			$categories = PostCategory::query()->where(['parent_id' => 0, 'show_home_page' => 1])->latest()->get();

			foreach($categories as $category) {
				$sitemap->add(route('front.news', $category->slug), $category->updated_at, '0.8' , 'daily');
			}
			
			// bài viết
			$posts = Post::query()->where('status', 1)->get();
			foreach	($posts as $post) {
				$sitemap->add(route('front.post', $post->slug), $post->updated_at, '0.8' , 'daily');
			}


		// get all Catalog from db
			$catalogs = DB::table('catalog')->orderBy('created_at', 'desc')->get();

		// add every post to the sitemap
			foreach ($catalogs as $catalog) {
				$sitemap->add(route('allRoute', $catalog->slug), $catalog->updated_at, '0.8' , 'daily');
			}

		// get all posts from db
			$posts = DB::table('article')->orderBy('created_at', 'desc')->get();

		// add every post to the sitemap
			foreach ($posts as $post) {
				$sitemap->add(route('allRoute', $post->slug), $post->updated_at, '0.6' , 'daily');
			}

		}

		$sitemap->store('xml', 'sitemap');
		if (File::exists(public_path() . '/sitemap.xml')) {
			chmod(public_path() . '/sitemap.xml', 0777);
		}

		return redirect()->route('dashboard');
	}

	public function getOrderByDay()
		{
			$select = [
				DB::raw("SUM(price) as total_price"),
				DB::raw("DATE(created_at) as day"),
			];
			$result = OrderDetail::select($select)->whereDate('created_at', '>',
					Carbon::now()->subDays(10))->groupBy([DB::raw('DATE(created_at)')])->get();

			return $result;
		}
}
