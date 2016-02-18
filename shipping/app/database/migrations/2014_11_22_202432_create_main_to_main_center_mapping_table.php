<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainToMainCenterMappingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('main_to_main_center_mapping', function ($table) {
            $table->increments('id');
            $table->smallInteger('origin_main_center_id');
            $table->smallInteger('destination_main_center_id');
            $table->tinyInteger('min_delivery_days')->default(1);
            $table->tinyInteger('max_delivery_days')->default(3);
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
        Schema::dropIfExists('main_to_main_center_mapping');
	}

}
