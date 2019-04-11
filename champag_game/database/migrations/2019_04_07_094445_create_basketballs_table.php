<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketballsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basketballs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('team');
            $table->date('date');
            $table->integer('pair');
            $table->enum('category', array('M', 'W'));
            $table->string('between');
            $table->string('around');
            $table->enum('line',array('A','B'));
            $table->time('time');
            $table->enum('results',array('W','D','L'));
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
        Schema::dropIfExists('basketballs');
    }
}
