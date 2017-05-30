<!doctype html>
<html lang="{{ config('app.locale') }}">
	<head>
	    <meta charset="utf-8">
	    <title>JC Salon - Home</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    
	    <!-- Bootstrap -->
	    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
	    <link href="{{URL::asset('css/bootstrap-responsive.css')}}" rel="stylesheet">
	    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

	    <!--Script-->
	    <script src="http://code.jquery.com/jquery.js"></script>
	    <script src="{{URL::asset('js/jquery.css')}}"></script>  
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
	    <!--HEADER ROW-->
	    <div id="header-row">
	        <div class="container">
	            <div class="row centeralign">
	                <!--LOGO-->
	                <div class="span12"><a class="brand" href="index.html"><img width="20%" src="img/bariton.png"/></a></div>

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
	                                        <li class="active"><a href="index.html">HOME</a></li>
	                                        <li><a>|</a></li>
	                                        <li><a href="product.html">OUR PRODUCT</a></li>
	                                        <li><a>|</a></li>
	                                        <li><a href="about.html">ABOUT US</a></li>
	                                        <li><a>|</a></li>
	                                        <li><a href="contact.html">CONTACT</a></li>
	                                        <li><a>|</a></li>
	                                        <li class="dropdown">
	                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">MEMBER <b class="caret"></b></a>
	                                            <ul class="dropdown-menu">
	                                                <li><a href="signin.html">Sign In</a></li>
	                                                <li><a href="register.html">Register</a></li>
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

	    <div class="container">
	        <!--Carousel
	        ==================================================-->
	        <div id="myCarousel" class="carousel slide">
	            <div class="carousel-inner">
	                <div class="active item">
	                    <div class="container">
	                        <div class="row">
	                            <div class="span6">
	                                <div class="carousel-caption">
	                                    <h1>April Store Promo!</h1>
	                                    <p class="lead">Sentuhan lembut dari adonan cake, juga rasa pisang yang menggoda akan jelas membuat anda ketagihan!</p>
	                                </div>
	                            </div>
	                            <div class="span6"> <img class="imgadjustcarousel" src="img/cake.png"></div>
	                        </div>
	                    </div>
	                </div>
	                <div class="item">
	                    <div class="container">
	                        <div class="row">
	                            <div class="span6">
	                                <div class="carousel-caption">
	                                    <h1>Website Grand Opening!</h1>
	                                    <p class="lead">Beli roti secara online, gratis biaya pengantaran! Segera bergabung dan pesan rotinya!</p>
	                                    <a class="btn btn-large btn-primary" href="register.html">Daftar Sekarang</a>
	                                </div>
	                            </div>
	                            <div class="span6"> <img src="img/slide1.jpg"></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            
	            <!-- Carousel nav -->
	            <a class="carousel-control left " href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
	            <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a>
	            <!-- /.Carousel nav -->
	        </div>
	        <!-- /Carousel -->

	        <!-- Feature 
	        ==============================================-->
	        <div class="row feature-box">
	            <div class="span12 cnt-title">
	                <h1>Explore our newly fresh baked products!</h1> 
	                <span>Delightful, Tasty, Cheap</span>        
	            </div>

	            <div class="span4">
	                <img class="imgadjustproduct" src="img/bread.png">
	                <h2>Roti Strogranoff Amigo</h2>
	                <p>
	                From France, to Bandung, with Love...
	                </p>
	            </div>

	            <div class="span4">
	                <img class="imgadjustproduct" src="img/bread2.png">
	                <h2>French Toast Baked</h2>
	                <p>
	                Bosan roti tawar yang begitu-begitu saja? Cobalah yang satu ini pasti ketagihan!
	                </p>    
	            </div>

	            <div class="span4">
	                <img class="imgadjustproduct" src="img/bread3.png">
	                <h2>Donat Kentang Ala-Ala</h2>
	                <p>
	                Donat kentang enak enyoy, gurih dan manis bercampur aduk
	                </p>
	            </div>
	        </div>
	        <!-- /.Feature -->
	    </div>
	    <br><br>
	    
	    <!--Footer
	    ==========================-->
	    <footer>
	        <div class="container">
	            <div class="row">
	                <div class="span12 centeralign">Copyright &copy 2017 Bariton Bakery <br>
	                    <small>By: C2-G03 Sistem Informasi</small>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <!--/.Footer-->
	    
	</body>
</html>