<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipesNutrients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes_nutrients', function (Blueprint $table) {
            $table->string('recipe_id');
            $table->integer('nutrient_id')->unsigned();
            $table->decimal('value', 18, 4);

            $table->primary(['recipe_id', 'nutrient_id']);
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('nutrient_id')->references('id')->on('nutrients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_nutrients');
    }
}
