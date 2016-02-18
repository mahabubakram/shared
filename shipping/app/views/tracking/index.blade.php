<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 20.11.2014
 * Time: 11:59
 */
?>

 @extends('layout.tracking')

 @section('content')

<div>
        <h4>Track your shipment</h4>
        <hr class="hrformat" />
        <p>Write your tracking code here. You will find it in shipment receipt or in online order details. If you lost tracking code contact with our support team.</p>

        <!--form class="navbar-form" role="search" method="get" id="search-form" name="search-form"-->
        {{ Form::open(array('route' => 'track.search', 'method' => 'post', 'class'=>'navbar-form', 'role'=>'search')) }}
            <div class="input-group">
               {{ Form::text('tracking_code', '', array('id'=>'','class'=>'form-control', 'placeholder' => 'Write Tracking Code')) }}
                <div class="input-group-btn">
                <button type="submit" class="btn btn-success">Search</button>
                </div>
            </div>
        {{Form::close()}}
</div>

 @stop