@extends('front.layouts.master')
@section('title', $page->title)
@section('content')

  <div class="detal">
      <div class="row">
          <div class="detal_news_bottom" style="margin-top:20px;">
              <div class="detal_news_bottom_title">
                  <p>{!! $page->content !!}</p>
              </div>
          </div>
    </div>
  </div>



@endsection
