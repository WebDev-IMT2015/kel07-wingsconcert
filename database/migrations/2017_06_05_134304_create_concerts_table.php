<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConcertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerts', function(Blueprint $table) {
           $table->increments('id_concert');
            $table->string('kelas');
            $table->timestamps('jadwal');
            $table->integer('kapasitas');
            $table->integer('harga');
            $table->dateTime('jadwal_mulai');
            $table->dateTime('jadwal_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('concerts');
    }
}
