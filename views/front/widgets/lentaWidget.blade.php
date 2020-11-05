<div class="lent_div">
  @foreach ($articles as $article)
    <div class="lent_news_title">
        <span class="lent_news_oclock">
            <img src="{{asset('front/')}}/img/1x/clock2.png">
            <span>{{$article->created_at->format('H:i')}}</span>
        </span>
        <span class="lent_news_date">
            <img src="{{asset('front/')}}/img/1x/monthly-calendar2.png">
            <span>{{ $article->created_at->format('d-m-Y') }}</span>
        </span>
        <div class="lent_news_text">
          <a href="{{route('single', [$article->getCategory->slug, $article->slug] )}}">
            {{Str::limit($article->title,100)}}
          </a>
        </div>
        <div class="lent_news_border_bottom"></div>
    </div>
  @endforeach
</div>
