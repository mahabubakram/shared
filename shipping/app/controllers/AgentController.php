<?php

class AgentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        return View::make('agents.index');

        //$tracking = DB::select('select * from tracking where id = ?', array(1)); //Track::all();
        //return Redirect::route('track.show', array(1));
        //$tracking = Track::find(1);
        //return View::make('tracking.index')->with('tracking', $tracking);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function showLogin()
    {
        return View::make('agents.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function doLogin()
    {

        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:5' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('agent/login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email' 	=> Input::get('email'),
                'password' 	=> Input::get('password'),
                'status' => 1
            );

            // attempt to do the login
            if (Auth::attempt($userdata, true)) {
                // validation successful!
                // redirect them to the secure section or whatever
                 return Redirect::to('agent');
            } else {
                // validation not successful, send back to form
                return Redirect::to('agent/login')->withErrors('Incorrect email or password or account is not confirmed yet. Contact with administrator.');
            }

        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('agent/login'); // redirect the user to the login screen
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function search()
    {
        $tracking_code = Input::get('tracking_code');
        try{
            $tracking = Track::where('tracking_code', '=', $tracking_code)->firstOrFail();
            return Redirect::route('track.show', array($tracking->id));
        }
        catch(Exception $ex){
            Log::error($ex);
            return Redirect::route('track.show', array(1));
        }

        //$tracking = DB::select('select * from tracking where id = ?', array(1)); //Track::all();
        //$tracking = Track::find(1);
        //return View::make('tracking.index')->with('tracking', $tracking);
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('agents.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::only(['name','email','password', 'password_confirmation', 'address', 'location_id', 'mobile']);
        $data['user_type'] = 'agent';

        $validator = Validator::make(
            $data,
            [
                'name' => 'required|min:5',
                'email' => 'required|email|min:5||unique:users',
                'password' => 'required|min:5|confirmed',
                'password_confirmation'=> 'required|min:5',
                'address'=> 'required|min:5',
                'mobile'=> 'required|min:10'
            ]
        );

        if($validator->fails()){
            return Redirect::route('agent.create')->withErrors($validator)->withInput();
        }


        $newUser = User::create($data);
        if($newUser){
            //Auth::login($newUser);
            return Redirect::route('agent.login')->withSuccess('Account has created successfully. After verify your request, admin will approve account. Then you can login to your account.');
        }

        return Redirect::route('agent.create')->withErrors('Something went wrong!')->withInput();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $tracking = Track::find($id);
        //echo '<pre>';
        //print_r($tracking->history);
        $to_address = addressFormat($tracking->to_name, $tracking->to_address, $tracking->to_location_id, $tracking->to_mobile1, $tracking->to_mobile2);
        $from_address = addressFormat($tracking->from_name, $tracking->from_address, $tracking->from_location_id, $tracking->from_mobile1, $tracking->from_mobile2);
        return View::make('tracking.index', array('tracking' => $tracking, 'to_address' => $to_address, 'from_address' => $from_address));
        //return View::make('tracking.index')->with('tracking', $tracking);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
