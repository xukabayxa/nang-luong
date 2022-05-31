<div>
    <div class="uk-card uk-article-item">
        <div class="uk-cover-container">
            <a href="{{route('front.post', $post->slug)}}">
                <canvas width="467" height="593"></canvas>
                <img src="{{$post->image->path ?? ''}}"
                     data-options="quality:80;hdQuality:60;resize:1;fit:cover;autostart:visible;"
                     class=" uk-utility-object-fit-cover "
                     alt="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"
                     title="SOLAR-IMAGE-PR-17-MARCH-scaled.jpg?w=1024&h=384&scale"/> </a>
        </div>
        <div class="uk-flex uk-flex-between uk-style-secondary-m uk-text-ls-1 uk-text-dark uk-text-12 uk-margin-small-bottom uk-margin-small-top uk-padding-small-top">
            <div>22.03.22</div>
            <div></div>
        </div>
        <div class="uk-style-primary-l uk-text-8 uk-text-lh-2 uk-margin uk-margin-remove-top">
            <a href="{{route('front.post', $post->slug)}}"
               class="uk-color-dark">
                {{$post->name}}</a>
        </div>
    </div>
</div>
