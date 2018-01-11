<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipesIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes_ingredients', function (Blueprint $table) {
            $table->string('recipe_id');
            $table->integer('ingredient_id')->unsigned();
            $table->string('unit_id')->nullable();
            $table->string('preperation')->nullable();
            $table->decimal('quantity', 10, 4);
            $table->string('display_quantity');


            $table->primary(['recipe_id', 'ingredient_id']);
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
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
        Schema::dropIfExists('recipes_ingredients');
    }
}
