<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKasetFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaset_films', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('kode_film')->nullable();
            $table->string('judul_film')->nullable();
            $table->string('genre_film')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kaset_films');
    }
}
