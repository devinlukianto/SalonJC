<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JC Salon - Register</title>
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
            <!--PAGE TITLE-->
            <div class="row">
                <div class="span12">
                    <div class="page-header">
                        <h1>Register New Member</h1>
                    </div>
                </div>
            </div>
            <!-- /. PAGE TITLE-->
            <div class="row">
                <form class="form-horizontal span12" method="POST" action="{{route('registerproceed')}}">
                    <div class="span12">
                        <label class="control-label span5">User ID: </label>
                        <div class="span7">
                            <input type="text" class="form-control span4" name="id">
                        </div>
                    </div>
                    <br><br>
                    <div class="span12">
                        <label class="control-label span5">Alamat Email: </label>
                        <div class="span7">
                            <input type="text" class="form-control span4" name="email">
                        </div>
                    </div>
                    <br><br>
                    <div class="span12">
                        <label class="control-label span5" >Password: </label>
                        <div class="span7">
                            <input type="text" class="form-control span3" name="password">
                        </div>
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        <input class="btn btnfontsize" type="submit" value="Register">
                    </div>
                    <br><br>
                </form>
            </div>
        </div>

        @include('footer')

    </body>
</html>