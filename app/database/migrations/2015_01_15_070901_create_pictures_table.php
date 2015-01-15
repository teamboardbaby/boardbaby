<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration {


	public function up()
	{
		Schema::create('pictures', function(Blueprint $table)
		{
            $table->integer('mid');
            $table->integer('bid');
            $table->integer('uid');
            $table->string('pic_location');
            $table->timestamps();
            $table->primary(['mid', 'uid']);
		});
	}


	public function down()
	{
		Schema::drop('pictures');
	}

}
