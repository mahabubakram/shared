<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 30.11.2014
 * Time: 22:38
 */

 ?>

 @extends('layout.agents')

 @section('content')

 <div class="row">
     <div class="col-md-4 col-md-offset-4">
         <h2>Create agent account</h2>
         {{ Form::open(array('route' => array('agent.store'), 'method' => 'post')) }}
         <div class="form-group">
             {{Form::label('name','Name')}}
             {{Form::text('name', null,array('class' => 'form-control'))}}
         </div>
         <div class="form-group">
            {{Form::label('address','Address')}}
            {{Form::text('address', null,array('class' => 'form-control'))}}
         </div>
         <div class="form-group">
            {{Form::label('location_id','Location')}}
            {{Form::select('location_id', locationDataArray(), isset($location_id) ? $location_id : 'null' , array('class'=>'form-control') ) }}
         </div>
         <div class="form-group">
            {{Form::label('mobile','Mobile')}}
            {{Form::text('mobile', null,array('class' => 'form-control'))}}
         </div>
         <div class="form-group">
             {{Form::label('email','Email')}}
             {{Form::text('email', null,array('class' => 'form-control'))}}
         </div>
         <div class="form-group">
             {{Form::label('password','Password')}}
             {{Form::password('password',array('class' => 'form-control'))}}
         </div>
         <div class="form-group">
             {{Form::label('password_confirmation','Confirmed password')}}
             {{Form::password('password_confirmation',array('class' => 'form-control'))}}
         </div>
         {{Form::submit('Register', array('class' => 'btn btn-primary'))}}
         {{ Form::close() }}
     </div>
 </div>
 @stop