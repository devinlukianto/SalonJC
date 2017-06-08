@extends('layout.master')

@section('title', 'Detail Category')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Detail Category</h1>
            </div>
        </div>
    </div>

<!--DETAIL-->
    <!--Tinggal ambil data dari db-->
    <h2>{{$category->name}}</h2>
    <p>Description : {{$category->description}}</p>
    <br><hr>
    <a class="btn" href="{{ route('categories.index') }}">Back to category index</a>
    <a class="btn" href="{{ route('categories.edit', ['id' => $category->id]) }}">Edit this Category</a>
    {{ Form::open(array('url' => 'categories/' . $category->id, 'class' => 'pull-right')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete this Category', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}

    <br>
    <h2>PRODUK</h2>
    @foreach ($products as $product)
    <p>{{$product->name}}</p>
    @endforeach
@stop