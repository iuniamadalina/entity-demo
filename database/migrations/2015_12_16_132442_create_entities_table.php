<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Entities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('entity_type_id')->unsigned();
            $table->tinyInteger('is_admin_menu')->unsigned();
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
        Schema::drop('Entities');
    }
}
