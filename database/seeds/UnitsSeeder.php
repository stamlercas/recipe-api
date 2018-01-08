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
        		'name' => 'milliliter',
        		'abbreviation' => 'mL',
        		'name_plural' => 'milliliters',
        		'abbreviation_plural' => 'mL'
        	],
        	[
        		'name' => 'centiliter',
        		'abbreviation' => 'cL',
        		'name_plural' => 'centiliters',
        		'abbreviation_plural' => 'cL'
        	],
        	[
        		'name' => 'liter',
        		'abbreviation' => 'L',
        		'name_plural' => 'liters',
        		'abbreviation_plural' => 'L'
        	],
        	[
        		'name' => 'centiliter',
        		'abbreviation' => 'cl',
        		'name_plural' => 'centiliters',
        		'abbreviation_plural' => 'cl'
        	],
        	[
        		'name' => 'cup',
        		'abbreviation' => 'c',
        		'name_plural' => 'cups',
        		'abbreviation_plural' => 'c'
        	],
        	[
        		'name' => 'teaspoon',
        		'abbreviation' => 'tsp',
        		'name_plural' => 'teaspoons',
        		'abbreviation_plural' => 'tsp'
        	],
        	[
        		'name' => 'tablespoon',
        		'abbreviation' => 'tbsp',
        		'name_plural' => 'tablespoons',
        		'abbreviation_plural' => 'tbsp'
        	],
        	[
        		'name' => 'gallon',
        		'abbreviation' => 'gal',
        		'name_plural' => 'gallons',
        		'abbreviation_plural' => 'gal'
        	],
        	[
        		'name' => 'quart',
        		'abbreviation' => 'qt',
        		'name_plural' => 'quarts',
        		'abbreviation_plural' => 'qt'
        	],
        	[
        		'name' => 'fluid ounce',
        		'abbreviation' => 'fl oz',
        		'name_plural' => 'fluid ounces',
        		'abbreviation_plural' => 'fl oz'
        	],
        	[
        		'name' => 'pint',
        		'abbreviation' => 'pt',
        		'name_plural' => 'pints',
        		'abbreviation_plural' => 'pt'
        	],

        	/* MASS */

        	[
        		'name' => 'milligram',
        		'abbreviation' => 'mg',
        		'name_plural' => 'milligrams',
        		'abbreviation_plural' => 'mg'
        	],
        	[
        		'name' => 'gram',
        		'abbreviation' => 'g',
        		'name_plural' => 'gram',
        		'abbreviation_plural' => 'g'
        	],
        	[
        		'name' => 'kilogram',
        		'abbreviation' => 'kg',
        		'name_plural' => 'kilograms',
        		'abbreviation_plural' => 'kg'
        	],
        	[
        		'name' => 'pound',
        		'abbreviation' => 'lb',
        		'name_plural' => 'pounds',
        		'abbreviation_plural' => 'lb'
        	],
        	[
        		'name' => 'ounce',
        		'abbreviation' => 'oz',
        		'name_plural' => 'ounces',
        		'abbreviation_plural' => 'oz'
        	],
    	])
    }
}
