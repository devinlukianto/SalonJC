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
                <h4><a href="{{ URL::to('products')}}">List Product</a> | <a href="{{ URL::to('products/trash')}}">List Deleted Product</a>
                </h4>
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
        <th color='black'> Brand </th>
        <th color='black'> Category </th>
        <th color='black' colspan="3"> Action </th>
    </tr>
	@foreach($products as $product)
	    <tr>
	        <td color='black' align='center'>{{$product->name}}</td>
	        <td color='black' align='center'>{{$product->price}}</td>
	        <td color='black' align='center'>{{$product->stock}}</td>
	        <td color='black' align='center'>{{$product->description}}</td>
            <td color='black' align='center'>
            @foreach($brands as $brand)
                @if($brand->id == $product->brand_id)
                    {{$brand->name}}<br>
                @endif
            @endforeach
            </td>
            <td color='black' align='center'>
            @foreach($categories as $category)
                @if ($category->id == $product->id_category)
                    {{$category->name}}
                @endif
            @endforeach
            </td>
            @if($is_trash==1)
            <td><a class="btn" href="{{ route('product.trash.show', ['id'=> $product->id]) }}">Show this Product</a></td>
            <td><a class="btn" href="{{ route('product.trash.restore', ['id'=> $product->id]) }}">Restore this Product</a></td>
            <td>{{ Form::open(array('url' => route('product.trash.delete' , ['id'=>$product->id]), 'method'=> 'DELETE')) }}
                {{ Form::submit('Delete this Product Permanently', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                </td>
            @else
	        <td><a class="btn" href="{{ route('products.show', ['id'=>$product->id]) }}">Show this Product</a></td>
		    <td><a class="btn" href="{{ route('products.edit', ['id'=>$product->id]) }}">Edit this Product</a></td>
	    	<td>{{ Form::open(array('url' => route('products.destroy',['id'=>$product->id]) , 'method'=>'DELETE')) }}
	        	{{ Form::submit('Delete this Product', array('class' => 'btn btn-warning')) }}
	    		{{ Form::close() }}
	    		</td>
            @endif
	    </tr>
	@endforeach
    </table>

    <div class="pagination" align="center">
    {{ $products->links() }}
    </div>

<!--CREATE-->
    <br>
	<a href="{{ URL::to('products/create') }}" class="btn">Add new Product</a>
@stop

<hr>
	