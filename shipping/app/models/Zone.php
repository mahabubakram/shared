<?php

/*use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
*/

class Zone extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dim_zone';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');

    public function pricing()
    {
        return $this->hasOne('Pricing', 'zone_id', 'id');
    }

    /*Determine zone information
     * params - Origination id, destination id
     * return zone obj
     * */
    public static function findZone($origin_id, $destination_id){

        // initialized variables
        $is_origin_inner_city = 0; $is_dest_inner_city = 0;
        $delivery_intra_center = 0;  $delivery_inter_center = 0;
        $zone = '';

        // location objects based on input parameters
        $origin_loc_obj = DimLocation::find($origin_id);
        $dest_loc_obj = DimLocation::find($destination_id);

        // check is location in inner city?
        if ($origin_loc_obj->is_inner_city) $is_origin_inner_city = 1;
        if ($dest_loc_obj->is_inner_city) $is_dest_inner_city = 1;

        // check is location in inner city?
        if($origin_loc_obj->mapping->main_center_id == $dest_loc_obj->mapping->main_center_id)
            $delivery_intra_center = 1;
        else
            $delivery_inter_center = 1;

        //echo $origin_loc_obj->mapping->main_center_id.' - '.$dest_loc_obj->mapping->main_center_id.' - '.$delivery_inter_center.' - '.$delivery_intra_center.' - '. $is_origin_inner_city.' - '.$is_dest_inner_city;

        if($delivery_intra_center){
            if($is_origin_inner_city && $is_dest_inner_city)  $zone='zone1';
            else $zone='zone2';
        }
        else{
            if($is_origin_inner_city && $is_dest_inner_city) $zone='zone3';
            elseif($is_origin_inner_city && !$is_dest_inner_city) $zone='zone4';
            elseif(!$is_origin_inner_city && $is_dest_inner_city) $zone='zone5';
            elseif(!$is_origin_inner_city && !$is_dest_inner_city) $zone='zone6';
        }

        $zone_obj = Zone::where('code', '=', $zone)->firstOrFail();

        return $zone_obj;
    }

}
