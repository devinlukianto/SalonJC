<?php $nav_news='active';?>

@extends('layout.master')

@section('title', 'News (Admin)')

<style>
    .rotifontsize {
        font-size: 26px;
        font-family: "Cambria";
    }
    
    .imgadjustproduct {
        height: 200px;
        width: 200px;
        object-fit: contain;
    }
</style>

@section('content')
    <h1>News</h1>
    <a href="{{ URL::to('news/create') }}">Create News</a>
    <br><br><br>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    @foreach($news as $key => $value)
    <div>
        <div class="media">
            <div class="span2 centeralign">
                <a class="centeralign"><img class="imgadjustproduct" src="img/cake.png" class="media-object" alt='' /></a>
            </div>
            <div class="span9">
                <div class="media-body">
                    <br>
                    <h4 class="rotifontsize">{{ $value->title }}</h4> 
                    <p>{{ $value->content }}</p>
                    <div>
                        <a class="btn btn-small btn-success" href="{{ URL::to('news/' . $value->id) }}">View</a>
                        <a class="btn btn-small btn-info" href="{{ URL::to('news/' . $value->id . '/edit') }}">Edit</a>
                        {{ Form::open(array('url' => 'news/' . $value->id, 'class' => 'pull-right'))}}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-small')) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@stop