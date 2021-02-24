<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_locations', function (Blueprint $table) {
            $table->id();
            $table->integer('delivery_location_type_id')->default(1);
            $table->integer('delivery_location_area_id');
            $table->string('delivery_location_name');
            $table->string('delivery_location_code');// incremental from 00
            $table->string('delivery_location_status')->default('active');
            $table->string('delivery_location_parent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_locations');
    }
}
