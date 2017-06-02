@foreach($products as $product)
	{{$product->name}}<br>
	{{$product->price}}<br>
	{{$product->stock}}<br>
	{{$product->description}}<br>
	<a class="btn" href="{{ URL::to('products/' . $product->id) }}">Show this Product</a>
    <a href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit this Product</a>
    {{ Form::open(array('url' => 'products/' . $product->id, 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete this Product', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
    <hr>	
@endforeach