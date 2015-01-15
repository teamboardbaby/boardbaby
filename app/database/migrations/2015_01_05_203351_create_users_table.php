<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {


	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
            $table->increments('uid');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('fname');
            $table->string('lname');
            $table->string('profile_pic');
            $table->string('accesscode');
            $table->enum('verfied',['yes', 'no'])->default('no');
            $table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('users');
	}

}
