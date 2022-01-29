<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Juragan Motor</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        body{
            
            font-family: 'Quicksand', sans-serif;
        }

        .wrapper{
            width: 100%;
            height: 100%;
        }
        .navbar{
            margin-bottom: 0;
            background: #293949;
            border-color:#fff;
        }
        .sidebar{
            width: 100%;
            height: 100%;
            background: #293949;
            position: absolute;
            z-index: 100;
            float: left;
        }
        ul{
            padding: 0;
            margin-left: -40px;
        }
        ul li{
            list-style: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5); 
        }
        ul li a{
            text-decoration: none;
            color: #aeb2b7;
            display: block;
            padding: 19px 0px 18px 25px;
            transition: all 200ms ease-in;
        }
        ul li a:hover{
            text-decoration: none;
            color: #1abc9c;
        }
        ul li a:visited{
            text-decoration: none;
            color: #fff;
        }
        li li a span{
            display: inline-block;
        }
        ul ul{
            display: none;
            margin:0px;
        }
        ul li a .fa-angle-down{
            margin-right: 10px;
        }
        .break{
            clear: both;
        }
        /*apabila lebar min 768px*/
        @media(min-width: 768px) {
            .sidebar{
                width: 240px;
            }
            .content{
                margin-left: 250px;
            }
            .inner{
                padding: 15px;
            }
        }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    JURAGAN MOTOR
                </a>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right ml-auto">
                        {{-- cart --}}
                        <li class="nav-item">
                            {{-- <a href="{{ route('carts.index') }}" class="btn btn-primary btn-block">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                    class="badge badge-pill badge-danger">{{ count(session('cart')) }}
                                </span>
                            </a> --}}
                            <a href="{{ route('carts.index') }}" class="btn btn-primary btn-block">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                    class="badge badge-pill badge-danger">{{ count([session('cart')]) }}
                                </span>
                            </a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: #000;" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      <aside class="sidebar">
          <div class="break"></div>
        <menu>
          <ul class="menu-content">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="{{ '/products' }}"><i class="fa fa-shopping-basket"></i> <span>Beli Produk</span></a></li>
            <li><a href="{{ route('admin.products.index') }}"><i class="fa fa-shopping-basket"></i> <span>List Produk</span></a></li>
            <li><a href="{{ route('admin.products.create') }}"><i class="fa fa-shopping-basket"></i> <span>Tambah Produk</span></a></li>
          </ul>
        </menu>
      </aside>
        <main class="py-4" style="margin-left: 20%;">
            @yield('content')
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity=”sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa” crossorigin=”anonymous”></script>
    <script>
    $(“menu li > a”).click(function(e){
    $(“menu ul ul”).slideUp(),$(this).next().is(“:visible”) || $(this).next().slideDown(),e.stopPropagation()
    });
    </script>
    </body>
</html>