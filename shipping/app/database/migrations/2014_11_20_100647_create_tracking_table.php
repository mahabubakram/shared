<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

        Schema::dropIfExists('tracking');

        Schema::create('tracking', function($table)
        {
            $table->increments('id');
            $table->string('tracking_code', 20)->unique();
            $table->tinyInteger('tracking_status_id');
            $table->smallInteger('receiving_agent_id');
            $table->dateTime('receiving_date_time');
            $table->string('receiving_person', 30)->nullable();
            $table->smallInteger('receiving_location_id');
            $table->string('product_types', 50)->nullable();
            $table->string('product_details', 100)->nullable();
            $table->decimal('weight', 7, 2);
            $table->string('box_dimension', 50)->nullable();
            $table->decimal('shipping_price', 7, 2);
            $table->boolean('pay_partial')->default(false);
            $table->decimal('paid_amount', 7, 2);
            $table->decimal('unpaid_amount', 7, 2);
            $table->tinyInteger('payment_status')->default(0);
            $table->string('sender_name')->nullable();
            $table->decimal('sender_paid_amount', 7, 2);
            $table->decimal('receiver_paid_amount', 7, 2);
            $table->string('sender_payment_type', 20)->nullable();
            $table->string('receiver_payment_type', 20);
            $table->string('to_name', 50);
            $table->string('to_address', 100);
            $table->smallInteger('to_location_id');
            $table->string('to_mobile1', 20)->nullable();
            $table->string('to_mobile2', 20)->nullable();
            $table->string('from_name', 50);
            $table->string('from_address', 100);
            $table->smallInteger('from_location_id');
            $table->string('from_mobile1', 20)->nullable();
            $table->string('from_mobile2', 20)->nullable();
            $table->string('sender_comment', 255)->nullable();
            $table->string('receiver_comment', 255)->nullable();
            $table->enum('delivery_type', array('Office delivery', 'Home delivery'));
            $table->string('received_person', 50)->nullable();
            $table->string('relation_with_to', 30)->nullable();
            $table->string('received_person_signature', 255)->nullable();
            $table->string('delivery_note', 255)->nullable();
            $table->dateTime('delivery_date_time', 255);
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
        Schema::dropIfExists('tracking');
	}

}
