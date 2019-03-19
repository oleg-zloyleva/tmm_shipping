<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOceanDeliveryPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocean_delivery_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ocean_exit_port_id');
            $table->integer('ocean_destination_port_id');
            $table->float('price', 12, 2);
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
        Schema::dropIfExists('ocean_delivery_prices');
    }
}
