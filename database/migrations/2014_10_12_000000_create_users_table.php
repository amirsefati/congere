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
            $table->string('familyname');
            $table->string('englishname');//add
            $table->string('englishfamilyname');//add
            $table->string('identitycode');
            $table->string('gender');
            $table->string('grade');
            $table->string('birthdate');
            $table->string('university');
            $table->string('phone');
            $table->string('address');
            $table->string('userlevel')->default('0');
            $table->string('tagarticlepoly')->default('0');
            $table->string('sendarticlepoly')->default('0');
            $table->integer('kind')->default('0');//add
            $table->string('email')->unique();
            $table->string('password');
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
