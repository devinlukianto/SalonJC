@foreach($products as $product)
	{{$product->name}}<br>
	{{$product->price}}<br>
	{{$product->stock}}<br>
	{{$product->description}}<br>
	<hr>
@endforeach