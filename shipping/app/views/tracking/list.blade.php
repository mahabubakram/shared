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

<h4>Shipment Orders</h4>

<div class="table-responsive">
    <table class="table table-striped table-hover">
    <tr>
        <th>Code</th>
        <th>Status</th>
        <th>Received at</th>
        <th>Ship To</th>
        <th>From</th>
        <th>Cost</th>
        <th>Payment status</th>
        <th>Updated at</th>
        <th>Action</th>

    </tr>
    @foreach ($tracking as $track)
       <tr>
            <td>{{link_to_route('track.show', $track->tracking_code, $parameters = array('id'=>$track->id), $attributes = array()); }}</td>
            <td>{{trackingStatus($track->tracking_status_id)}}</td>
            <td>{{$track->receiving_date_time}}</td>
            <td>{{$track->to_name}}<br />{{singleLocFormat($track->to_location_id)}}</td>
            <td>{{$track->from_name}}<br />{{singleLocFormat($track->from_location_id)}}</td>
            <td>{{$track->shipping_price}}</td>
            <td>{{$track->payment_status}}</td>
            <td>{{$track->updated_at}}</td>
            <td>{{link_to_route('track.edit', 'Edit', $parameters = array('id'=>$track->id), $attributes = array()); }}</td>
       </tr>
    @endforeach
    </table>
</div>
     <!--div class="row placeholders">
       <div class="col-xs-6 col-sm-3 placeholder">
         <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzM5REJBQyIvPjxnPjx0ZXh0IHg9IjczLjUiIHk9IjEwMCIgc3R5bGU9ImZpbGw6IzFFMjkyQztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjIwMHgyMDA8L3RleHQ+PC9nPjwvc3ZnPg==" data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="200x200">
         <h4>Label</h4>
         <span class="text-muted">Something else</span>
       </div>
     </div-->

     <!--h2 class="sub-header">Section title</h2>
     <div class="table-responsive">
       <table class="table table-striped">
         <thead>
           <tr>
             <th>#</th>
             <th>Header</th>
             <th>Header</th>
             <th>Header</th>
             <th>Header</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>1,001</td>
             <td>Lorem</td>
             <td>ipsum</td>
             <td>dolor</td>
             <td>sit</td>
           </tr>
         </tbody>
       </table>
     </div-->

 @stop