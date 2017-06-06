<?php $nav_news='active';?>

@extends('layout.master')

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

@stop