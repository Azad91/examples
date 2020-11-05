@isset($categories)

<nav>
    <div class="row">
        <div class="navbar_menu">
            <ul>
              @foreach ($categories as $category)
                <a @if(Request::segment(2)!=$category->slug) href="{{route('category', $category->slug)}}" @endif>
                  <li style="@if(Request::segment(2)==$category->slug) color:red @endif">{{$category->name}}</li>
                </a>
              @endforeach
                {{-- <a href=""><li>Bütün xəbərlər</li></a>
                <a href=""><li>Sosial</li></a>
                <a href=""><li>Siyasət</li></a>
                <a href=""><li>Hadisə</li></a>
                <a href=""><li>İqtisadiyyat</li></a>
                <a href=""><li>Kriminal</li></a>
                <a href=""><li>Turizm</li></a>
                <a href=""><li>Mədəniyyət</li></a>
                <a href=""><li>İdman</li></a>
                <a href=""><li>Ədəbiyyat</li></a> --}}
                <a href="#"><span onclick="myFunction(this)" class="menu1"><i class="fas fa-bars"></i></span></a>
                <div class="menu2">
                    <br>
                    <a href="#">Новости</a>
                    <a href="#">Бизнес</a>
                    <a href="#">Политика</a>
                    <a href="#">Шоу-бизнес</a>
                    <a href="#">Веб</a>
                    <a href="#">Технологии</a>
                    <a href="#">Спорт</a>
                    <a href="#">Авто</a>
                    <a href="#">Интересное</a>
                    <a href="#">Интересное</a>
                    <br>
                </div>
            </ul>
        </div>
    </div>
</nav>

@endif
