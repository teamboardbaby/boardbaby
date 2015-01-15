<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBabyTable extends Migration {


	public function up()
	{
		Schema::create('baby', function(Blueprint $table)
		{
			$table->increments('bid');
            $table->string('fname');
            $table->string('lname');
            $table->string('profile_pic');
            $table->date('dob');
            $table->string('birthplace');
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('baby');
	}

}
