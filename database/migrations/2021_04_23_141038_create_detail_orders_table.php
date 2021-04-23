<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_order', function (Blueprint $table) {
            $table->String('id_dorder', 10)->primary();
            $table->String('id_order', 10)->nullable();
            $table->foreign('id_order')->references('id_order')->on('order')->nullable();
            $table->String('id_menu', 10)->nullable();
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
        Schema::dropIfExists('detail_order');
    }
}
