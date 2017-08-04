<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_pekerjaan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jenis_pekerjaans';

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
    protected $fillable = ['nama_pekerjaan'];

    
}
