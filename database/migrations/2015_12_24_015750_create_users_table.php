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
            $table->string('username')->unique();
            $table->string('password')->default('$2a$08$NNtXYaDAqjAy7wpDmb7dE.iTGAbHIPsTh5jhdu/xyURxWRfEYRQ/y');
            $table->rememberToken();
            $table->timestamp('birthday')->nullable();
            $table->string('profile_picture')->nullable();
            $table->integer('exp')->default(0);
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