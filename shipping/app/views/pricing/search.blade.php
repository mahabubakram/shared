<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 20.11.2014
 * Time: 11:59
 */
?>

 @extends('layout.pricing')

 @section('content')

    <h1 class="page-header">Shipment Price</h1>

    @include('pricing.sub.searchform')

    <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Search Results</h3>
          </div>
          <div class="panel-body">
            <div class="col-xs-12 col-sm-12">
                <div class="well pull-center">
                Delivery from {{singleLocFormat($origin_loc)}} -> {{singleLocFormat($destination_loc)}} and in case of
                <b>{{weightFormat($weight)}}</b> delivery price is <b>{{moneyFormat($shipment_price)}}</b></div>
            </div>
          </div>
        </div>
    </div>

 @stop