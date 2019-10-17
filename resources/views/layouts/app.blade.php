<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

    
    <header style="position: sticky; top: 0;">

        <nav class="navbar navbar-light navbar-expand bg-dark d-flex justify-content-between">
                <a class="navbar-brand text-white px-3" href="http://127.0.0.1:8000/">アイデア村
                </a>

          <div class="row">
                <div id="menu" class="collapse">

                    <ul class="navbar-nav">
                        @if(Auth::check())

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('idea.index') }}">{{ __('ホーム') }}</a>

                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">

                            <a class="nav-link text-white" href="{{ route('profile.index',['user_id' => Auth::user()->id]) }}">{{ __('マイページ') }}</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('about_us') }}">{{ __('お問い合わせ') }}</a>
                        </li>
                        
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }} 
                                </a>
                            @csrf
                            </form>
                        </li>
                        @endif

                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                        </li>
                        <!-- @if (Route::has('register')) -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                        </li>
                        <!-- @endif -->
                        </li>
                        @endguest

                    </ul>
          
                </div>
                
                <button class="navbar-toggler-right mx-3" type="button" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
                    
            </nav>       

       






    </header>

    <main class="py-4 container">
    @yield('content')
    </main>

    <!-- ここからフッター -->
    <footer class="text-center text-muted py-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Ideathon.com
            <!-- <a href="https://mdbootstrap.com/education/bootstrap/"> ◯◯◯</a> -->
        </div>

    </footer>

</body>

</html>