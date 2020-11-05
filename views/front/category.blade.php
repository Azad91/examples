@extends('front.layouts.master')
@section('title', $category->name)
@section('content')

  <div class="detal_iq_row">
    <div class="row">
      <div class="detal_iq"><h3>{{$category->name}}</h3></div>
      <div class="detal_iq_box_div">
        @if(count($articles)>0)
        @include('front.widgets.categoryPageWidget')
      @else
        <div class="alert alert-danger mt-5">
          <h2>Bu kategoriya bosdur</h2>
        </div>
      @endif
      </div>
    </div>
  </div>
@endsection
