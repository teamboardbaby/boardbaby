<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration {


	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
            $table->integer('mid');
            $table->integer('bid');
            $table->integer('uid');
            $table->string('video_link');
            $table->timestamps();
            $table->primary(['mid', 'uid']);
		});
	}

	public function down()
	{
		Schema::drop('videos');
	}

}
