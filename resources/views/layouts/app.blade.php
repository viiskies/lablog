<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @csrf
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-light bg-light navbar-static-top navbar-expand-md">
            <div class="container">
                <!-- Collapsed Hamburger -->
                
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="/">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li role="presentation" class="nav-item">
                            <a href="/blog" class="nav-link">Blog</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a href="/create" class="nav-link">Create a new post</a>
                        </li>
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                        @else
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false"
                                aria-haspopup="true">

                                {{ Auth::user()->name }}
                                <span class="caret"></span>

                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();

                                    document.getElementById('logout-form').submit();">

                                        Logout

                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest</ul>
                </div>
            </div>
        </nav>
        <div class="container">
            
                @yield('content')</div>
        </div>
    </div>
    <!-- Scripts -->
</body>

</html>