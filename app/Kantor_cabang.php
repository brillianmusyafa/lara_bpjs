<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantor_cabang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kantor_cabangs';

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
    protected $fillable = ['cabang', 'alamat'];

    
}
