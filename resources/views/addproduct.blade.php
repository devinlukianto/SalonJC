@extends('layout.master')

@section('title', 'Add Product')

@section('navbar')
@endsection

@section('content')
<!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Add Product</h1>
            </div>
        </div>
    </div>

<!--FORM-->
<!-- actionnya backend -->
<form method="post" action="">
    ID Produk<br>
    <input type="text" name="id_produk"><br>
    Nama<br>
    <input type="text" name="nama_produk"><br>
    Harga<br>
    <input type="text" name="harga"><br>
    Stok<br>
    <input type="text" name="stok"><br>
    Deskripsi<br>
    <input type="text" name="deskripsi"><br>
    
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <input type="submit" value="Save">
</form>
@stop
