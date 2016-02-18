<?php

class PricingTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('pricing')->truncate();

        DB::statement("INSERT INTO `pricing`
(`id`, `zone_id`, `pricing_rule`, `default_min_weight`, `default_min_price`, `first_slave_weight_unit`, `first_slave_max_weight`, `first_slave_price_inc_pu`, `second_slave_weight_unit`, `second_slave_max_weight`, `second_slave_price_inc_pu`, `third_slave_weight_unit`, `third_slave_max_weight`, `third_slave_price_inc_pu`) VALUES
(1, 11, '', 500, 50, 500, 5000, 20, 500, 10000, 15, 500, 100000, 10),
(2, 12, '', 500, 70, 500, 5000, 25, 500, 10000, 20, 500, 100000, 15),
(3, 13, '', 500, 100, 500, 5000, 30, 500, 10000, 25, 500, 100000, 20),
(4, 14, '', 500, 130, 500, 5000, 35, 500, 10000, 30, 500, 100000, 25),
(5, 15, '', 500, 130, 500, 5000, 35, 500, 10000, 30, 500, 100000, 25),
(6, 16, '', 500, 160, 500, 5000, 40, 500, 10000, 35, 500, 100000, 30)
");

    }

}
