<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMejaRestoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meja', function (Blueprint $table) {
            $table->String('id_meja', 10)->primary();
            $table->String('no_meja', 10)->nullable();
            $table->String('kapasitas', 10)->nullable();
            $table->String('status_meja', 50)->nullable();
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
        Schema::dropIfExists('meja');
    }
}
