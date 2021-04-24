<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuRestoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->String('id_menu', 15)->primary();
            $table->String('nama_menu', 255)->nullable();
            $table->Integer('harga_menu')->nullable();
            $table->String('jenis_menu', 255)->nullable();
            $table->String('deskripsi', 255)->nullable();
            $table->String('image', 255)->nullable();
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
        Schema::dropIfExists('menu');
    }
}
