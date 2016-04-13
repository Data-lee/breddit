<?php

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
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }
<<<<<<< HEAD

=======
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 4a9aa119d6085d75b86b38cba17e6ea3f6f209c5
