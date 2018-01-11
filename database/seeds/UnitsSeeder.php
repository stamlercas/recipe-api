<?php

use Illuminate\Database\Seeder;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
        	/* VOLUME */
        	[
        		'id' => 'mL',
        		'name' => 'milliliter',
        		'abbreviation' => 'mL',
        		'name_plural' => 'milliliters',
        		'abbreviation_plural' => 'mL'
        	],
        	[
        		'id' => 'cL',
        		'name' => 'centiliter',
        		'abbreviation' => 'cL',
        		'name_plural' => 'centiliters',
        		'abbreviation_plural' => 'cL'
        	],
        	[
        		'id' => 'L',
        		'name' => 'liter',
        		'abbreviation' => 'L',
        		'name_plural' => 'liters',
        		'abbreviation_plural' => 'L'
        	],
        	[
        		'id' => 'c',
        		'name' => 'cup',
        		'abbreviation' => 'c',
        		'name_plural' => 'cups',
        		'abbreviation_plural' => 'c'
        	],
        	[
        		'id' => 'tsp',
        		'name' => 'teaspoon',
        		'abbreviation' => 'tsp',
        		'name_plural' => 'teaspoons',
        		'abbreviation_plural' => 'tsp'
        	],
        	[
        		'id' => 'tbsp',
        		'name' => 'tablespoon',
        		'abbreviation' => 'tbsp',
        		'name_plural' => 'tablespoons',
        		'abbreviation_plural' => 'tbsp'
        	],
        	[
        		'id' => 'gal',
        		'name' => 'gallon',
        		'abbreviation' => 'gal',
        		'name_plural' => 'gallons',
        		'abbreviation_plural' => 'gal'
        	],
        	[
        		'id' => 'qt',
        		'name' => 'quart',
        		'abbreviation' => 'qt',
        		'name_plural' => 'quarts',
        		'abbreviation_plural' => 'qt'
        	],
        	[
        		'id' => 'fl_oz',
        		'name' => 'fluid ounce',
        		'abbreviation' => 'fl oz',
        		'name_plural' => 'fluid ounces',
        		'abbreviation_plural' => 'fl oz'
        	],
        	[
        		'id' => 'pt',
        		'name' => 'pint',
        		'abbreviation' => 'pt',
        		'name_plural' => 'pints',
        		'abbreviation_plural' => 'pt'
        	],

        	/* MASS */

        	[
        		'id' => 'mg',
        		'name' => 'milligram',
        		'abbreviation' => 'mg',
        		'name_plural' => 'milligrams',
        		'abbreviation_plural' => 'mg'
        	],
        	[
        		'id' => 'g',
        		'name' => 'gram',
        		'abbreviation' => 'g',
        		'name_plural' => 'gram',
        		'abbreviation_plural' => 'g'
        	],
        	[
        		'id' => 'kg',
        		'name' => 'kilogram',
        		'abbreviation' => 'kg',
        		'name_plural' => 'kilograms',
        		'abbreviation_plural' => 'kg'
        	],
        	[
        		'id' => 'lb',
        		'name' => 'pound',
        		'abbreviation' => 'lb',
        		'name_plural' => 'pounds',
        		'abbreviation_plural' => 'lb'
        	],
        	[

        		'id' => 'oz',
        		'name' => 'ounce',
        		'abbreviation' => 'oz',
        		'name_plural' => 'ounces',
        		'abbreviation_plural' => 'oz'
        	],
    	]);
    }
}
