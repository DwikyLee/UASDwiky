<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class member_rental_kaset extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'member_rental_kasets';

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
    protected $fillable = ['no_member', 'nama', 'alamat'];

    
}
