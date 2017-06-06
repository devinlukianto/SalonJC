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
		<form class="form-horizontal span12" method="POST" action="{{route('loginpost')}}">
            <div class="span12">
                <label class="control-label span5" >SIGN IN AS ADMIN</label>
            </div>
            <div class="span12">
                <label class="control-label span5">Email: </label>
                <div class="span7">
                    <input type="text" class="form-control span4" name="email">
                </div>
            </div>
           <div class="span12">
                <label class="control-label span5">Password: </label>
                <div class="span7">
                    <input type="password" class="form-control span4" name="password">
                    <br><br>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <input type="submit" class="btn btn-primary" value="LOGIN">
                </div>
            </div>
        </form>
        <br><br><br><br><br><br><br>
        <form class="form-horizontal span12" method="GET" action="{{route('guestget')}}">
            <div class="span12">
                <label class="control-label span5" >SIGN IN AS GUEST</label>
                <div class="span7">
                    <p>Continue as a guest to order product</p>
                    <input type="submit" class="btn btn-primary" value="GUEST PAGE">
                </div>
            </div>
        </form>
    </div>
@stop