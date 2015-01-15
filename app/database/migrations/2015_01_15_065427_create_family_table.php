<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyTable extends Migration {

	public function up()
	{
		Schema::create('family', function(Blueprint $table)
		{
			$table->integer('bid');
            $table->integer('uid');
            $table->string('relationship');
            $table->timestamps();
            $table->primary(['bid', 'uid']);
		});
	}


	public function down()
	{
		Schema::drop('family');
	}

}
