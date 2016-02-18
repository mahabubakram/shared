<?php

class ScheduleApiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
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
            return Response::json(
                array(
                    'error' => true,
                    'details' => $validator
                ),
                200
            );
        }

        //echo $origin_loc.' - '.$destination_loc .' - '.$product_type .' - '. $weight;
        //exit;

        // get zone information
        $zone_obj = Zone::findZone($origin_loc, $destination_loc);

        // get pricing
        $shipment_price = Pricing::getPricing($zone_obj->id, $weight, $product_type);

        $delivery = Delivery::getDeliveryDate($origin_loc, $destination_loc);

        /*return View::make('pricing.search',
            array(
                'origin_loc' => $origin_loc, 'destination_loc'=>$destination_loc,
                'product_type' => $product_type, 'weight' => $weight,
                'shipment_price' => $shipment_price
            ));*/

        return Response::json(
            array(
                'error' => false,
                'data'=>array(
                    'price' => $shipment_price,
                    'weight' => $weight,
                    'earliest_delivery_date'    => $delivery->early_date,
                    'later_delivery_date'       => $delivery->later_date,
                    'min_delivery_days'         => $delivery->min_days,
                    'max_delivery_days'         => $delivery->max_days,
                    'origin_loc'                => 'Mirpur, Dhaka',
                    'destination_loc'           => 'Patiya, Chittagong'
                )
            ),
            200
        );
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
		//
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
