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
    
	@include('style')

	<body>
		@include('upperbar')
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
	    
	    @include('footer')
	</body>
</html>