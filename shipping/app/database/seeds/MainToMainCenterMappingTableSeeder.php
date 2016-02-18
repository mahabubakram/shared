<?php

class MainToMainCenterMappingTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('main_to_main_center_mapping')->truncate();

        DB::statement("INSERT INTO `main_to_main_center_mapping`
(`id`, `origin_main_center_id`, `destination_main_center_id`, `min_delivery_days`, `max_delivery_days`, `active`)
VALUES
(1, 1, 2, 1, 2, 1),
(2, 1, 3, 1, 2, 1),
(3, 2, 1, 1, 2, 1),
(4, 2, 3, 1, 2, 1),
(5, 3, 1, 1, 2, 1),
(6, 3, 2, 1, 2, 1)
        ");
    }
}
