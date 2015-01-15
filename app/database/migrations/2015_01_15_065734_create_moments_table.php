<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMomentsTable extends Migration {


	public function up()
	{
		Schema::create('moments', function(Blueprint $table)
		{
			$table->increments('mid');
            $table->integer('uid');
            $table->integer('bid');
            $table->text('story');
            $table->enum('security', ['private', 'followers'])->default('private');
            $table->integer('cutes');
            $table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('moments');
	}

}
