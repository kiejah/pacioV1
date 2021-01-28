<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('company_id')->index();
            $table->unsignedInteger('recipient_id')->index();
            $table->unsignedInteger('sender_id')->index();
            $table->string('parcelTrackerCode');
            $table->text('parcelNote');
            $table->string('parcelName');
            $table->float('parcelWeight');
            $table->float('fee');
            $table->date('bookedDate');
            $table->string('parcelFrom');
            $table->string('parcelTo');

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
        Schema::dropIfExists('parcel_details');
    }
}
