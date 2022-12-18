<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePegawaiKasetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_kasets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('no_pegawai')->nullable();
            $table->string('nama')->nullable();
            $table->time('jam_kerja')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pegawai_kasets');
    }
}
