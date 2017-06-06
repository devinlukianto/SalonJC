<?php $nav_news='active';?>

@extends('layout.master')

@section('title', "$news->title" . ' (Admin)')

@section('content')
	<div align="right">	
		<a href="{{ URL::to('news') }}">Back to News Page</a>
	</div>
	
    <h1>{{ $news->title }}</h1>

    <div>
        <p>{{ $news->content }}</p>
    </div> 

    <br><br>
    
	@include('comments.index')

	<br><br>
	
	{{ Form::open(array('url' => 'comment')) }}
	<div class="form-group">
		{{ Form::label('content', 'Comment') }}
		{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
		{{ Form::hidden('news_id', "$news->id")}}
	</div>
	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	
@endsection

