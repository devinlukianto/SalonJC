@extends('layout.master')

@section('title', 'Edit Category')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Edit Category</h1>
            </div>
        </div>
    </div>

{{ Form::model($category, array('route' => array('categories.update', $category->id), 'method'=>'PUT')) }}

	{{ Form::label('nama','Nama') }}
	{{ Form::text('nama', $category->nama) }}
<br>
	{{ Form::label('deskripsi','Deskripsi') }}
	{{ Form::textarea('deskripsi', $category->deskripsi) }}
<br>
	{{ Form::submit('Edit category', array('class'=>'btn')) }}

{{ Form::close() }}
    <a class="btn" href="{{ URL::to('categories') }}">Back to category index</a>
	<a class="btn" href="{{ URL::to('categories/' . $category->id) }}">Back to show category</a>
@stop