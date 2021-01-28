<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_masters', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_logo')->default('company_logo.png');
            $table->text('company_address');
            $table->string('company_phone');
            $table->string('company_country');
            $table->string('company_email');
            $table->string('companyRegNumber')->nullable();
            $table->enum('status', array('active', 'inactive'))->default('active');
            $table->string('contactpersonName');
            $table->string('contactpersonPhone');
            $table->string('contactpersonEmail');
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
        Schema::dropIfExists('company_masters');
    }
}
