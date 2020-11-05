{{-- carousel-start --}}

<div class="section">

{{-- images --}}
    <div class="row">
      @foreach($articles->take(6) as $key => $article)
        <div class="news_pic mySlides" style="display: {{$key == 0 ? 'block' : 'none' }};">
            <a href="{{route('single', [$article->getCategory->slug, $article->slug] )}}">
                <img src="{{$article->image}}">
                <p>{{Str::limit($article->title,160)}}</p>
            </a>
        </div>
      @endforeach
    </div>

{{-- numbers --}}
    <div class="news_numbers">
      @foreach($articles->take(6) as $key => $article)
        <span class="number cursor" onclick="currentSlide({{$key+1}})" >{{$key+1}}</span>
      @endforeach
    </div>

{{-- bottom-images --}}
    <div class="news_img">
      @foreach($articles->take(6) as $key => $article)
        <div class="column">
            <img class="demo cursor" src="{{$article->image}}" onclick="currentSlide({{$key+1}})" alt="{{$key+1}}">
        </div>
      @endforeach
    </div>
</div>

{{-- carousel-end --}}
