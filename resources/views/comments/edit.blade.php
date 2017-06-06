<?php $nav_news='active';?>

@extends('layout.master')

@if (Auth::check())

	@section('title', 'Edit Comment')

	@section('content')
	    <h1>Edit Comment</h1>

	    {{ HTML::ul($errors->all()) }}

	    {{ Form::model($comment, array('route' => array('comment.update', $comment->id), 'method' => 'PUT')) }}

	        <div class="form-group">
	            {{ Form::label('content', 'Comment') }}
	            {{ Form::textarea('content', null, array('class' => 'form-control')) }}
	        </div>

	        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

	    {{ Form::close() }}

	@endsection

@else

    @section('title', 'Redirecting...')

    @section('content')
        <div class="row feature-box">
            <div class="span12 cnt-title">
                <h1>Access Denied</h1>
                <span>You must log in as admin to see this page</span>
            </div>
        </div>
    @endsection

@endif