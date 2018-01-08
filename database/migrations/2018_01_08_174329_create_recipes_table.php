<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('title');
            $table->integer('servings');
            $table->integer('total_time');
            $table->integer('prep_time')->nullable();
            $table->integer('cook_time')->nullable();
            $table->string('image_url')->nullable();
            $table->integer('source_id');       // fk on sources
            $table->string('source_url');
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->integer('user_id');         // foreign key to users

            $table->primary('id');
            $table->foreign('source_id')->references('id')->on('sources');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
