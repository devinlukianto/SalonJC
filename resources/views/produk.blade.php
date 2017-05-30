<!doctype html>
<html lang="{{ config('app.locale') }}">
	<head>
	    <meta charset="utf-8">
	    <title>JC Salon - {{$prod_id}}</title>
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
		
		<h1>PRODUK {{$prod_id}}</h1>

		@for ($i = 0; $i < 10; $i++)
		    <p>The current value is {{ $i }}</p>
		@endfor

		@include('footer')
	</body>
</html>