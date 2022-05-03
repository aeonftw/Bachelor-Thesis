<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@yield('css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
@yield('js')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <img alt="Sigla upit" src="https://www.upit.ro/template/default/images/logo.png" style= margin-right:20px;></a>
                <a class="navbar-brand" href="{{ url('/forums') }}" >
                   Forum
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
    <style>


.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: gray;
  color: white;
  text-align: center;
  height:60px;
  
  
}
</style>
<br></br>
<div class="footer">
<a href="https://www.facebook.com/Universitatea-din-Pite%C8%99ti-100702105547858" target="_blank"  class="social_footer">
<img alt="Facebook" src="https://image.flaticon.com/icons/png/128/145/145802.png" style="width:20px; height:20px; margin-top: 10px; title="Pagina oficiala a Universitatii din Pitesti"></a>
<a href="https://twitter.com/@Official_Upit" target="_blank" class="social_footer">
<img alt="Twitter" src="https://upit.ro/template/default/images/twitter.png"   style="width:20px; height:20px; margin-top: 10px; title="Contul oficial al Universitatii din Pitesti"></a>
<a href="https://www.instagram.com/official_upit/" target="_blank" class="social_footer">
<img alt="Twitter" src="https://www.iconninja.com/files/268/699/635/instagram-icon.png" style="width:20px; height:20px; margin-top: 10px;  title="Contul oficial al Universitatii din Pitesti"></a>
<p>© 2016 - 2021 Universitatea din Pitesti </p>
</div>



</body>
</html>
