<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kaset_film extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kaset_films';

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
    protected $fillable = ['kode_film', 'judul_film', 'genre_film'];

    
}
