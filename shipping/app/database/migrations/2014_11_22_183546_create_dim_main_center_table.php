<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimMainCenterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('dim_main_center', function ($table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('address', 50)->nullable();
            $table->smallInteger('location_id')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('email', 20)->nullable();
            $table->string('code', 5)->nullable();
            $table->string('contact_person', 30)->nullable();
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
        Schema::dropIfExists('dim_main_center');
	}

}
