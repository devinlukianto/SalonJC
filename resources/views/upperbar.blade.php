<!doctype html>
<html lang="{{ config('app.locale') }}">	
	<body>
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
	                                        <li><a href="index.html">HOME</a></li>
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
    </body>
</html>