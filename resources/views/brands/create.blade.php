@extends('layout.master')

@section('title', 'Add Brand')

@section('navbar')
@endsection

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
    @foreach($errors->all() as $err)
        <li><span>{{ $err }}</li>
    @endforeach
    </div>
@endif

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Add Brand</h1>
            </div>
        </div>
    </div>


{{ Form::open(array('url' => 'brands')) }}

	{{ Form::label('name','Name') }}
	{{ Form::text('name', Input::old('name')) }}
<br>
	{{ Form::label('description','Description') }}
	{{ Form::textarea('description', Input::old('description')) }}	
<br>
	{{ Form::label('company','Company') }}
	{{ Form::text('company', Input::old('company')) }}
<br>
	{{ Form::label('company_phone','Company Phone') }}
	{{ Form::text('company_phone', Input::old('company_phone')) }}
<br>
	{{ Form::label('company_address','Company Address') }}
	{{ Form::textarea('company_address', Input::old('company_address')) }}
<br>
	{{ Form::submit('Create brand') }}

{{ Form::close() }}
    <a href="{{ URL::to('brands') }}">Back to brand index</a>

@stop
