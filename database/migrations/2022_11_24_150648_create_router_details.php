<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouterDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('router_details', function (Blueprint $table) {

            $table->increments('id');
            $table->string('sapid',18);
            $table->string('hostname',14);
            $table->ipAddress('loopback');
            $table->macAddress('mac_address');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('router_details');
    }
}
