@extends('site.layouts.master')
@section('title')
    <title>{{ "Về chúng tôi - " . ucfirst($_SERVER['HTTP_HOST']) }}</title>
@endsection
@section('page_class') insight @endsection
@section('content')
    <header class="lte-page-header lte-parallax-yes header-insight">
        <div class="container">
            <div class="lte-header-h1-wrapper">
                <h1 class="header">{{App::isLocale('vi') ? 'Tin chuyên ngành' : 'Insights'}}</h1>
            </div>  

        @include('site.partials.bread_crumb2', ['vi' => 'Tin chuyên ngành', 'en' => 'Insights'])

        </div>
    </header>
    
    <section id="sozo-main" ng-controller="Insights" ng-cloak >
             @if($posts->isNotEmpty())
                    <div class="container" style="margin-top: 70px">
                        <div class="row">
                        @foreach($posts as $p_s2)
                        <div class="blog-item col-lg-4 col-md-3 col-sm-12 wow rollIn" data-wow-delay="220ms" style="visibility: visible; animation-delay: 200ms; animation-name: rollIn;">
                            <div class="image">
                                <a href="{{route('front.post', $p_s2->slug)}}">
                                    <img src="{{$p_s2->image->path ?? ''}}" alt="Blog">
                                </a>
                            </div>
                            <div class="content">
                                <div class="date">5th feb, 2022</div>
                                <div class="category"></div><br>
                                <h2 class="entry__title ">
                                    <a class="main-heading" href="{{route('front.post', $p_s2->slug)}}">{{$p_s2->name}}</a>
                                </h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam possimus modi.</p>
                            </div>
                        </div>
                        @endforeach
                        

                    </div>

            @endif


        <br>
    </section>

@endsection

@push('scripts')
    <script>
        app.controller('Insights', function ($rootScope, $scope, $compile, $interval) {
            $scope.checkLoad = true;
            $scope.loading = false;
            $scope.post_ids = {{$posts->pluck('id')}};

            $scope.loadMorePost = function () {

                $.ajax({
                    type: 'GET',
                    url: '{{route('front.loadmore.post')}}',
                    data: {
                        post_ids_load_more: $scope.post_ids,
                    },
                    beforeSend: function() {
                        $scope.loading = true;
                    },
                    success: function (response) {
                        if (response.success) {
                            $(".load-more-post").append($compile(response.post_render)($scope));
                            $scope.post_ids = $scope.post_ids.concat(response.post_ids);
                            console.log(response.post_ids.length);

                            if(response.post_ids.length < 1) {
                                $scope.checkLoad = false;
                            }
                        }
                    },
                    error: function (e) {
                    },
                    complete: function () {
                        $scope.loading = false;
                        $scope.$applyAsync();
                    }
                });
            }

        })

    </script>
@endpush
