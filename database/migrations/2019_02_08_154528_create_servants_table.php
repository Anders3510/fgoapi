<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServantsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servants', function (Blueprint $table) {
			$table->increments('id');
			$table->text('name');
			$table->integer('maxHp');
			$table->integer('maxAtk');
			$table->integer('cost');
			$table->enum('growth_curve', ['Linear', 'S', 'Reverse S', 'Semi S', 'Semi Reverse S']);
			$table->string('voice_actor', 255);
			$table->string('illustrator', 255);
			$table->boolean('limited');
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
		Schema::dropIfExists('servants');
	}
}
