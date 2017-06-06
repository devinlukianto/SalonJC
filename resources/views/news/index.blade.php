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
    @if (Auth::check())
        <a href="{{ URL::to('news/create') }}">Create News</a>
        <br><br><br>
    @endif

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
                    <a href="{{ URL::to('news/' . $value->id) }}">
                        <h4 class="rotifontsize">{{ $value->title }}</h4>
                    </a>
                    <p>{{ $value->content }}</p>
                    <div>
                        @if (Auth::check())
                            {{ Form::open(array('url' => 'news/' . $value->id, 'class' => 'pull-right'))}}
                            <a class="btn btn-large btn-info" href="{{ URL::to('news/' . $value->id . '/edit') }}">Edit</a>
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-large btn-danger')) }}
                            {{ Form::close() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="pagination" align="center">
        {{ $news->links() }}
    </div>

@stop