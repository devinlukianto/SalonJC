@extends('layout.master')

@section('title', 'Add Product')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Add Product</h1>
            </div>
        </div>
    </div>


{{ Form::open(array('url' => 'products')) }}

	{{ Form::label('name','Name') }}
	{{ Form::text('name', Input::old('name')) }}
<br>
	{{ Form::label('price','Price') }}
	{{ Form::text('price', Input::old('price')) }}	
<br>
	{{ Form::label('stock','Stock') }}
	{{ Form::text('stock', Input::old('stock')) }}
<br>
	{{ Form::label('description','Description') }}
	{{ Form::textarea('description', Input::old('description')) }}
<br>
	{{ Form::label('category','Category') }}
	{{ Form::select('category', $categories) }}
<br>
	{{ Form::label('brand','Choose brand') }}
	{{ Form::select('brand_id', $brands ) }}
	<a class="btn" href="{{ URL::to('brands/create') }}">Or create brands here</a>
<br>
	{{ Form::submit('Create product') }}

{{ Form::close() }}
    <a href="{{ URL::to('products') }}">Back to product index</a>

@stop
