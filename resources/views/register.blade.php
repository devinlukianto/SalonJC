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
                <form class="form-horizontal span12">
                    <div class="span12">
                        <label class="control-label span5">Nama Lengkap: </label>
                        <div class="span7">
                            <input type="text" class="form-control span4" id="nama">
                        </div>
                    </div>
                    <br><br>
                    <div class="span12">
                        <label class="control-label span5">Alamat Email: </label>
                        <div class="span7">
                            <input type="text" class="form-control span4" id="email">
                        </div>
                    </div>
                    <br><br>
                    <div class="span12">
                        <label class="control-label span5" >Password: </label>
                        <div class="span7">
                            <input type="text" class="form-control span3" id="pass">
                        </div>
                    </div>
                    <br><br>
                    <div class="span12">
                        <label class="control-label span5">Alamat Lengkap: </label>
                        <div class="span7">
                            <input type="text" class="form-control span6" id="alamat">
                        </div>
                    </div>
                    <br><br>
                    <div class="span12">
                        <label class="control-label span5">Nomor Telepon: </label>
                        <div class="span7">
                            <input type="text" class="form-control span3" id="telp">
                            <br><br>
                            <a href="signin.html" class="btn btnfontsize" type="button">REGISTER</a>
                        </div>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>

        @include('footer')

    </body>
</html>