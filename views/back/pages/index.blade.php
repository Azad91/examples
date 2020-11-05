@extends('back.layouts.master')
@section('title', 'Tum Sayfalar')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">@yield('title')<span class="float-right text-warning"><strong>{{$pages->count()}}</strong> sayfa bulundu</span>
      {{-- <a href="" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> silinenler</a> --}}
    </h6>
  </div>
  <div class="card-body">
    <div id="orderSuccess" style="display:none;" class="alert alert-success">
      Siralama basariyla guncellendi!!
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Siralama</th>
            <th>Foto</th>
            <th>Basliq</th>
            <th>Durum</th>
            <th>Islemler</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Siralama</th>
            <th>Foto</th>
            <th>Basliq</th>
            <th>Durum</th>
            <th>Islemler</th>
          </tr>
        </tfoot>
        <tbody id="orders">
          @foreach($pages as $page)
          <tr id="page_{{$page->id}}">
            <td style="width:3%;" class="text-center">
              <i style="cursor:move;" class="fa fa-arrows-alt-v handle fa-3x"></i>
            </td>
            <td>
              <img src="{{$page->image}}" width="200">
            </td>
            <td>{{$page->title}}</td>
            <td>
              <input class="switch" data-toggle="toggle" page-id="{{$page->id}}" type="checkbox" data-onstyle="success" data-offstyle="danger" data-on="Aktif" data-off="Passiv" @if($page->status==1) checked @endif>
            </td>
            <td>
              <a target="_blank" href="{{route('page',$page->slug)}}" title="Goruntule" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
              <a href="{{route('admin.page.edit', $page->id)}}" title="Duzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
              <a href="{{route('admin.page.delete', $page->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.12.0/dist/sortable.umd.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
  $('#orders').sortable({
    handle:'.handle',
    update:function(){
      var siralama = $('#orders').sortable('serialize');
      $.get("{{route('admin.page.orders')}}?"+siralama,function(data, status){
        $('#orderSuccess').show().delay(2000).fadeOut();
      });
    }
  });
</script>
<script>
  $(function() {
    $('.switch').change(function() {
      id=$(this)[0].getAttribute('page-id');
      statu=$(this).prop('checked');
      $.get("{{route('admin.page.switch')}}", {id:id,statu:statu}, function(data, status){
        console.log(data);
      });
    })
  })
</script>
@endsection
