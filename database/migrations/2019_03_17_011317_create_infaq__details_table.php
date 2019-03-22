<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfaqDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infaq__detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('infaq_id')->unsigned();
            $table->date('tanggal');
            $table->boolean('tipe');
            $table->decimal('nominal',14,2);
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('infaq_id')->references('id')
                    ->on('infaq')->onDelete('cascade')
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
        Schema::dropIfExists('infaq__detail');
    }
}
