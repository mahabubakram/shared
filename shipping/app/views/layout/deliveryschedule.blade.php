<?php
/**
 * Created by PhpStorm.
 * User: malmamun
 * Date: 20.11.2014
 * Time: 11:59
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery scheduling : SERF shipping solution in Bangladesh</title>

    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/bootstrap-datetimepicker.min.css') }}

     {{ HTML::script('js/jquery.js') }}

  </head>

  <body>

    @include('header')

    <div class="container-fluid">
       <div class="row">

         <div class="col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3 main">
           @if(Session::get('errors'))
             <div class="alert alert-danger alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               @foreach($errors->all('<li>:message</li>') as $message)
                 {{$message}}
               @endforeach
             </div>
           @endif
           @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ $message }}
           </div>
           @endif

           @yield('content')

         </div>

         <div class="col-sm-4 col-md-3 sidebar">
           @section('sidebar')
                @include('sidebar')
           @show
         </div>
       </div>
    </div>

    {{ HTML::script('js/ie-emulation-modes-warning.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    {{ HTML::script('js/ie10-viewport-bug-workaround.js') }}
    {{ HTML::script('js/bootstrap-datetimepicker.js') }}

  </body>
</html>