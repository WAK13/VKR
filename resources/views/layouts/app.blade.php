<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://api-maps.yandex.ru/2.1/?apikey=23851784-e22d-418f-832f-612109e7e206&lang=ru_RU" type="text/javascript"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <header>
        <div class="header_main">
            <a href="{{ url('/main') }}" class="logo_div">
                <img class="logo_img" src="img/logo.png" alt="logo">
                <div class="logo_text">Карта ЧП <br> Санкт-Петербурга</div>
            </a>
            <div class="header_menu">
                <div class="header_menu_child"><a class="menu_link" href="{{ url('/main') }}">Главная</a>
                </div>
                <div class="header_menu_child"><a class="menu_link" href="{{ url('/map') }}">Карта</a></div>
                <div class="header_menu_child"><a class="menu_link" href="{{ url('/faq') }}">FAQ</a></div>
            </div>

                @if (Auth::check())
                    <a href="{{ url('/profile') }}" class="account">
                        <img class="user_photo" src="img/round-account-button-with-user-inside.png" alt="user_photo">
                    </a>
                    <a href="{{ url('/logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Выход</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a href="{{ url('/login') }}">Вход</a>
                    <a href="{{ url('/register') }}">Регистрация</a>
                @endif
        </div>

    </header>


    @yield('content')

    <footer>
        <div class="footer_left">
        </div>
        <div class="footer_right">
            <img class="footer_item" src="img/phone-call.png" alt="phone">
            <span>+7 (987) 123-65-43</span>
            <img class="footer_item" src="img/instagram.png" alt="intagram">
            <img class="footer_item" src="img/gmail.png" alt="g-mail">
        </div>
    </footer>


    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('script')
</body>
</html>
