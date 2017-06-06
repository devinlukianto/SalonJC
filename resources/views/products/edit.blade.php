@extends('layout.master')

@section('title', 'Edit Product')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Edit Product</h1>
            </div>
        </div>
    </div>

{{ Form::model($product, array('route' => array('products.update', $product->id), 'method'=>'PUT')) }}

	{{ Form::label('name','Name') }}
	{{ Form::text('name', $product->name) }}
<br>
	{{ Form::label('price','Price') }}
	{{ Form::text('price', $product->price) }}	
<br>
	{{ Form::label('stock','Stock') }}
	{{ Form::text('stock', $product->stock) }}
<br>
	{{ Form::label('description','Description') }}
	{{ Form::textarea('description', $product->description) }}
<br>
	{{ Form::label('category','Category') }}
	{{ Form::select('category', $categories) }}
<br>
  {{ Form::label('brand','Choose brand') }}
	{{ Form::select('brand_id', $brands, $product->brand_id ) }}
	<a class="btn" href="{{ URL::to('brands/create') }}">Or create brands here</a>
<br>
	{{ Form::submit('Edit product', array('class'=>'btn')) }}

{{ Form::close() }}
    <a class="btn" href="{{ URL::to('products') }}">Back to product index</a>
	<a class="btn" href="{{ URL::to('products/' . $product->id) }}">Back to show product</a>

@stop