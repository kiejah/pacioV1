<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('company_id')->index();
            $table->unsignedInteger('parcelTrackerCode')->index();
            $table->string('senderName');
            $table->string('senderEmail')->nullable();
            $table->string('senderNationalID');
            $table->string('senderPhoneNumber');
            $table->string('senderAltPhoneNumber')->nullable();
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
        Schema::dropIfExists('senders');
    }
}
