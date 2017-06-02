<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <title>JC Salon - @yield('title')</title>
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
        div, h1, h2, h3 {
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
            margin-left: 14%;
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
                        <div class="span12"><a class="brand" href="index.html"><img width="20%" src="{{URL::asset('img/bariton.png')}}"/></a></div>

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
                                        <div class="nav-collapse collapse navbar-responsive-collapse menufontsize">
                                            <ul class="nav">
                                                <li class="{{$nav_home or ''}}"><a href="{{route('homeroute')}}">HOME</a></li>
                                                <li><a>|</a></li>
                                                <li class="{{$nav_product or ''}}"><a href="{{route('catalogue')}}">OUR PRODUCT</a></li>
                                                <li><a>|</a></li>
                                                <li class="{{$nav_about or ''}}"><a href="{{route('aboutus')}}">ABOUT US</a></li>
                                                <li><a>|</a></li>
                                                <li class="{{$nav_contact or ''}}"><a href="{{route('contact')}}">CONTACT</a></li>
                                                <li><a>|</a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">MEMBER <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('signinpage')}}">Sign In</a></li>
                                                        <li><a href="{{route('registerpage')}}">Register</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
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
            @yield('content')
        </div>
        <br><br>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="span12 centeralign">Copyright &copy 2017 JC Salon <br>
                        <small>By: Suitmedia Internee</small>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>