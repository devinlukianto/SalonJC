@extends('layout.master')

@section('title', 'Add Category')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Add Category</h1>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            <li><span>{{ $err }}</li>
        @endforeach
        </div>
    @endif

{{ Form::open(array('url' => 'categories')) }}

	{{ Form::label('name','Name') }}
	{{ Form::text('name', Input::old('name')) }}
<br>
	{{ Form::label('description','Description') }}
	{{ Form::textarea('description', Input::old('description')) }}
<br>
	{{ Form::submit('Create category') }}

{{ Form::close() }}
    <a href="{{ route('categories.index') }}">Back to category index</a>

@stop
