<?php

class DimAgentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('dim_agent')->truncate();

        DB::statement("INSERT INTO dim_agent (name, address, location_id)
VALUES
        ('Dhaka main', '1290, Monipuri para', 12),
        ('Dhaka east', '1790, Badda', 5)
        ");

    }

}
