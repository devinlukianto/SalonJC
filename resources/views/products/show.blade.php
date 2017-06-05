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
        <p>Kategori : {{$category[0]->nama}}</p>
    <br><hr>
    <a class="btn" href="{{ URL::to('products') }}">Back to product index</a>
    <a class="btn" href="{{ URL::to('products/' . $product->id . '/edit') }}">Edit this Product</a>
    {{ Form::open(array('url' => 'products/' . $product->id, 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete this Product', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
@stop