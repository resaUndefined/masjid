<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('verified')->nullable();
            $table->string('verification_token')->nullable();
            $table->string('avatar')->nullable();
            $table->dropColumn('name');
            $table->dropColumn('provider_id');
            $table->dropColumn('provider');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('verified');
            $table->dropColumn('verification_token');
            $table->dropColumn('avatar');
            $table->string('name');
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
        });
    }
}
