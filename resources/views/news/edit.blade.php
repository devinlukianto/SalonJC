<?php $nav_news='active';?>

@extends('layout.master')

@if (Auth::check())

@section('title', 'Edit News (Admin)')

    @section('content')
        <h1>Edit {{ $news->name }}</h1>

        {{ HTML::ul($errors->all()) }}

        {{ Form::model($news, array('route' => array('news.update', $news->id), 'method' => 'PUT')) }}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('content', 'Content') }}
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