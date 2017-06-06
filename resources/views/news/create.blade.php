<?php $nav_news='active';?>

@extends('layout.master')

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
@stop