@foreach ($articles->take(10) as $article)
  <a href="{{route('single', [$article->getCategory->slug, $article->slug] )}}">
      <div class="red_box">
          <img src="{{$article->image}}">
          <span class="red_box_oclock">
              <img src="{{asset('front/')}}/img/1x/clock3.png">
              <span>{{$article->created_at->format('H:i')}}</span>
          </span>
          <span class="red_box_date">
              <img src="{{asset('front/')}}/img/1x/monthly-calendar3.png">
              <span>{{ $article->created_at->format('d-m-Y') }}</span>
          </span>
          <div class="red_box_title">{{Str::limit($article->title,100)}}</div>
      </div>
  </a>
@endforeach
