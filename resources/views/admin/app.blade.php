<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('/favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('images/favicon.ico') }}">
    <link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png">

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.astatic.com"> 
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/login') }}">{{ __('Login') }}</a> 
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/register') }}">{{ __('Register') }}</a> 
    </li>
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('admin/logout') }}"     
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" class="d-none"> 
                @csrf
            </form>
        </div>
    </li>
@endguest

</body>
</html>
