<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mybooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mybooks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Users');
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('Books');
            $table->Integer('speed');
            $table->Integer('pages_read');
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
        Schema::create('Mybooks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Users');
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('Books');
            $table->Integer('speed');
            $table->Integer('pages_read');
            $table->timestamps();
        });
    }
}
