<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
        $this->call('DimAgentTableSeeder');
        $this->call('DimLocationTableSeeder');
        $this->call('DimMainCenterTableSeeder');
        $this->call('DimTrackingStatusTableSeeder');
        $this->call('DimZoneTableSeeder');
        $this->call('LocToMainCenterMappingTableSeeder');
        $this->call('PricingTableSeeder');
        $this->call('MainToMainCenterMappingTableSeeder');
        $this->call('TrackingTableSeeder');
        $this->call('UserTableSeeder');
	}

}
