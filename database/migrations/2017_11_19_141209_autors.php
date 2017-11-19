<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Autors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('Autors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('born_date');
            $table->string('city');
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
          Schema::create('Autors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('born_date');
            $table->string('city');
            $table->timestamps();
        });
    }
}
