<?php

class PricingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$tracking = DB::select('select * from tracking where id = ?', array(1)); //Track::all();
        //$tracking = Track::find(1);
        //return View::make('tracking.index')->with('tracking', $tracking);
        return View::make('pricing.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function search()
    {
        // input parameters
        $origin_loc = Input::get('origin_loc');
        $destination_loc = Input::get('destination_loc');
        $product_type = Input::get('product_type');
        $weight = Input::get('weight');

        $rules = array(
            'origin_loc' => 'required',
            'destination_loc' => 'required',
            'weight' => 'required'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('pricing')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(); // send back the input (not the password) so that we can repopulate the form
        }

        //echo $origin_loc.' - '.$destination_loc .' - '.$product_type .' - '. $weight;
        //exit;

        // get zone information
        $zone_obj = Zone::findZone($origin_loc, $destination_loc);
        //print_r($zone_obj);

        // get pricing
        $shipment_price = Pricing::getPricing($zone_obj->id, $weight, $product_type);

        return View::make('pricing.search',
            array(
                'origin_loc' => $origin_loc, 'destination_loc'=>$destination_loc,
                'product_type' => $product_type, 'weight' => $weight,
                'shipment_price' => $shipment_price
            ));
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
