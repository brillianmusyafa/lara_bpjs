<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'programs';

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
    protected $fillable = ['nama_program', 'dasar_upah', 'jumlah_iuran', 'keterangan'];

    
}
