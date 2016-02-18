<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 20.11.2014
 * Time: 11:59
 */
?>

 @extends('layout.deliveryschedule')

 @section('content')

    <h1 class="page-header">Delivery Schedule</h1>

    @include('deliveryschedule.sub.searchform')

    <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Search Results</h3>
          </div>
          <div class="panel-body">
            <div class="col-xs-6 col-sm-6">
                <div>
                    Delivery from <b>{{singleLocFormat($origin_loc)}}</b> -> <b>{{singleLocFormat($destination_loc)}}</b>
                    <br />(Make shipment order within 7 PM of {{$search_date}})
                </div>
            </div>
            <div class="col-xs-6 col-sm-6">
                <div class="well pull-center">Earliest delivery date is <b>{{$early_date}}</b> (Not later than {{$later_date}})
                ( {{$min_days}} to {{$max_days}} business days.)</div>
            </div>
          </div>
        </div>
    </div>

 @stop