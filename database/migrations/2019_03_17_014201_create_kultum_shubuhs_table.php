<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKultumShubuhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kultum_shubuh', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jadwal_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->date('jadwal');
            $table->timestamps();

            $table->foreign('jadwal_id')->references('id')
                    ->on('jadwal__ramadhan')->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('user_id')->references('id')
                    ->on('users')->onDelete('cascade')
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
        Schema::dropIfExists('kultum_shubuh');
    }
}
