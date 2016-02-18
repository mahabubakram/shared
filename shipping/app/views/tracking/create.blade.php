<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 30.11.2014
 * Time: 22:38
 */

 ?>

 @extends('layout.tracking')

 @section('content')

<h4>Create New Shipment</h4>
<hr />
{{ Form::open(array('route' => array('track.store'), 'method' => 'post')) }}

 <div class="row">
     <div class="col-md-4">
         <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">From</h3>
            </div>
            <div class="panel-body">
                 <div class="form-group">
                     {{Form::text('from_name', null, array('placeholder'=> 'Name', 'class' => 'form-control'))}}
                 </div>
                 <div class="form-group">
                    {{Form::textarea('from_address', null, array('rows'=>1, 'placeholder'=> 'Address', 'class' => 'form-control'))}}
                 </div>
                 <div class="form-group">
                    {{Form::select('from_location_id', locationDataArray(), isset($location_id) ? $location_id : 'null' , array('class'=>'form-control') ) }}
                 </div>
                 <div class="form-group">
                    {{Form::text('from_mobile1', null,array('placeholder'=> 'Mobile 1', 'class' => 'form-control'))}}
                 </div>
                 <div class="form-group">
                     {{Form::text('from_mobile2', null,array('placeholder'=> 'Mobile 2', 'class' => 'form-control'))}}
                 </div>
            </div>
         </div>
     </div>
     <div class="col-md-4">
         <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">To</h3>
            </div>
            <div class="panel-body">
                 <div class="form-group">
                     {{Form::text('to_name', null,array('placeholder'=> 'Name', 'class' => 'form-control'))}}
                 </div>
                 <div class="form-group">
                    {{Form::textarea('to_address', null, array('rows'=>1, 'placeholder'=> 'Address', 'class' => 'form-control'))}}
                 </div>
                 <div class="form-group">
                    {{Form::select('to_location_id', locationDataArray(), isset($location_id) ? $location_id : 'null' , array('class'=>'form-control') ) }}
                 </div>
                 <div class="form-group">
                    {{Form::text('to_mobile1', null,array('placeholder'=> 'Mobile 1', 'class' => 'form-control'))}}
                 </div>
                 <div class="form-group">
                     {{Form::text('to_mobile2', null,array('placeholder'=> 'Mobile 2', 'class' => 'form-control'))}}
                 </div>
            </div>
         </div>
     </div>
     <div class="col-md-4">
          <div class="panel panel-default">
             <div class="panel-heading">
                 <h3 class="panel-title">Shipment details</h3>
             </div>
             <div class="panel-body">
                  <div class="form-group">
                      {{ Form::select('product_types', productTypeDataArray(), isset($product_types) ? $product_types : 'null' , array('placeholder'=> 'Product Type', 'class'=>'form-control') ) }}
                  </div>
                  <div class="form-group">
                     {{Form::text('product_details', null,array('placeholder'=> 'Product details', 'class' => 'form-control'))}}
                  </div>
                  <div class="form-group">
                     {{ Form::select('weight', weightDataArray(), isset($weight) ? $weight : 'null' , array('class'=>'form-control') ) }}
                  </div>
                  <div class="form-group">
                     {{Form::text('box_dimension', null,array('placeholder'=> 'Box dimension', 'class' => 'form-control'))}}
                  </div>
                  <div class="form-group">
                     {{ Form::select('delivery_type', deliveryTypeDataArray(), isset($delivery_type) ? $delivery_type : 'null' , array('placeholder'=> 'Delivery Type', 'class'=>'form-control') ) }}
                  </div>
                  <div class="form-group">
                    {{Form::text('sender_comment', null,array('placeholder'=> 'Sender comment', 'class' => 'form-control'))}}
                  </div>
             </div>
          </div>
     </div>
 </div>

 <div class="row">
      <div class="col-md-4">
          <div class="panel panel-default">
             <div class="panel-heading">
                 <h3 class="panel-title">Pricing</h3>
             </div>
             <div class="panel-body">
                  <div class="form-group">
                    {{ Form::label('shipping_price', 'Shipment Price') }}
                    {{Form::text('shipping_price', null, array('placeholder'=> 'Write customer price', 'class' => 'form-control'))}}
                  </div>
                  <div class="checkbox-inline">
                     {{Form::radio('paid', 1, true)}} {{ Form::label('paid', 'Paid') }}
                     {{Form::radio('paid', 0, false)}} {{ Form::label('paid', 'Un-Paid') }}
                  </div>
                  <div class="form-group">
                     {{Form::text('sender_name', null,array('placeholder'=> 'Sender name', 'class' => 'form-control'))}}
                  </div>
                  <div class="form-group">
                     {{ Form::select('sender_payment_type', paymentTypeDataArray(), isset($sender_payment_type) ? $sender_payment_type : 'null' , array('placeholder'=> 'Payment Type', 'class'=>'form-control') ) }}
                  </div>

             </div>
          </div>
      </div>
  </div>

{{Form::submit('Submit', array('class' => 'btn btn-success'))}}
{{ Form::close() }}

 @stop
