<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nama')->nullable();
            $table->string('ttl')->nullable();
            $table->string('gender')->nullable();
            $table->string('thumbnal')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('ig')->nullable();
            $table->string('twitter')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('profile');
    }
}
