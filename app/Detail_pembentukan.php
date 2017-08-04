<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_pembentukan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detail_pembentukans';

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
    protected $fillable = ['pembentukan_id', 'program_id', 'jumlah_iuran'];

    
}
