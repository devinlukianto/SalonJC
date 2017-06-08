<?php $nav_news='active';?>

@extends('layout.master')

@if (Auth::check())

    @section('title', 'Create News (Admin)')

    @section('content')
        <h1>Create News</h1>

        {{ HTML::ul($errors->all()) }}

        {{ Form::open(array('url' => 'news')) }}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('content', 'Content') }}
                {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
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