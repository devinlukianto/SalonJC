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
        <script src="{{URL::asset('js/jquery.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>  
    </head>
    
	@include('style')

	<body>
		@include('upperbar')
	    <div class="container">
	        <!-- Feature 
	        ==============================================-->
	        <div class="row feature-box">
	            <div class="span12 cnt-title">
	                <h1>Explore our newly fresh baked products!</h1> 
	                <span>Delightful, Tasty, Cheap</span>        
	            </div>

	            <div class="span4">
	            	<a href="{{route('produk', ['id' => 1])}}">
	                	<img class="imgadjustproduct" src="img/bread.png">
	                </a>
	                <h2>Roti Strogranoff Amigo</h2>
	                <p>
	                From France, to Bandung, with Love...
	                </p>
	            </div>

	            <div class="span4">
		            <a href="{{route('produk', ['id' => 2])}}">
		                <img class="imgadjustproduct" src="img/bread2.png">
	                </a>
	                <h2>French Toast Baked</h2>
	                <p>
	                Bosan roti tawar yang begitu-begitu saja? Cobalah yang satu ini pasti ketagihan!
	                </p>    
	            </div>

	            <div class="span4">
	            	<a href="{{route('produk', ['id' => 3])}}">
	                	<img class="imgadjustproduct" src="img/bread3.png">
                	</a>
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