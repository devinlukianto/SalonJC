<?php $nav_news='active';?>

@extends('layout.master')

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

@stop