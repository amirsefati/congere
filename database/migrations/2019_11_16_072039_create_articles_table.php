<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('title');
            $table->string('titleen');
            $table->string('axialofarticle');
            $table->string('author');
            $table->string('langarticle');
            $table->string('filedocs');
            $table->string('filepdf');
            $table->string('abstractfa');
            $table->string('abstracten');
            $table->string('keywordfa');
            $table->string('keyworden');
            $table->string('verify');
            $table->string('verify2');
            $table->string('comment');
            $table->string('code');
            $table->string('teacher');

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
        Schema::dropIfExists('articles');
    }
}
