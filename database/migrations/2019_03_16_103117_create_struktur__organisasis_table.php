<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrukturOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur__organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jabatan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('jabatan_id')->references('id')
                    ->on('jabatan')->onDelete('cascade')
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
        Schema::dropIfExists('struktur__organisasi');
    }
}
