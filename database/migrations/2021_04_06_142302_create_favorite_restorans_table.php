<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoriteRestoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite', function (Blueprint $table) {
            $table->String('id_favorite', 15)->primary();
            $table->String('id_menu', 15)->nullable();
            $table->foreign('id_menu')->references('id_menu')->on('menu')->nullable();
            $table->Date('tangal_favorite')->nullable();
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
        Schema::dropIfExists('favorite');
    }
}
