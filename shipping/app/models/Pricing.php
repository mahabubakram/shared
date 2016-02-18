<?php

/*use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
*/

class Pricing extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pricing';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');

    public function zone()
    {
        return $this->belongsTo('Zone', 'zone_id', 'id');
    }

    public static function getPricing($zone_id = 1, $weight = 500, $product_type = '')
    {
        $total_price = 0;
        $default_min_price = 0;  $frist_slave_price = 0;  $second_slave_price = 0;  $third_slave_price = 0;
        $default_min_weight = 0; $frist_slave_weight = 0; $second_slave_weight = 0; $third_slave_weight = 0;

        //echo $zone_id.' - '.$weight;

        // load pricing model
        $pricing = Zone::find($zone_id)->pricing;

        // measure slave weight
        $default_min_weight = $pricing->default_min_weight;

        if($weight > $pricing->default_min_weight)
            $frist_slave_weight = $weight - $pricing->default_min_weight;

        if($weight >= $pricing->first_slave_max_weight){
            $frist_slave_weight = $pricing->first_slave_max_weight - $pricing->default_min_weight;
            $second_slave_weight = $weight - $pricing->first_slave_max_weight;
        }

        if($weight >= $pricing->second_slave_max_weight){
            $second_slave_weight = $pricing->second_slave_max_weight - $pricing->first_slave_max_weight;
            $third_slave_weight = $weight - $pricing->second_slave_max_weight;
        }

        //echo '<br />'.$default_min_weight.' - '.$frist_slave_weight.' - '.$second_slave_weight.' - '.$third_slave_weight;

        // measure slave wise price
        $default_min_price  = $pricing->default_min_price;
        $frist_slave_price  = round($frist_slave_weight/$pricing->first_slave_weight_unit, 1) * $pricing->first_slave_price_inc_pu;
        $second_slave_price = round($second_slave_weight/$pricing->second_slave_weight_unit, 1) * $pricing->second_slave_price_inc_pu;
        $third_slave_price  = round($third_slave_weight/$pricing->third_slave_weight_unit, 1) * $pricing->third_slave_price_inc_pu;

        //echo '<br />'.$default_min_price.' - '.$frist_slave_price.' - '.$second_slave_price.' - '.$third_slave_price;

        // total shipping cost
        $total_price = $default_min_price + $frist_slave_price + $second_slave_price + $third_slave_price;

        return $total_price;
    }

}
