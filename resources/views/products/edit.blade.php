{{ Form::open(array('route' => array('products.update', $product->id))) }}

	{{ Form::label('name','Name') }}
	{{ Form::text('name', Input::old($product->name)) }}
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
	{{ Form::submit('Edit product') }}

{{ Form::close() }}