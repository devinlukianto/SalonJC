<?php $nav_user='active';?>

@extends('layout.master')

@section('title', 'Register')
<style>    
    .rotifontsize {
        font-size: 26px;
        text-align: center;
    }
    
    .imgadjustproduct {
        height: 200px;
        width: 200px;
        object-fit: contain;
    }
</style>
@section('content')
   <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Register New Member</h1>
            </div>
        </div>
    </div>
    <!-- /. PAGE TITLE-->
    @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            <li><span>{{ $err }}</li>
        @endforeach
        </div>
    @endif

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
                    <input type="password" class="form-control span3" name="password">
                </div>
                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input class="btn btn-primary" type="submit" value="REGISTER">
            </div>
            <br><br>
        </form>
    </div>
@stop