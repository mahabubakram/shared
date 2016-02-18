<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('pricing', function($table) {
            $table->increments('id');
            $table->smallInteger('zone_id');
            $table->string('pricing_rule', 255)->nullable();
            $table->decimal('default_min_weight', 7, 2)->default(500.00);
            $table->decimal('default_min_price', 7, 2)->default(50.00);
            $table->decimal('first_slave_weight_unit', 7, 2)->default(500.00);
            $table->decimal('first_slave_max_weight', 7, 2)->default(0.00);
            $table->decimal('first_slave_price_inc_pu', 7, 2)->default(10.00);
            $table->decimal('second_slave_weight_unit', 7, 2)->default(500.00);
            $table->decimal('second_slave_max_weight', 7, 2)->default(0.00);
            $table->decimal('second_slave_price_inc_pu', 7, 2)->default(10.00);
            $table->decimal('third_slave_weight_unit', 7, 2)->default(500.00);
            $table->decimal('third_slave_max_weight', 7, 2)->default(0.00);
            $table->decimal('third_slave_price_inc_pu', 7, 2)->default(10.00);
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('pricing');
	}

}
