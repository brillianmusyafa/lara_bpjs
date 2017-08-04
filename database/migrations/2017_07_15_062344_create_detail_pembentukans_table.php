<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailPembentukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembentukans', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('pembentukan_id');
            $table->integer('program_id');
            $table->string('jumlah_iuran');
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
        Schema::drop('detail_pembentukans');
    }
}
