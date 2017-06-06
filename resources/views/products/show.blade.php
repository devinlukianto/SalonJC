@extends('layout.master')

@section('title', 'Detail Product')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Detail Product</h1>
            </div>
        </div>
    </div>

<!--DETAIL-->
    <!--Tinggal ambil data dari db-->
    <h2>{{$product->name}}</h2>
    <p>Harga: {{$product->price}}</p>
    <p>Stok saat ini:{{$product->stock}}</p>
    <hr>
    <p>{{$product->description}}</p>
    <hr>
        <p>Kategori : {{$category->name}}</p>
    <br><hr>
@if($brand)
    <p>Brand: {{$brand->name}}</p>
    <p>{{$brand->description}}</p>
    <br><hr>
@else
    No brand for this bread<br>
    <a class="btn" href="{{ URL::to('products/' . $product->id . '/edit') }}">Add brand</a>
    <br><hr>
@endif

@if(isset($is_trash))
    <a class="btn" href="{{ URL::to('products/trash') }}">Back to product trash index</a>
    <a class="btn" href="{{ URL::to('products/' . $product->id . '/restore') }}">Restore this Product</a>
    {{ Form::open(array('url' => 'products/' . $product->id . '/delete', 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete this Product Permanently', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
@else
    <a class="btn" href="{{ URL::to('products') }}">Back to product index</a>
    <a class="btn" href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit this Product</a>
    {{ Form::open(array('url' => 'products/' . $product->id, 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete this Product', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
@endif
@stop