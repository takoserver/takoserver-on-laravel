@include('common.header')
<div class="nyanya wrapper">
@foreach($posts as $post)
    <div class="news">
        <h1 class="news-h1">
            {{$post->title}}
        </h1>
        <hr class="news-hr">
        <p class="news-p">
            {{$post->body}}
        </p>
        <div class="news-div">
            <p class="news-p">
                {{$post->created_at}}
            </p>
        </div>
    </div>
@endforeach
</div>
@include('common.footer')