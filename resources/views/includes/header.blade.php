<header>
        <div class="header-container">
            <div class="figure-container">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
            </div>
            <div class="categories">
                <ul>
                @foreach (config('main_menu') as $link )
                    <li><a href="{{route($link['route_name'])}}">{{$link['text']}}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </header>