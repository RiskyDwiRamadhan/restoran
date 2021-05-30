<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->String('id_transaksi', 15)->primary();
            $table->String('id_order', 15)->nullable();
            $table->foreign('id_order')->references('id_order')->on('order')->nullable();
            $table->Date('tanggal_transaksi')->nullable();
            $table->Integer('harga')->nullable();
            $table->Integer('uang_bayar')->nullable();
            $table->Integer('kembalian')->nullable();
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
        Schema::dropIfExists('transaksi');
    }
}
