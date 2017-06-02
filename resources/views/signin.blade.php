<?php $nav_user='active';?>

@extends('layout.master')

@section('title', 'Sign In')

<style>    
    .btn {
        font-family: "Source Sans Pro";
    }
</style>

@section('content')    
    <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Sign In</h1>
            </div>
        </div>
    </div>
    <!-- /. PAGE TITLE-->
    <div class="row">
		<form class="form-horizontal span12" id="login" action="signin.php" method="POST" onSubmit="return validateInput();">
            <div class="span12">
                <label class="control-label span5">Alamat Email: </label>
                <div class="span7">
                    <input type="text" class="form-control span4" name="user-email" id="email">
                </div>
            </div>
            <br><br>
            <div class="span12">
                <label class="control-label span5" >Password: </label>
                <div class="span7">
                    <input type="password" class="form-control span4" name="password" id="pass">
                    <br><br>
                    <input id="loginbutton" class="btn btn-primary" type="submit" name="loginsubmit" value="SIGN IN">
                </div>
            </div>
            <br><br><br><br><br><br><br>
            <div class="span12">
                <label class="control-label span5" >or CONTINUE AS GUEST </label>
                <div class="span7">
                    <p>Continue your order as a guest, you can sign up later for your account</p>
                    <input id="guestbutton" class="btn btn-primary" type="submit" name="guestsubmit" value="GUEST PAGE">
                </div>
            </div>
        </form>
    </div>
@stop