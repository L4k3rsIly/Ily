<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <h1>{{__('Івано-Франківськ') }}</h1>
                <h2>{{__('Агентство Нерухомості') }}</h2>
            </div>
        </header>
        <nav class="page-navigation">
            <div class="navbar-nav ml-auto">
                <!-- Authentication Links -->

            </div>
            <div class=" nav container navbar dropdown">
                    <a href="{{route('index')}}" class="">Головна</a>
                    <div class = "dropdown-offer">
                        <a href="{{route('offer.index')}}" class="" >Перегляд оголошення</a>
                        <a href="{{route('offer.add')}}" class="" >Добавлення оголошення</a>
                        <a href="{{route('user.index')}}" class="{{Request::is('users')?'active-1':''}}">Перегляд користувачів</a>
                        <a href="{{route('register')}}" class="{{Request::is('users/add')?'active-1':''}}">Добавлення користувача</a>
                    </div>
{{--                @if(Auth::user() && Auth::user()->role=='ADMIN')--}}
                    <a href="" class="{{Request::is('addType*')?'active-1':''}}">Аdmin</a>
                {{--@endif--}}
                @if (Route::has('login'))
                    <div class="dropdown_item" style="float: right">
                        @auth
                        @else
                            <a href="{{ route('login') }}">Вхід</a>
                        @endauth
                    </div>
                @endif
                @guest
                    @if (Route::has('register'))
                    @endif
                @else
                    <div class="dropdown-offer">
                        <a id="navbarDropdown" class="dropdown_item" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdowncontent" aria-labelledby="navbarDropdown">
                            <a class="dropdown_item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                ВИХІД
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </div>

        </nav>
        @yield('content')
        <footer class="footer">
            <div class="container">
                <p>Copyright © Example.com 2018</p>
            </div>
        </footer>
    </body>
</html>

