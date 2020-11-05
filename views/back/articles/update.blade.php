@extends('back.layouts.master')
@section('title', $article->title.' makalesini guncelle')
@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-right">
        @yield('title')
      </h6>
    </div>
    <div class="card-body">
      @if($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
        </div>
      @endif
      <form method="post" action="{{route('admin.makaleler.update', $article->id)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label>Makale basligi</label>
          <input type="text" name="title" value="{{$article->title}}" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Makale Kategorisi</label>
          <select class="form-control" name="category" required>
            <option value="">Secim yapiniz</option>
            @foreach ($categories as $category)
              <option @if($article->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Makale fotografi</label><br>
          <img src="{{asset($article->image)}}" width="300" class="rounded"><br><br>
          <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Makale icerigi</label>
          <textarea name="content" id="editor" rows="4" class="form-control">{!! $article->content !!}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Makaleyi guncelle</button>
        </div>
      </form>
  </div>
@endsection
@section('css')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#editor').summernote({
        'height':250
      });
    });
  </script>
@endsection
