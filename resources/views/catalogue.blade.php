<?php $nav_product='active';?>

@extends('layout.master')

@section('title', 'Catalogue')

@section('style')
    @parent 
    <style>
        .rotifontsize {
            font-size: 26px;
            font-family: "Cambria";
            text-align: center;
        }
        
        .imgadjustproduct {
            height: 200px;
            width: 200px;
            object-fit: contain;
        }
    </style>
@endsection

@section('content')
    <!--PAGE TITLE-->
    <div class="row">
        <div class="span12">
            <div class="page-header">
            <h1>Our Product</h1>
            </div>
        </div>
    </div>
    <!-- /. PAGE TITLE-->

    <div class="row">
        <div class="span4">
            <div class="media">
                <div class="span3 centeralign">
                    <a class="centeralign"><img class="imgadjustproduct" src="img/bread.png" class="media-object" alt='' /></a>
                </div>
                <div class="span3">
                    <div class="media-body">
                        <h4 class="rotifontsize">Roti Strogranoff Amigo</h4> 
                        <p class="centeralign">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.  
                        </p>
                        <div class="centeralign">
                            <a href="signin.html" class="btn" type="button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="span4">
            <div class="media">
                <div class="span3 centeralign">
                    <a class="centeralign"><img class="imgadjustproduct" src="img/bread2.png" class="media-object" alt='' /></a>
                </div>
                <div class="span3">
                    <div class="media-body">
                        <h4 class="rotifontsize">Roti Tawar Gurih</h4> 
                        <p class="centeralign">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.  
                        </p>
                        <div class="centeralign">
                            <a href="signin.html" class="btn" type="button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="span4">
            <div class="media">
                <div class="span3 centeralign">
                    <a class="centeralign"><img class="imgadjustproduct" src="img/bread3.png" class="media-object" alt='' /></a>
                </div>
                <div class="span3">
                    <div class="media-body">
                        <h4 class="rotifontsize">Donat Kentang Ala-Ala</h4> 
                        <p class="centeralign">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.  
                        </p>
                        <div class="centeralign">
                            <a href="signin.html" class="btn" type="button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="span4">
            <div class="media">
                <div class="span3 centeralign">
                    <a class="centeralign"><img class="imgadjustproduct" src="img/cake.png" class="media-object" alt='' /></a>
                </div>
                <div class="span3">
                    <div class="media-body">
                        <h4 class="rotifontsize">Yellow Sponge Cake</h4> 
                        <p class="centeralign">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.  
                        </p>
                        <div class="centeralign">
                            <a href="signin.html" class="btn" type="button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="span4">
            <div class="media">
                <div class="span3 centeralign">
                    <a class="centeralign"><img class="imgadjustproduct" src="img/tart.jpg" class="media-object" alt='' /></a>
                </div>
                <div class="span3">
                    <div class="media-body">
                        <h4 class="rotifontsize">Tart Birthday</h4> 
                        <p class="centeralign">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.  
                        </p>
                        <div class="centeralign">
                            <a href="signin.html" class="btn" type="button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="span4">
            <div class="media">
                <div class="span3 centeralign">
                    <a class="centeralign"><img class="imgadjustproduct" src="img/roticoklat.jpg" class="media-object" alt='' /></a>
                </div>
                <div class="span3">
                    <div class="media-body">
                        <h4 class="rotifontsize">Roti Coklat Normal</h4> 
                        <p class="centeralign">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.  
                        </p>
                        <div class="centeralign">
                            <a href="signin.html" class="btn" type="button">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
