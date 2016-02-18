<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 20.11.2014
 * Time: 23:09
 */
 ?>

 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        {{link_to('/', 'SERF', $attributes = array('class' => "navbar-brand")) }}
        {{link_to('/', 'shipping solution', $attributes = array('class' => "navbar-brand2")) }}

      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li>{{link_to('/', 'Home', $attributes = array()) }}</li>
          <li>{{link_to_route('pricing.index', 'Pricing', $parameters = array(), $attributes = array()); }}</li>
          <li><a href="#">Agent Location</a></li>
          <li><a href="#">Support</a></li>
        </ul>
        <!--form class="navbar-form navbar-right">
          <input class="form-control" placeholder="Search..." type="text">
        </form-->
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li class="header-welcome-msg">Welcome {{Auth::user()->email}}</li>
                <li>{{link_to_route('agent.index', 'My account', $parameters = array(), $attributes = array()); }}</li>
                <li>{{link_to_route('agent.logout', 'Logout', $parameters = array(), $attributes = array()); }}</li>
            @else
                <li>{{link_to_route('agent.login', 'Agent Login', $parameters = array(), $attributes = array()); }}</li>
            @endif

        </ul>
      </div>
    </div>
  </nav>
