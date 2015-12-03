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
            $table->increments('id');
            $table->integer('cwid')->unique();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('languages')->nullable();
            $table->boolean('c261')->nullable();
            $table->boolean('c262')->nullable();
            $table->boolean('c306')->nullable();
            $table->boolean('c406')->nullable();
            $table->string('teamStyle')->nullable();
            $table->integer('teamID')->nullable();
            $table->boolean('admin')->nullable();
            $table->rememberToken();
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