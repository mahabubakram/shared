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

          {{ Form::open(array('route' => 'deliveryschedule.search', 'method' => 'post', 'class'=>'', 'role'=>'search')) }}

            <div class="row pull-center">
              <div class="col-lg-6">
                @include('locationSelection')
              </div>
              <div class="col-lg-6" >
                  <div class="radio">
                    <label>
                      <input type="radio" name="search_date" id="search_date_current" value="current_date" checked>
                      Current Date
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="search_date" id="search_date_delivery" value="delivery_date">
                      Delivery Date
                      <input name="delivery_date" type='text' class="form-control" id='datetimepicker2'/>
                    </label>
                  </div>
                  <div class="radio">
                      <label>
                        <input type="radio" name="search_date" id="search_date_sending" value="sending_date">
                        Sending Date
                      <input name="sending_date" type='text' class="form-control" id='datetimepicker3'/>
                      </label>

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