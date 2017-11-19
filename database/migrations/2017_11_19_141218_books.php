<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('Books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('Autors');
            $table->string('name');
            $table->unsignedInteger('pages_read');
            $table->unsignedInteger('total_pages');
            $table->unsignedInteger('speed');

            
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
        //
    }
}
