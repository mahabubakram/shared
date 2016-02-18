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
        <h2>Agent Login</h2>
        <hr />

        {{ Form::open(array('route' => 'agent.login')) }}
        <div class="form-group">
            {{ Form::label('email', 'Email Address') }}
            {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'youremail@serfmart.com')) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
        {{Form::submit('Login', array('class' => 'btn btn-primary'))}}
        {{ Form::close() }}


        <div class="agent-login-link">
            <p>{{link_to_route('agent.create', '> Forgot your password?', $parameters = array(), $attributes = array()); }}</p>
            <p>{{link_to_route('agent.create', '> Apply for new agent account', $parameters = array(), $attributes = array()); }}</p>
        </div>

     </div>
 </div>
 @stop