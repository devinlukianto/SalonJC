<h1>Produk #{{$product->id}}</h1>


	{{$product->name}}<br>
	{{$product->price}}<br>
	{{$product->stock}}<br>
	{{$product->description}}<br>

    <a href="{{ URL::to('products') }}">Back to product index</a>
    <a href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit this Product</a>
    {{ Form::open(array('url' => 'products/' . $product->id, 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete this Product', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}