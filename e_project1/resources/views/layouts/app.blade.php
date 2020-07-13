<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ShoppingCart</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/.css') }}" rel="stylesheet">
</head>

         <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #eeeeee;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3>Shop Name</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
         
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                          </ul>
                           @guest
                            <ul class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </ul>
                            @if (Route::has('register'))
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </ul>
                            @endif
                        @else
                         @if (Route::has('login'))
               
                    @auth
                        
                    @else
                        <a href="{{ route('login') }}"><strong>Login</strong></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><h6><strong>Register</strong></h6></a>
                        @endif
                    @endauth
               
            @endif
              
          <ul class="nav-item">  
            <a href="{{ url('/home') }}"><h6><strong>Home</strong></h6></a>
        </ul>
        <ul class="nav-item">                
            <a class="nav-link" href="{{ url('/cart') }}"><h6><strong>Cart</strong></h6>
                @if (Cart::instance('default')->count() > 0)
                <span class="badge badge-light"> 
                    {{ Cart::instance('default')->count() }}
                </span>
                @endif
            </a>
          </ul>
                     
                            <ul class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><h6><strong>
                                    {{ Auth::user()->name }} </strong></h6><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </ul>
                        @endguest
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </div>


        <div class="container">
            <div class="row">
               @yield('content')
        </div>
    </div>
</body>
</html>
