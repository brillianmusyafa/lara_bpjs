<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembentukan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pembentukans';

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
    protected $fillable = [
    'pendaftaran_id',
    'iuran_id',
    'bulan',
    'tahun',
    'jumlah_bulan_pembentukan',
    'nominal_upah',
    'jkk',
    'jkm',
    'jht',
    'total'
    ];

    public function Detail_pembentukan()
    {
        return $this->hasMany('App\Detail_pembentukan', 'pembentukan_id', 'id');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    
}
