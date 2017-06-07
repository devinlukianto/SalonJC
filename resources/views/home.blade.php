<?php $nav_home='active';?>

@extends('layout.master')

@section('title', 'Home')

@section('content')
    <div class="row feature-box">
        <div class="span12 cnt-title">
            <h1>Explore our newly fresh baked products!</h1> 
            <span>Delightful, Tasty, Cheap</span>        
        </div>

        <div class="span4">
        	<a href="{{ route('produk', ['id' => 1]) }}">
            	<img class="imgadjustproduct" src="img/bread.png">
            </a>
            <h2>Roti Strogranoff Amigo</h2>
            <p>
            From France, to Bandung, with Love...
            </p>
        </div>

        <div class="span4">
            <a href="{{ route('produk', ['id' => 2]) }}">
                <img class="imgadjustproduct" src="img/bread2.png">
            </a>
            <h2>French Toast Baked</h2>
            <p>
            Bosan roti tawar yang begitu-begitu saja? Cobalah yang satu ini pasti ketagihan!
            </p>    
        </div>

        <div class="span4">
        	<a href="{{ route('produk', ['id' => 3]) }}">
            	<img class="imgadjustproduct" src="img/bread3.png">
        	</a>
            <h2>Donat Kentang Ala-Ala</h2>
            <p>
            Donat kentang enak enyoy, gurih dan manis bercampur aduk
            </p>
        </div>
    </div>
@stop