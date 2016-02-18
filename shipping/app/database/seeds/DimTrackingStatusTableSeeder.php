<?php

class DimTrackingStatusTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('dim_tracking_status')->truncate();

        DB::statement("INSERT INTO `dim_tracking_status` (`id`, `name`, `code`) VALUES
(1, 'Received at agent', 'received_at_agent'),
(2, 'Processed at agent', 'processed_at_agent'),
(3, 'Received at center', 'received_at_center'),
(4, 'Processed at center', 'processed_at_center'),
(5, 'Loaded on vehicle', 'loaded_on_vehicle'),
(6, 'Unloaded from Vehicle', 'unloaded_from_vehicle'),
(7, 'Delivered to customer', 'delivered_to_customer')
");

    }

}
