<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 30.11.2014
 * Time: 22:38
 */

 ?>

 <div class="well pull-center">
     <span>{{link_to_route('agent.index', ' Dashboard', $parameters = array(), $attributes = array()); }}</span>
     <span> | </span>
     <span>{{link_to_route('track.create', ' Create New Shipment', $parameters = array(), $attributes = array()); }}</span>
     <span> | </span>
     <span>{{link_to_route('track.list', ' Shipment List', $parameters = array(), $attributes = array()); }}</span>
 </div>
