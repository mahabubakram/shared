<?php

class DeliveryScheduleController extends \BaseController {

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
        return View::make('deliveryschedule.index');
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

        $rules = array(
            'origin_loc' => 'required',
            'destination_loc' => 'required'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('deliveryschedule')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(); // send back the input (not the password) so that we can repopulate the form
        }

        //echo $origin_loc.' - '.$destination_loc;

        // location objects based on input parameters
        $origin_loc_obj = LocToMainCenterMapping::where('location_id', '=', $origin_loc)->firstOrFail();
        $dest_loc_obj = LocToMainCenterMapping::where('location_id', '=', $destination_loc)->firstOrFail();

        if($origin_loc_obj->main_center_id <> $dest_loc_obj->main_center_id) {
            $main_to_main_obj = MainToMainCenterMapping::whereRaw('origin_main_center_id = ? and destination_main_center_id = ?', array($origin_loc_obj->main_center_id, $dest_loc_obj->main_center_id))->firstOrFail();
        }

        // initialized variables
        $loc_to_center_min = 0; $loc_to_center_max = 0;
        $center_to_center_min = 0; $center_to_center_max = 0;
        $center_to_loc_min = 0; $center_to_loc_max = 0;
        $total_days_min = 0; $total_days_max = 0;

        //min and max delivery days calculation
        $loc_to_center_min = $origin_loc_obj->min_delivery_days;
        $loc_to_center_max = $origin_loc_obj->max_delivery_days;
        if($origin_loc_obj->main_center_id <> $dest_loc_obj->main_center_id) {
            $center_to_center_min = $main_to_main_obj->min_delivery_days;
            $center_to_center_max = $main_to_main_obj->max_delivery_days;
        }
        $center_to_loc_min = $dest_loc_obj->min_delivery_days;
        $center_to_loc_max = $dest_loc_obj->max_delivery_days;

        $total_days_min = $loc_to_center_min + $center_to_center_min + $center_to_loc_min;
        $total_days_max = $loc_to_center_max + $center_to_center_max + $center_to_loc_max;
        //echo $total_days_min.' - '.$total_days_max;

        //special case, in case of same location_id
        // TODO: put this configuration in database config table
        if($origin_loc == $destination_loc){
            $total_days_min = 1;
            $total_days_max = 2;
        }

        $search_date = date('d M, Y');

        $early_date = date_format(date_add(date_create(date('Y-m-d')), date_interval_create_from_date_string($total_days_min." days")), "d M, Y");
        $later_date = date_format(date_add(date_create(date('Y-m-d')), date_interval_create_from_date_string($total_days_max." days")), "d M, Y");

        return View::make('deliveryschedule.search',
            array(
                'origin_loc' => $origin_loc, 'destination_loc'=>$destination_loc,
                'min_days' => $total_days_min, 'max_days' => $total_days_max,
                'early_date' => $early_date, 'later_date' => $later_date,
                'search_date' => $search_date
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
