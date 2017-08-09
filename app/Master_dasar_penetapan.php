<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_dasar_penetapan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'master_dasar_penetapans';

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
    protected $fillable = ['iuran_low', 'iuran_high', 'dasar_penghasilan', 'jkk', 'jkm', 'jht'];

    
}
