<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolleyballsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volleyballs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('around');
            $table->string('team');
            $table->string('pair');
            $table->enum('line',array('A','B'));
            $table->date('date');
            $table->time('time');
            $table->enum('category', array('M', 'W'));
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
        Schema::dropIfExists('volleyballs');
    }
}
