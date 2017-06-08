<?php $nav_about='active';?>

@extends('layout.master')

@section('title', 'About')

@section('content')
    <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
    <!-- /. PAGE TITLE-->
    <div class="row">
        <div class="span6">
            <img class="pull-left" alt="" src="{{ asset('img/baritontoko.jpg') }}" />
        </div>
        <div class="span6">
            <p>Toko Roti Bariton merupakan toko roti yang menjual berbagai macam roti dan kue. Produk utama Bariton adalah roti tawar, namun Bariton juga menyediakan banyak variasi roti dan kue yang mengikuti tren dan perkembangan jaman.</p>
            <br>
            <p><b>Visi</b><br>Visi Toko Roti Bariton adalah menyediakan makanan bergizi berupa kue dan roti kepada masyarakat.
            </p>            
            <br>
            <p><b>Misi</b><br>Misi Toko Roti Bariton adalah memproduksi makanan berupa kue dan roti yang higienis dan sehat dengan harga yang terjangkau oleh masyarakat.</p>
 
        </div>
    </div>
@stop