<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroundDeliveryPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ground_delivery_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auction_id');
            $table->integer('ground_location_id');
            $table->integer('ground_exit_port_id');
            $table->float('price', 10,2);
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
        Schema::dropIfExists('ground_delivery_prices');
    }
}
