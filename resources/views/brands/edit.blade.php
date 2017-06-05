@extends('layout.master')

@section('title', 'Edit Brand')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Edit Brand</h1>
            </div>
        </div>
    </div>

{{ Form::model($brand, array('route' => array('brands.update', $brand->id), 'method'=>'PUT')) }}

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
	{{ Form::submit('Edit brand') }}

{{ Form::close() }}
    <a class="btn" href="{{ URL::to('brands') }}">Back to brand index</a>
	<a class="btn" href="{{ URL::to('brands/' . $brand->id) }}">Back to show brand</a>

@stop