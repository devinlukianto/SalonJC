<?php $nav_contact='active';?>

@extends('layout.master')

@section('title', 'Contact')

@section('content')
    <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <!-- /. PAGE TITLE-->

    <div class="row">
        <div class="span12"> 
            <div id="map-canvas"></div>
        </div>

        <span class="span6">
            <h3>Address</h3>
            <address>
                <strong>Toko Roti Bariton</strong><br>
                Jl. Ciumbuleuit 108<br>
                Bandung, Jawa Barat<br>
                Phone: (022) 456-7890
            </address>
            
            <address>
                <strong>Contact Person</strong><br>
                <a href="mailto:#">yazid@bariton.com</a>
            </address>

            <p>
            Kepuasan Anda adalah prioritas kami!
            </p>
        </span>
    </div>

    <!--Slow Loading script-->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!--GOOGLE MAP-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxvApqv0LW5MF368edaSgAxQ7exThPLZg&v=3.exp&sensor=false"></script>
    <script>
        var map;
        function initialize() {
            var mapOptions = {
                zoom: 18,
                center: new google.maps.LatLng(-6.879519, 107.603428),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@stop