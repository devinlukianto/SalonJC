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
    <p> {{ $prod_id }}</p>
    <p> Nama Produk </p>
    <p> Harga </p>
    <p> Stok </p>
    <p> Deskripsi </p>
@stop
