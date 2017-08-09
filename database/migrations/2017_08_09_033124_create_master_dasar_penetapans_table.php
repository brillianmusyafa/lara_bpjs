<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMasterDasarPenetapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_dasar_penetapans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('iuran_low');
            $table->string('iuran_high');
            $table->string('dasar_penghasilan');
            $table->string('jkk');
            $table->string('jkm');
            $table->string('jht');
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
        Schema::drop('master_dasar_penetapans');
    }
}
