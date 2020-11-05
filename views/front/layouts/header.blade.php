<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sabah.az')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<header>
    <div class="">
        <div class="row">
            <div class="logo">
                <a href="{{route('homepage')}}"><img src="{{asset('front/')}}/img/1x/sabahaz1.png"></a>
                <div class="logo_bottom">
                @include('front.widgets.pageWidget')

                </div>
            </div>
            <a href="#">
                <div class="fb">
                    <img src="{{asset('front/')}}/img/1x/facebook.png">
                    <span>Facebook</span>
                </div>
            </a>
            <a href="#">
                <div class="insta">
                    <img src="{{asset('front/')}}/img/1x/insta.png">
                    <span>Instagram</span>
                </div>
            </a>
            <a href="#">
                <div class="twit">
                    <img src="{{asset('front/')}}/img/1x/twitter.png">
                    <span>Twitter</span>
                </div>
            </a>
            <div class="header_search">
                <input type="saerch" placeholder="Axtar..."><img src="{{asset('front/')}}/img/search.png">
            </div>
        </div>
    </div>
</header>

@include('front.widgets.categoryWidget')


<div class="background_color">
