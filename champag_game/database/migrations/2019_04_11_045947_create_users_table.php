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
            $table->bigIncrements('id');
<<<<<<< HEAD:champag_game/database/migrations/2019_04_11_045947_create_users_table.php
=======
            $table->char('user_id',11);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('branch');
            $table->char('year',1);
            $table->integer('phonenumber');
            $table->rememberToken();
>>>>>>> c16d800325409b24c210fd551a0ce5f04f11a82f:champag_game/database/migrations/2014_10_12_000000_create_users_table.php
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
