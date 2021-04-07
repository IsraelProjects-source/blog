<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');

            //relacion con tabla user
            $table->bigInteger('user_id')->unsigned();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('image')->nullable();

            $table->text('body');
            //este sera el campo que guardara el post como video potcast etc..
            //es nullable porque puede o no llevarlo
            $table->text('iframe')->nullable();
            $table->timestamps();

            //configuracion de la relacion como foreig key
            $table->foreign('user_id')->references('id')->on('users');
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
