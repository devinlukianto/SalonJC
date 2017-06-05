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


{{ Form::open(array('url' => 'categories')) }}

	{{ Form::label('nama','Nama') }}
	{{ Form::text('nama', Input::old('nama')) }}
<br>
	{{ Form::label('deskripsi','Deskripsi') }}
	{{ Form::textarea('deskripsi', Input::old('deskripsi')) }}
<br>
	{{ Form::submit('Create category') }}

{{ Form::close() }}
    <a href="{{ URL::to('categories') }}">Back to category index</a>

@stop
