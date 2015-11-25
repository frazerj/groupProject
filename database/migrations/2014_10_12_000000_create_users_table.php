<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('cwid')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('languages',['C++','Java','Python'])->nullable();
            $table->enum('classes',['261','262','306','406'])->nullable();
            $table->enum('teamStyle',['social','competitive','np'])->nullable();
            $table->integer('teamID')->nullable();
            $table->boolean('admin');
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
        Schema::drop('users');
    }
}
