<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeptopuestoSetupTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        // Creates the roles table
        Schema::create('deptos', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Creates the roles table
        Schema::create('puestos', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Creates the permission_role (Many-to-Many relation) table
        Schema::create('assigned_puestos_deptos', function ($table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('depto_id')->unsigned();
            $table->integer('puesto_id')->unsigned();


            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('depto_id')->references('id')->on('deptos'); // assumes a users table
            $table->foreign('puesto_id')->references('id')->on('puestos');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//



        Schema::table('assigned_puestos_deptos', function (Blueprint $table) {
            $table->dropForeign('assigned_puestos_deptos_user_id_foreign');
            $table->dropForeign('assigned_puestos_deptos_depto_id_foreign');
            $table->dropForeign('assigned_puestos_deptos_puesto_id_foreign');
        });

        Schema::drop('assigned_puestos_deptos');
        Schema::drop('deptos');
        Schema::drop('puestos');
	}

}
