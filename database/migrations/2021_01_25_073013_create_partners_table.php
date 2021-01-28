<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('companyRegNumber')->nullable();
            $table->string('companyEmail');
            $table->string('partnerName');
            $table->text('partnerJoinNote');
            $table->string('partnerPhone');
            $table->string('partnerNationalID');
            $table->enum('status', array('active', 'inactive'))->default('active');
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
        Schema::dropIfExists('partners');
    }
}
