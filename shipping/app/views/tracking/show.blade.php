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

    <h1 class="page-header">Tracking code: {{$tracking->tracking_code}}</h1>

    <div class="row">
        <div class="col-xs-6 col-sm-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Shipment Address</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped">
                   <tr>
                        <td>To:</td>
                        <td>{{$to_address}}</td>
                   </tr>
                   <tr>
                       <td>From:</td>
                       <td>{{$from_address}}</td>
                   </tr>
                </table>
              </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Package details</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped">
                   <tr>
                        <td>Weight:</td>
                        <td> {{$tracking->weight}} gram</td>
                   </tr>
                   <tr>
                       <td>Box size:</td>
                       <td>{{$tracking->box_dimension}} </td>
                   </tr>
                   <tr>
                      <td>Product type:</td>
                      <td>{{$tracking->product_types}}</td>
                   </tr>
                   <tr>
                      <td>Product details:</td>
                      <td>{{$tracking->product_details}}</td>
                   </tr>

                </table>
              </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-body">

        <div class="col-xs-4 col-sm-2" align="center">
            <div class="circle-success">Parcel received</div>
         <span class="text-muted">10 Dec, 10:35 AM at Gulshan</span>
        </div>
        <div class="col-xs-4 col-sm-2" align="center">
        <div class="circle-success">Parcel Processed</div>
        <span class="text-muted">10 Dec, 2:35 PM at Gulshan</span>
        </div>
        <div class="col-xs-4 col-sm-2" align="center">
         <div class="circle-progress">On the way</div>
         <span class="text-muted">10 Dec, 10:35 AM at Motijil</span>
        </div>
        <div class="col-xs-4 col-sm-2" align="center">
            <div class="circle-unexecuted">Ready to Deliver</div>
            <span class="text-muted">at 9:00 AM 12.10.2014</span>
        </div>
        <div class="col-xs-4 col-sm-2" align="center">
            <div class="circle-unexecuted">Delivered to customer</div>
            <span class="text-muted">At 2:30 PM 12.10.2014 to Mr. Saber Ali. (Rel. Brother)</span>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Tracking History</h3>
      </div>
      <div class="panel-body">
        <table class="table table-striped">
        @foreach ($tracking->history as $data)
           <tr>
                <td>{{$data->event_date_time}}</td>
                <td>{{trackingStatusLocFormat($data->tracking_status_id, $data->location_id)}}</td>
           </tr>
        @endforeach
        </table>
      </div>
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