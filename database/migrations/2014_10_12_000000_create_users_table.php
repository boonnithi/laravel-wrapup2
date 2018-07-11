<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('surname');
            $table->string('nickname')->nullable(); //some columns can be null because you can ignore it when register (when you register you can empty values in some columns).
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dob');
            $table->string('gender');
            $table->string('biography')->nullable();
            $table->string('education')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('users');
    }
}
