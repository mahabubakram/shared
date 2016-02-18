<?php

/*use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
*/

class Track extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tracking';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');

    protected $fillable = ['tracking_code', 'tracking_status_id', 'receiving_agent_id','receiving_date_time',
        'receiving_person', 'receiving_location_id','product_types','product_details','weight','box_dimension',
        'shipping_price','pay_partial','paid_amount','unpaid_amount','payment_status','sender_name',
        'sender_paid_amount','receiver_paid_amount','sender_payment_type','receiver_payment_type','to_name',
        'to_address', 'to_location_id', 'to_mobile1', 'to_mobile2', 'from_name', 'from_address', 'from_location_id',
        'from_mobile1', 'from_mobile2', 'sender_comment', 'receiver_comment', 'delivery_type', 'received_person',
        'relation_with_to', 'received_person_signature', 'delivery_note', 'delivery_date_time'
        ];

    public function history()
    {
        return $this->hasMany('TrackingHistory', 'tracking_id', 'id');
    }


}
