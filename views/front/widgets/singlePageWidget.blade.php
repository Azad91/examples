<div class="news_pic_detal">
    <p>{{$article->title}}</p>
    <img src="{{$article->image}}">
</div>
<div class="detal_news_bottom">
    <div class="detal_news_bottom_row">
        <div class="row">
            <a href=""><div class="bot_sosial">{{$article->getCategory->name}}</div></a>
            <a href=""><div class="bot_time"><img src="{{asset('front/')}}/img/1x/clock2.png">{{$article->created_at->format('H:i')}}</div></a>
            <a href=""><div class="bot_date"><img src="{{asset('front/')}}/img/1x/monthly-calendar2.png">{{ $article->created_at->format('d-m-Y') }}</div></a>
            <a href=""><div class="bot_eye"><img src="{{asset('front/')}}/img/1x/view.png">{{$article->hit}}</div></a>
        </div>
    </div>
    <div class="detal_news_bottom_title" style="width: 620px;">
        <p>{!! $article->content !!}</p>
        <div class="detal_news_bottom_title_footer row mt-3"> <div class="mt-2">Paylaş :</div>
            <a href=""><div class="fb_detal"><img src="{{asset('front/')}}/img/1x/facebook2.png">Facebook</div></a>
            <a href=""><div class="wp"><img src="{{asset('front/')}}/img/1x/whatsapp.png">Whatsapp</div></a>
            <a href=""><div class="twit_detal"><i class="fab fa-twitter"></i>Twitter</div></a>
            <a href=""><div class="g_detal"><i class="fab fa-google-plus-g"></i>Google+</div></a>
        </div>
    </div>
</div>
