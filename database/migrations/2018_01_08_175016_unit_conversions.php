<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UnitConversions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_conversions', function (Blueprint $table) {
            $table->integer('unit_id');
            $table->integer('conversion_unit_id');
            $table->decimal('conversion_rate', 18, 10);

            $table->primary(['unit_id', 'conversion_unit_id']);
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('conversion_unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_conversions');
    }
}
