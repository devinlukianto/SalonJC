@extends('layout.master')

@section('title', 'List Product')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>List Product</h1>
            </div>
        </div>
    </div>

<!--READ-->
    <table width="100%" border="1" id="dataTables" style="font-size:80%;">
    <!--Header Table-->
    <tr>
        <th color='black'> Nama </th>
        <th color='black'> Harga </th>
        <th color='black'> Stok </th>
        <th color='black'> Deskripsi </th>
        <th color='black'> Category </th>
        <th color='black' colspan="3"> Action </th>
    </tr>
	@foreach($products as $product)
	    <tr>
	        <td color='black' align='center'>{{$product->name}}</td>
	        <td color='black' align='center'>{{$product->price}}</td>
	        <td color='black' align='center'>{{$product->stock}}</td>
	        <td color='black' align='center'>{{$product->description}}</td>
            @foreach($categories as $category)
                @if ($category->id == $product->id_category)
                    <td color='black' align='center'>{{$category->name}}</td>
                @endif
            @endforeach
	        <td><a class="btn" href="{{ URL::to('products/' . $product->id) }}">Show this Product</a></td>
		    <td><a class="btn" href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit this Product</a></td>
	    	<td>{{ Form::open(array('url' => 'products/' . $product->id)) }}
	        	{{ Form::hidden('_method', 'DELETE') }}
	        	{{ Form::submit('Delete this Product', array('class' => 'btn btn-warning')) }}
	    		{{ Form::close() }}	
	    		</td>
	    </tr>
	@endforeach

    </table>

<!--CREATE-->
    <br>
	<a href="{{ URL::to('products/create') }}" class="btn">Add new Product</a>
@stop

<hr>
	