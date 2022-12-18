<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi_peminjaman_kaset extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transaksi_peminjaman_kasets';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['no_transaksi', 'pembayaran', 'tgl_pinjam', 'tgl_pengembalian'];

    
}
