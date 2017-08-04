<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('kantor_cabang_id');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('tempat');
            $table->string('tanggal_lahir');
            $table->string('nama_ibu_kandung');
            $table->string('no_telp');
            $table->text('alamat');
            $table->string('jenis_pekerjaan');
            $table->string('nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pendaftarans');
    }
}
