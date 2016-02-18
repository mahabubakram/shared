<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

Route::get('/', 'TrackController@index');


/*Route::get('users', function()
{
    return 'Users information!';
});*/

/*Route::group(array('prefix' => 'agent'), function()
{
});*/

Route::resource('test', 'TestController');

/* Tracking page */
Route::get('track/list', array('as' => 'track.list', 'uses' => 'TrackController@shipList'));
Route::resource('track', 'TrackController');
Route::post('track/search', array('as' => 'track.search', 'uses' => 'TrackController@search'));

/* Delivery schedule page */
Route::resource('deliveryschedule', 'DeliveryScheduleController');
Route::post('deliveryschedule/search', array('as' => 'deliveryschedule.search', 'uses' => 'DeliveryScheduleController@search'));

/* Shipment pricing page */
Route::resource('pricing', 'PricingController');
Route::post('pricing/search', array('as' => 'pricing.search', 'uses' => 'PricingController@search'));

/* agent page */
Route::get('agent/login', array('as' => 'agent.login', 'uses' => 'AgentController@showLogin'));
Route::get('agent/logout', array('as' => 'agent.logout', 'uses' => 'AgentController@doLogout'));
Route::resource('agent', 'AgentController');
Route::post('agent/login', array('as' => 'agent.login', 'uses' => 'AgentController@doLogin'));
//Route::post('agent/loginPost', array('as' => 'agent.loginPost', 'uses' => 'AgentController@loginPost'));


Route::get('/migrate/{key?}',  array('as' => 'migrate', function($key = null){

    if($key == "serfmart"){
        try {
            echo '<br>init migrate:install...';
            //Artisan::call('migrate:refresh');
            //Artisan::call('migrate:install');
            //Artisan::call('migrate:refresh', array('--force' => true));
            Artisan::call('migrate', array('--force' => true));
            echo 'done migrate:install';

            /*echo '<br>init with Sentry tables migrations...';
            Artisan::call('migrate', [
                '--package'=>'cartalyst/sentry'
            ]);
            echo 'done with Sentry';
            echo '<br>init with app tables migrations...';
            Artisan::call('migrate', [
                '--path'     => "app/database/migrations"
            ]);
            echo '<br>done with app tables migrations';*/
            echo '<br> seeder....';
            //Artisan::call('db:seed', array('--force' => true));
            echo '<br>done tables seader';
        } catch (Exception $e) {
            Response::make($e->getMessage(), 500);
        }
    }else{
        App::abort(404);
    }
}
));

// basic auth
Route::get('/authtest', array('before' => 'auth.basic', function()
{
    return View::make('hello');
}));

// Route group for API versioning
Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('schedule', 'ScheduleApiController');
});

/*Route::get('track', function()
{
    $tracking = Track::all();
    return View::make('track')->with('tracking', $tracking);
    //return View::make('track');
});
*/
//Route::get('users', 'UserController@getIndex');
