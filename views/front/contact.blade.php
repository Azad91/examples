@extends('front.layouts.master')
@section('title', 'Xeber sayti')
@section('content')

<div style="width:980px;margin-left:auto;margin-right:auto;padding-top:20px;">
    @if(session('success'))
     <div class="alert alert-success">
       {{session('success')}}
     </div>
     @endif
     @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>
                {{$error}}
              </li>
            @endforeach
          </ul>
        </div>
      @endif
  <form method="post" action="{{route('contact.post')}}">
    @csrf
    <div class="form-group">
      <input style="border-radius:5px !important;" required value="{{old('name')}}" name="name" type="text" class="form-control" placeholder="Ad Soyadiniz">
    </div>
    <div class="form-group">
      <input style="border-radius:5px !important;" required value="{{old('email')}}" name="email" type="email" class="form-control" placeholder="Email adresiniz">
    </div>
    <div class="form-group">
      <select style="border-radius:5px !important;" class="form-control" name="topic">
        <option @if(old('topic')=='Bilgi') selected @endif>Bilgi</option>
        <option @if(old('topic')=='Destek') selected @endif>Destek</option>
        <option @if(old('topic')=='Genel') selected @endif>Genel</option>
      </select>
    </div>
    <div class="form-group">
      <textarea name="message" required class="form-control" style="border-radius:5px !important;" rows="5" placeholder="Mesajiniz">{{old('message')}}</textarea>
    </div>
    {{-- <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary btn-block">Gonder</button>
  </form>
</div>


@endsection
