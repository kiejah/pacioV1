<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('company_id')->index();
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
        Schema::dropIfExists('parcels');
    }
}
