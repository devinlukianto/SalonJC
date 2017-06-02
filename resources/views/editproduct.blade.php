@extends('layout.master')

@section('title', 'Edit Product')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Edit Product</h1>
            </div>
        </div>
    </div>

<!--FORM-->
<!--valuenya ambil dari db, actionnya backend-->
<form method="post" action="">
    ID Produk<br>
    <input type="text" value="{{ $prod_id }}" name="id_produk"><br>
    Nama<br>
    <input type="text" value="aa" name="nama_produk"><br>
    Harga<br>
    <input type="text" value="aa" name="harga"><br>
    Stok<br>
    <input type="text" value="aa" name="stok"><br>
    Deskripsi<br>
    <input type="text" value="aa" name="deskripsi"><br>
    
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <input type="submit" value="Save">
</form>
@stop
