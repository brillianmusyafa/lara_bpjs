<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pendaftarans';

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
    protected $fillable = ['kantor_cabang_id', 'nama_lengkap', 'nik', 'tempat', 'tanggal_lahir', 'nama_ibu_kandung', 'no_telp', 'alamat', 'jenis_pekerjaan', 'nominal','user_id','proses'];

    public function Kantor_cabang()
    {
        return $this->belongsTo('App\Kantor_cabang', 'kantor_cabang_id', 'id');
    }

    public function Jenis_pekerjaan()
    {
        return $this->belongsTo('App\Jenis_pekerjaan', 'jenis_pekerjaan', 'id');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
