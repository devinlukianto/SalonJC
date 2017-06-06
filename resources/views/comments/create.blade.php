<?php $nav_news='active';?>

@extends('layout.master')

@section('title', 'Add New Comment')

@section('content')
    <h1>Add New Comment</h1>

    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'comment')) }}

        <div class="form-group">
            {{ Form::label('content', 'Comment') }}
            {{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
            {{ Form::hidden('news_id', '$news_id')}}
        </div>

        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@stop