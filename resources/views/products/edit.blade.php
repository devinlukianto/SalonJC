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
	{{ Form::submit('Edit product') }}

{{ Form::close() }}
    <a href="{{ URL::to('products') }}">Back to product index</a>
	<a class="btn" href="{{ URL::to('products/' . $product->id) }}">Back to show product</a>
