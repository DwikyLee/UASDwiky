<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransaksiPeminjamanKasetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_peminjaman_kasets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('no_transaksi')->nullable();
            $table->float('pembayaran')->nullable();
            $table->dateTime('tgl_pinjam')->nullable();
            $table->dateTime('tgl_pengembalian')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksi_peminjaman_kasets');
    }
}
