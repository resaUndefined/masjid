<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalRamadhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal__ramadhan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jadwal');
            $table->integer('ramadhan_id')->unsigned();
            $table->integer('kode');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('ramadhan_id')->references('id')
                    ->on('ramadhan')->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal__ramadhan');
    }
}
