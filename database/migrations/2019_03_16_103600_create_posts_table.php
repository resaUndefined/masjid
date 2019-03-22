<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id')->unsigned();
            $table->string('judul')->unique();
            $table->text('isi');
            $table->string('slug')->unique();
            $table->integer('user_id')->unsigned();
            $table->string('image')->nullable();
            $table->boolean('verified')->default(0);
            $table->boolean('slider')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')
                    ->on('kategori')->onDelete('cascade')
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
        Schema::dropIfExists('posts');
    }
}
