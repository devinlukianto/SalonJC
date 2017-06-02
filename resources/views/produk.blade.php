<?php $nav_product='active';?>
@extends('layout.master')

@section('title', 'Produk')

@section('content')
   <h1>PRODUK {{$prod_id}}</h1>

    @for ($i = 0; $i < 10; $i++)
        <p>The current value is {{ $i }}</p>
    @endfor
@stop