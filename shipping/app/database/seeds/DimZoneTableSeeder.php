<?php

class DimZoneTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('dim_zone')->truncate();

        DB::statement("INSERT INTO `dim_zone` (`id`, `name`, `details`, `code`) VALUES
        (11, 'Zone 1', 'Intra center inner city', 'zone1'),
        (12, 'Zone 2', 'Intra center outer city', 'zone2'),
        (13, 'Zone 3', 'Inter center inner city to inner city', 'zone3'),
        (14, 'Zone 4', 'Inter center inner city to outer city', 'zone4'),
        (15, 'Zone 5', 'Inter center outer city to inner city', 'zone5'),
        (16, 'Zone 6', 'Inter center outer city to outer city', 'zone6')
        ");
    }
}
