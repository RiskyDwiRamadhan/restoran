<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSementarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sementara', function (Blueprint $table) {
            $table->String('id_sorder', 15)->primary();
            $table->String('id_menu', 15)->nullable();
            $table->foreign('id_menu')->references('id_menu')->on('menu')->nullable();
            $table->Integer('qty')->nullable();
            $table->Integer('harga')->nullable();
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
        Schema::dropIfExists('order_sementara');
    }
}
