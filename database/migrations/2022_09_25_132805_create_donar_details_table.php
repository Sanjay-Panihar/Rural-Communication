<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donar_details', function (Blueprint $table) {
            $table->id();
            $table->string('doner_name');
            $table->string('doner_email');
            $table->string('donation_amount');
            $table->string('mobile_number');
            $table->string('doner_country');
            $table->string('doner_nationality');
            $table->string('doner_state');
            $table->string('doner_city');
            $table->integer('doner_pincode');
            $table->string('doner_address');
            $table->string('pan_aadhar');
            $table->string('payment_status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donar_details');
    }
};
