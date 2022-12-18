<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pegawai_kaset extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pegawai_kasets';

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
    protected $fillable = ['no_pegawai', 'nama', 'jam_kerja'];

    
}
