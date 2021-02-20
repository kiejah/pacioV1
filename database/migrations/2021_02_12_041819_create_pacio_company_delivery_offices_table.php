<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacioCompanyDeliveryOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacio_company_delivery_offices', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_office_name');
            $table->integer('company_id');
            $table->integer('delivery_location_id');
            $table->string('office_contact_1');
            $table->string('office_contact_2');
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
        Schema::dropIfExists('pacio_company_delivery_offices');
    }
}
