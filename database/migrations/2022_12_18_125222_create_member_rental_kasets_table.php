<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemberRentalKasetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_rental_kasets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('no_member')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('member_rental_kasets');
    }
}
