@foreach ($pages as $page)
  <a href="{{route('page', $page->slug)}}"><span class="contact">{{$page->title}}</span></a>
@endforeach
