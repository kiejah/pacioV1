<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyRegNumberColumnToCompanyMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_masters', function (Blueprint $table) {
            //
            $table->string('companyRegNumber')->nullable();
            $table->enum('status', array('active', 'inactive'))->default('active');
            $table->string('contactpersonName');
            $table->string('contactpersonPhone');
            $table->string('contactpersonEmail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_masters', function (Blueprint $table) {
            //
        });
    }
}
