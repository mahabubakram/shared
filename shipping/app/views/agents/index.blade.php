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

<h4>Agent Dashboard</h4>

 <div class="row">
     <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Pending Shipments</h3>
            </div>
            <div class="panel-body">
                Pending Shipments
            </div>
        </div>
     </div>
     <div class="col-md-6">
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h3 class="panel-title">Recent updated Shipments</h3>
             </div>
             <div class="panel-body">
                 Recent updated shipments
             </div>
         </div>
     </div>
 </div>
 @stop