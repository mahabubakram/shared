<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 20.11.2014
 * Time: 23:18
 */
 ?>

    <div>
        <span>From:</span><br />
        {{ Form::select('origin_loc', locationDataArray(), isset($origin_loc) ? $origin_loc : 'null' , array('class'=>'form-control') ) }}
    </div>
    <div>
        <span>To:</span><br />
        {{ Form::select('destination_loc', locationDataArray(), isset($destination_loc) ? $destination_loc : 'null', array('class'=>'form-control') ) }}
    </div>

