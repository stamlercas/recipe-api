<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutrientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('unit_id');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //$table->primary('id');    Multiple primary key defined
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrients');
    }
}
