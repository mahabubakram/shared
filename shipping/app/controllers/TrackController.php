<?php

class TrackController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$tracking = DB::select('select * from tracking where id = ?', array(1)); //Track::all();
        //return Redirect::route('track');
        //$tracking = Track::find(1);
        return View::make('tracking.index');  //->with('tracking', $tracking);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function shipList()
    {
        //$tracking = DB::select('select * from tracking where id = ?', array(1));
        $tracking = Track::whereRaw('active = ?', array(1))->orderBy('id', 'desc')->take(2)->get();
        return View::make('tracking.list', array('tracking' => $tracking));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function search()
    {
        $tracking_code = Input::get('tracking_code');
        $rules = array(
            'tracking_code' => 'required|alphaNum|min:7'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('track')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(); // send back the input (not the password) so that we can repopulate the form
        }
        else {
            try {
                $tracking = Track::where('tracking_code', '=', $tracking_code)->firstOrFail();
                return Redirect::route('track.show', array($tracking->id));
            } catch (Exception $ex) {

               // Log::error($ex);
                return Redirect::to('track')
                    ->withErrors("Wrong tracking code. " . $ex->getMessage()) // send back all errors to the login form
                    ->withInput();
            }

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
        return View::make('tracking.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        //$data = Input::only(['from_name','from_address','from_location_id', 'from_mobile1', 'from_mobile2', 'to_name','to_address','to_location_id', 'to_mobile1', 'to_mobile2', 'product_types', 'product_details', 'weight', 'box_dimension', 'delivery_type', 'sender_comment', 'shipping_price', 'sender_name', 'sender_payment_type']);

        $data = Input::all();

        $data['tracking_code'] = 'DHKCTG123450';
        $data['tracking_status_id'] = 1;
        $data['receiving_agent_id'] = Auth::id();
        $data['receiving_date_time'] = date('Y-m-d H:i:s',time());

        if($data['paid'] == 1){
            $data['paid_amount']    = $data['shipping_price'];
            $data['unpaid_amount']  = 0;
            $data['payment_status'] = 1;
            $data['sender_paid_amount'] = $data['shipping_price'];
        }
        else{
            $data['paid_amount'] = 0;
            $data['unpaid_amount']    = $data['shipping_price'];
            $data['payment_status'] = 0;
            $data['sender_paid_amount'] = 0;
        }

        $validator = Validator::make(
            $data,
            [
                'from_name' => 'required|min:5|max:60',
                'to_name' => 'required|min:5|max:30',
                'from_address' => 'required|min:5|max:60',
                'to_address' => 'required|min:5|max:50',
                'from_location_id' => 'required',
                'to_location_id' => 'required',
                'product_types' => 'required',
                'product_details' => 'required|min:3|max:100',
                'weight' => 'required',
                'box_dimension' => 'max:20',
                'delivery_type'=> 'required',
                'sender_comment'=> 'max:100',
                'shipping_price'=> 'required',
                'sender_name'=> 'required|max:30',
                'sender_payment_type'=> 'required'
            ]
        );

        if($validator->fails()){
            return Redirect::route('track.create')->withErrors($validator)->withInput();
        }

        $newTrack = Track::create($data);
        if($newTrack){
            Session::put('success', 'new tracking has added successfully. Id - ');
            //return Redirect::route('agent.login');
        }
        return Redirect::route('track.create')->withInput();
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
        return View::make('tracking.show', array('tracking' => $tracking, 'to_address' => $to_address, 'from_address' => $from_address));
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
