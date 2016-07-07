<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeonamesAdminDivisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('geonames_admin_divisions', function(Blueprint $table)
		{
			$table->string('code', 6)->index();
			$table->text('name');
			$table->text('name_ascii');
			$table->integer('name_id')->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('geonames_admin_divisions');
	}

}
