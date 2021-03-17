<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceipientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipients', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('company_id')->index();
            $table->unsignedInteger('parcelTrackerCode')->index();
            $table->string('receipientsName');
            $table->string('receipientsEmail')->nullable();
            $table->string('receipientsNationalID');
            $table->string('receipientsPhoneNumber');
            $table->string('receipientsAltPhoneNumber')->nullable();
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
        Schema::dropIfExists('receipients');
    }
}
