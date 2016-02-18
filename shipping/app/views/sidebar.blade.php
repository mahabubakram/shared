<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 20.11.2014
 * Time: 23:18
 */
 ?>

<div class="sidebar-block">
    <span class="sidebar-heading">Track your shipment</span>
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

<div class="sidebar-block">
    <span class="sidebar-heading">Check delivery date</span>
    <hr class="hrformat" />
    <p>Select origin and destination location to check earliest delivery date. For help contact with our support team.</p>

    {{ Form::open(array('route' => 'deliveryschedule.search', 'method' => 'post', 'class'=>'navbar-form', 'role'=>'search')) }}
        @include('locationSelection')

        <div class="sidebar-search-button">
            <button type="submit" class="btn btn-success"> Search </button>
        </div>
        <div>
           {{link_to_route('deliveryschedule.index', ' > Search more options', $parameters = array(), $attributes = array()); }}
        </div>
    {{Form::close()}}
</div>

<p class="bottom-copyright">
&copy; {{date('Y', time())}} serfmart.com. Powered by Amar Technologies Bangladesh.
</p>