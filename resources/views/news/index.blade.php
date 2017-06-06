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
    @if ($isTrash == 1)
        <h1>News - Trash</h1>
    @else
        <h1>News</h1>
    @endif

    @if (Auth::check())
        <nav class="navbar">
            <ul class="nav">
                <li><a href="{{ URL::to('news/create') }}">Create News</a></li>
                <li><a>|</a></li>
                @if ($isTrash == 1)
                    <li><a href="{{ URL::to('news') }}">News List</a></li>
                @else
                    <li><a href="{{ URL::to('news/trash') }}">Recycle Bin</a></li>
                @endif
            </ul>
        </nav>
        <br><br><br>
    @endif

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    @foreach($news as $key => $value)
    <div>
        <div class="media">
            <div class="span11">
                <div class="media-body">
                    <br>
                    <a href="{{ URL::to('news/' . $value->id) }}">
                        <h4 class="rotifontsize">{{ $value->title }}</h4>
                    </a>
                    <p>{{ $value->content }}</p>
                    <br>
                    <div>
                        @if (Auth::check())
                            {{ Form::open(array('url' => 'news/' . $value->id, 'class' => 'pull-right'))}}
                            @if ($isTrash == 0)
                                <a class="btn btn-large btn-info" href="{{ URL::to('news/' . $value->id . '/edit') }}">Edit</a>
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Remove', array('class' => 'btn btn-large btn-danger')) }}
                            @else
                                <a class="btn btn-large btn-info" href="{{ URL::to('news/' . $value->id . '/restore') }}">Restore</a>
                                <a class="btn btn-large btn-danger" href="{{ URL::to('news/' . $value->id . '/remove') }}">Delete</a>
                            @endif
                            {{ Form::close() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    @endforeach

    <div class="pagination" align="center">
        {{ $news->links() }}
    </div>

@stop