<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('tracking_history', function($table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('tracking_id');
            $table->dateTime('event_date_time');
            $table->smallInteger('agent_id')->nullable();
            $table->smallInteger('location_id')->nullable();
            $table->smallInteger('tracking_status_id');
            $table->string('comment', 255)->nullable();
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
        Schema::dropIfExists('tracking_history');
	}

}
