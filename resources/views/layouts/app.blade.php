<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/ja.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://use.fontawesome.com/fbfa880e2f.js"></script>
    <script src="https://kit.fontawesome.com/fbba6dc03c.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/form_global.css') }}">

    @stack('header')
</head>
<body>
    <div id="app">

        <nav class="navbar  navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                <div class="row">
                    <div class="col-xs-6 banner"><img src="{{ URL::asset('img/nav_icon.png') }}" width="40px" class="d-inline-block" class="logo" alt=""></div>
                    <div class="col-xs-6">
                        <div class="company-name">YUMETETSU</div>
                        <div class="company-sub">株式会社　夢のおてつだい</div>
                    </div>
                </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse in navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav mx-auto">
                        @stack('nav')
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="application/javascript" defer>
        window.onload = function() {
            $(document).click(function (event) {
                console.log('clicked DOM');
                var clickover = $(event.target);
                var $navbar = $(".navbar-collapse");
                var _opened = $navbar.hasClass("in");
                if (_opened === true && !clickover.hasClass("navbar-toggle")) {
                    $navbar.collapse('hide');
                }
            });

            $(window).scroll(function() {
                console.log('logging');
                var $navbar = $(".navbar-collapse");
                var _opened = $navbar.hasClass("in");
                if (_opened === true) {
                    $navbar.collapse('hide');
                }
            });

            @stack('script')

            
        };
    </script>

</body>

</html>
