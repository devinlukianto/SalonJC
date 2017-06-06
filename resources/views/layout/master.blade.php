<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>Bariton Bakery - @yield('title')</title>
        <link rel="icon" href="{{URL::asset('img/bariton.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Bootstrap -->
        <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

        <!--Script-->
        <script src="{{URL::asset('js/jquery.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>  
    </head>

    <!--STYLE OVERRIDE-->
    <style>
        div, h1, h2, h3, input {
            font-family: Perpetua, serif;
        }
        
        p {
            font-size: 20px;
        }
        
        #header-row {
            background-color: white;
        }
        
        .centeralign {
            text-align: center;
        }
        
        .navbaralign {
            margin-left: 10%;
            text-align: center;
        }
        
        .menufontsize {
            font-size: 22px;
        }
        
        .imgadjustcarousel {
            height: 100%;
            width: 100%; 
            object-fit: contain;
        }
        
        .imgadjustproduct {
            height: 175px;
            object-fit: scale-down;
        }
    </style>

    <body>
        @section('header')
            <!--HEADER ROW-->
            <div id="header-row">
                <div class="container">
                    <div class="row centeralign">
                        <!--LOGO-->
                        <div class="span12"><a class="brand" href="{{route('homeroute')}}"><img width="20%" src="{{URL::asset('img/bariton.png')}}"/></a></div>

                        <!-- MAIN NAVIGATION --> 
                        <div class="navbaralign">
                            <div class="span12">
                                <div class="navbar">
                                    <div class="navbar-inner">
                                        <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </a>
                                        @section('navbar')
                                        <div class="nav-collapse collapse navbar-responsive-collapse menufontsize">
                                            <ul class="nav">
                                                @if (Auth::check())
                                                    <li class="{{$nav_home or ''}}"><a href="{{route('adminhome')}}">HOME</a></li>
                                                @else
                                                    <li class="{{$nav_home or ''}}"><a href="{{route('homeroute')}}">HOME</a></li>
                                                @endif
                                                <li><a>|</a></li>
                                                <li class="{{$nav_news or ''}}"><a href="{{URL::to('news')}}">NEWS</a></li>
                                                <li><a>|</a></li>
                                                <li class="{{$nav_product or ''}}"><a href="{{route('catalogue')}}">OUR PRODUCT</a></li>
                                                <li><a>|</a></li>
                                                <li class="{{$nav_about or ''}}"><a href="{{route('aboutus')}}">ABOUT US</a></li>
                                                <li><a>|</a></li>
                                                <li class="{{$nav_contact or ''}}"><a href="{{route('contact')}}">CONTACT</a></li>
                                                <li><a>|</a></li>
                                                <li class="dropdown {{$nav_user or ''}}">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">MEMBER <b class="caret"></b></a>
                                                    @if (Auth::check())
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('homeroute')}}">My Cart</a></li>
                                                        <li><a href="{{route('logout')}}">Sign Out</a></li>
                                                    </ul>
                                                    @else
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('loginget')}}">Sign In</a></li>
                                                        <li><a href="{{route('registerget')}}">Register</a></li>
                                                    </ul>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                        @show
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- MAIN NAVIGATION -->  
                    </div>
                </div>
            </div>
            <!-- /HEADER ROW -->
        @show

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="container">
        <br>
            @yield('content')
        </div>
        <br><br>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="span12 centeralign">Copyright &copy 2017 Bariton Bakery <br>
                        <small>By: Suitmedia Internee</small>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>