<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('company_id')->index();
			$table->string('parcelTrackerCode')->nullable();
			$table->string('MerchantRequestID')->nullable();
			$table->string('phoneNumber')->nullable();
			$table->string('CheckoutRequestID')->nullable();
			$table->string('ResultCode')->nullable();
			$table->string('ResponseDescription')->nullable();
			$table->string('ResultDesc')->nullable();
			$table->string('Amount')->nullable();
            $table->string('MpesaReceiptNumber')->nullable();
            $table->enum('paymentMethod', array('MPESA', 'CASH'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments_details');
    }
}
