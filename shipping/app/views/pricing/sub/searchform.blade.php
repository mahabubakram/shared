<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 20.11.2014
 * Time: 11:59
 */
?>

    <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Search Delivery Schedule</h3>
          </div>
          <div class="panel-body">

          {{ Form::open(array('route' => 'pricing.search', 'method' => 'post', 'class'=>'', 'role'=>'search')) }}

            <div class="row pull-center">
              <div class="col-lg-6">
                @include('locationSelection')
              </div>
              <div class="col-lg-6" >
                  <div class="radio">
                    {{ Form::select('product_type', productTypeDataArray(), isset($product_type) ? $product_type : 'null' , array('class'=>'form-control') ) }}
                  </div>
                  <div class="radio">
                    {{ Form::select('weight', weightDataArray(), isset($weight) ? $weight : 'null' , array('class'=>'form-control') ) }}
                  </div>

              </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success"> Search </button>
            </div>

          {{Form::close()}}

          </div>
        </div>
    </div>