<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipesAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes_attributes', function (Blueprint $table) {
            $table->string('recipe_id');
            $table->integer('attribute_id')->unsigned();

            $table->primary(['recipe_id', 'attribute_id']);
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('attribute_id')->references('id')->on('attributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_attributes');
    }
}
