@extends('front.layouts.master')
@section('title', 'Ana Sehife')
@section('content')

<section>
    @include('front.widgets.homepageCarouselWidget')
</section>

<div class="section2">
    <div class="row">
        <div class="col">
            <div class="">
                <div class="row">
                    <div class="days_news_col">
                        <div class="col">
                            <div class="day_news"><p>Olke</p>
                              @foreach ($articles->take(6) as $key=>$article)
                                @if($key==0)
                                <div class="day_news_img">
                                    <a href="#"><img src="{{$article->image}}"></a>
                                    <div class="background_color_news">
                                        <div class="day_news_img_oclock">
                                        <img src="{{asset('front/')}}/img/1x/clock.png">
                                        <span>{{$article->created_at->format('H:i')}}</span>
                                    </div>
                                    <div class="day_news_img_date">
                                        <img src="{{asset('front/')}}/img/1x/monthly-calendar.png">
                                        <span>{{$article->created_at->format('d-m-Y')}}</span>
                                    </div>
                                    </div>
                                </div>

                                <div class="day_news_title">
                                    <a href="#">{{Str::limit($article->title,70)}}</a>
                                </div>
                                @else
                                <div class="other_day">
                                    <div class="other_day_news">
                                        <a href="#">
                                            <img src="{{$article->image}}">
                                            <span>{{Str::limit($article->title,70)}}</span>
                                        </a>
                                    </div>
                                    <div class="day_news_title_oclock">
                                        <img src="{{asset('front/')}}/img/1x/clock2.png">
                                        <span>{{$article->created_at->format('H:i')}}</span>
                                    </div>
                                </div>
                                @endif
                              @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="video_news_col">
                        <div class="col">
                            <div class="video_news"><p>Olke 2</p>
                              @foreach ($articles->take(6) as $key=>$article)
                                @if($key==0)
                                <div class="video_news_img">
                                    <a href="#"><img src="{{$article->image}}"></a>
                                </div>
                                    <div class="background_color_news">
                                        <div class="video_news_img_oclock">
                                            <img src="{{asset('front/')}}/img/1x/clock.png">
                                            <span>{{$article->created_at->format('H:i')}}</span>
                                        </div>
                                        <div class="video_news_img_date">
                                            <img src="{{asset('front/')}}/img/1x/monthly-calendar.png">
                                            <span>{{$article->created_at->format('d-m-Y')}}</span>
                                        </div>
                                    </div>
                                <div class="video_news_title"><a href="#">{{Str::limit($article->title,70)}}</a></div>
                                @else
                                <div class="other_day_news">
                                    <a href="#"><img src="{{$article->image}}"></a>
                                    <span><a href="#">{{Str::limit($article->title,60)}}</a></span>
                                </div>
                                <div class="video_news_title_oclock">
                                    <img src="{{asset('front/')}}/img/1x/clock2.png">
                                    <span>{{$article->created_at->format('H:i')}}</span>
                                </div>
                              @endif
                            @endforeach


                            </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="redaktor_div"><p>Olke3</p></div>
            <div class="red_box_div">
              @foreach($articles->take(4) as $article)
                <a href="#">
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


            </div>

            <div class="most_and_politic">
                <div class="row">
                    <div class="most_readers_col">
                        <div class="col">
                            <div class="most_readers"><p>Olke 3</p>
                                <div class="most_readers_div">
                                  @foreach ($articles->take(8) as $article)
                                    <div class="most_readers_title">
                                        <span class="most_readers_oclock">
                                            <img src="{{asset('front/')}}/img/1x/clock3.png">
                                            <span>{{$article->created_at->format('H:i')}}</span>
                                        </span>
                                        <div class="most_readers_text">
                                            <a href="#">{{Str::limit($article->title,100)}}</a>
                                        </div>
                                    </div>
                                  @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="politic_news_col">
                        <div class="col">
                            <div class="politic_news" style="float: right;"><p>Olke4</p>
                              @foreach ($articles->take(5) as $key=>$article)
                                @if($key==0)
                                <div class="politic_news_img">
                                    <a href="#"><img src="{{$article->image}}"></a>
                                    <div class="background_color_news">
                                        <div class="politic_news_img_oclock">
                                            <img src="{{asset('front/')}}/img/1x/clock.png">
                                            <span>{{$article->created_at->format('H:i')}}</span>
                                        </div>
                                        <div class="politic_news_img_date">
                                            <img src="{{asset('front/')}}/img/1x/monthly-calendar.png">
                                            <span>{{$article->created_at->format('d-m-Y')}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="politic_news_title"><a href="#">{{Str::limit($article->title,70)}}</a></div>
                                @else
                                <div class="other_day">
                                    <div class="other_day_news">
                                        <img src="{{$article->image}}">
                                        <span><a href="#">{{Str::limit($article->title,70)}}</a></span>
                                    </div>
                                    <div class="day_news_title_oclock">
                                        <img src="{{asset('front/')}}/img/1x/clock2.png">
                                        <span>{{$article->created_at->format('H:i')}}</span>
                                    </div>
                                </div>
                              @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="redaktor_div"><p>Sosial</p></div>
            <div class="red_box_div">
              @foreach ($articles->take(4) as $article)

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
                        <div class="red_box_title">
                          {{Str::limit($article->title,100)}}
                          {{-- <br>
                          Kategoriya:
                            <span style="color:red;">
                              {{$article->getCategory->name}}
                            </span> --}}
                        </div>
                    </div>
                </a>

              @endforeach
            </div>
            {{-- {{$articles->links()}} --}}

            <div class="world_row">
                <div class="row">
                    <div class="iq_col">
                        <div class="col">
                            <div class="day_news"><p>İqtisadiyyat</p>

                              @foreach ($articles->take(6) as $key=>$article)
                                @if($key==0)
                                <div class="day_news_img">
                                    <a href="#"><img src="{{$article->image}}"></a>
                                    <div class="background_color_news">
                                        <div class="day_news_img_oclock">
                                        <img src="{{asset('front/')}}/img/1x/clock.png">
                                        <span>{{$article->created_at->format('H:i')}}</span>
                                    </div>
                                    <div class="day_news_img_date">
                                        <img src="{{asset('front/')}}/img/1x/monthly-calendar.png">
                                        <span>{{$article->created_at->format('d-m-Y')}}</span>
                                    </div>
                                    </div>
                                </div>

                                <div class="day_news_title">
                                    <a href="#">{{Str::limit($article->title,70)}}</a>
                                </div>
                                @else
                                <div class="other_day">
                                    <div class="other_day_news">
                                        <a href="#">
                                            <img src="{{$article->image}}">
                                            <span>{{Str::limit($article->title,70)}}</span>
                                        </a>
                                    </div>
                                    <div class="day_news_title_oclock">
                                        <img src="{{asset('front/')}}/img/1x/clock2.png">
                                        <span>{{$article->created_at->format('H:i')}}</span>
                                    </div>
                                </div>
                                @endif
                              @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="world_col">
                        <div class="col">
                            <div class="day_news"><p>Dünya</p>

                              @foreach ($articles->take(6) as $key=>$article)
                                @if($key==0)
                                <div class="day_news_img">
                                    <a href="#"><img src="{{$article->image}}"></a>
                                    <div class="background_color_news">
                                        <div class="day_news_img_oclock">
                                        <img src="{{asset('front/')}}/img/1x/clock.png">
                                        <span>{{$article->created_at->format('H:i')}}</span>
                                    </div>
                                    <div class="day_news_img_date">
                                        <img src="{{asset('front/')}}/img/1x/monthly-calendar.png">
                                        <span>{{$article->created_at->format('d-m-Y')}}</span>
                                    </div>
                                    </div>
                                </div>

                                <div class="day_news_title">
                                    <a href="#">{{Str::limit($article->title,70)}}</a>
                                </div>
                                @else
                                <div class="other_day">
                                    <div class="other_day_news">
                                        <a href="#">
                                            <img src="{{$article->image}}">
                                            <span>{{Str::limit($article->title,70)}}</span>
                                        </a>
                                    </div>
                                    <div class="day_news_title_oclock">
                                        <img src="{{asset('front/')}}/img/1x/clock2.png">
                                        <span>{{$article->created_at->format('H:i')}}</span>
                                    </div>
                                </div>
                                @endif
                              @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="lent_news" style="margin-top: -548px;"><p>Xəbər lenti</p>
                @include('front.widgets.lentaWidget')
            </div>
        </div>
    </div>
</div>

@endsection
