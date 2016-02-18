<?php

class TrackingTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('tracking')->truncate();

        DB::statement("INSERT INTO `tracking`
    (`tracking_code`, `tracking_status_id`, `receiving_agent_id`, `receiving_date_time`, `receiving_person`, `receiving_location_id`, `product_types`, `product_details`, `weight`, `box_dimension`, `shipping_price`, `pay_partial`, `paid_amount`, `unpaid_amount`, `payment_status`, `sender_name`, `sender_paid_amount`, `receiver_paid_amount`, `sender_payment_type`, `receiver_payment_type`, `to_name`, `to_address`, `to_location_id`, `to_mobile1`, `to_mobile2`, `from_name`, `from_address`, `from_location_id`, `from_mobile1`, `from_mobile2`, `sender_comment`, `receiver_comment`, `delivery_type`, `received_person`, `relation_with_to`, `received_person_signature`, `delivery_note`, `delivery_date_time`)
      VALUES
    ('DHKCTG89783423',3, 2, '2014-11-23 09:30:00',
     'Moinul Islam', 5, 'Electronics', '1p laptop, 1pc tab', '1000.00', '125cm x 100cm',
     '80.00', 1, '80.00', '0.00', '3', 'Shihab Bari',
     '50.00', '30.00', 'Cash', 'Cash', 'Mr. Abul Kalam',
     '123 test address', 5, '01817234234', '', 'Mr. Salman khan', '1245 from address', 12,
     '0123898982','','','','Home delivery', 'Shahajalal Bari',
     'Neighbour', '', '', '2014-11-24 13:30:00')
     ");




        DB::table('tracking_history')->truncate();

        DB::statement("insert into `tracking_history`(`tracking_id`,`event_date_time`,`agent_id`,`location_id`,`tracking_status_id`,`comment`)
        values
        ('1','2014-11-23 09:30:00','1','5','3','testing'),
        ('1','2014-11-23 14:22:00','1','5','5','testing'),
        ('1','2014-11-23 18:00:00','1','5','2','testing'),
        ('1','2014-11-24 08:22:00','1','5','4','testing'),
        ('1','2014-11-23 11:02:00','1','5','7','testing'),
        ('1','2014-11-23 13:30:00','1','5','6','testing')
      ");
    }




}
