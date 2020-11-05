@extends('front.layouts.master')
@section('title', 'Xeber sayti')
@section('content')

  <div class="detal">
      <div class="row">
         <div class="col">

                  @include('front.widgets.singlePageWidget')
                  <div class="redaktor_div" style="margin-left: 0px !important;"><p>Daha çox</p></div>
                  <div class="red_box_div" style="margin-left: -15px !important;">
                      @include('front.widgets.categoryOthersWidget')
              </div>
          </div>

          <div class="col">
              {{-- <div class="rek2">
                  <a href=""><img src="img/rek2.png"></a>
                  <a href=""><img src="img/rek2.png"></a>

              </div> --}}
              <div class="lent_news mt-3"><p>Xəbər lenti</p>
                  @include('front.widgets.lentaWidget')
              </div>
          </div>
  </div>
  </div>


@endsection
