<?php

use App\Recipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	$this->call(UnitsSeeder::class);
        if (App::environment() == "local") {
        	DB::table('users')->insert([
	        	[
	        		'name' => 'Test',
	        		'email' => 'test@test.test',
	        		'password' => bcrypt('testtest')
	        	]
	    	]);

        	DB::table('attributes')->insert([
        		[
	        		'title' => 'Main Dishes',
	        		'type' => 'courses',
	        		'user_id' => 1
        		],
        		[
	        		'title' => 'Dinner',
	        		'type' => 'courses',
	        		'user_id' => 1
        		],
        		[
	        		'title' => 'Diet 1',
	        		'type' => 'diets',
	        		'user_id' => 1
        		],
    		]);

        	DB::table('ingredients')->insert([
        		[
	        		'user_id' => 1,
	        		'name' => 'garlic',
                    'description' => null
        		],
        		[
	        		'user_id' => 1,
	        		'name' => 'olive oil',
	        		'description' => 'oil'
        		],
        		[
	        		'user_id' => 1,
	        		'name' => 'kosher salt',
	        		'description' => 'flavor enhancer, preservative, binder, fermentation-control additive, texture-control agent and color developer'
        		],
        		[
	        		'user_id' => 1,
	        		'name' => 'black pepper',
	        		'description' => 'spice and seasoning'
        		],
        		[
	        		'user_id' => 1,
	        		'name' => 'thyme leaves',
	        		'description' => 'herb'
        		],
        		[
        			'user_id' => 1,
        			'name' => 'Prime Rib Roast',
        			'description' => 'meat'
        		]
    		]);

    		DB::table('nutrients')->insert([
    			[
    				'description' => 'Sodium, Na',
    				'unit_id' => 'g',
                    'user_id' => 1
    			],
    			[
    				'description' => 'Cholesterol',
    				'unit_id' => 'g',
                    'user_id' => 1
    			],
    			[
    				'description' => 'Protein',
    				'unit_id' => 'g',
                    'user_id' => 1
    			],
    			[
    				'description' => 'Sugars, total',
    				'unit_id' => 'g',
                    'user_id' => 1
    			],
			]);

    		DB::table('sources')->insert([
    			[
    				'name' => 'Life Tastes Good',
    				'site_url' => 'ourlifetastesgood.blogspot.com',
    				'image_url' => 'https://4.bp.blogspot.com/-EPOjBoYhO-E/UzIlk_GcBkI/AAAAAAAAKMs/5xfGEqIUFHY/s760/banner%2B%25282%2529.png',
                    'user_id' => 1
    			]
			]);

	        DB::table('recipes')->insert([
	        	[
	        		'id' => 'Garlic-Crusted-Prime-Rib-Roast-2294143',
	        		'user_id' => 1,
	        		'title' => 'Garlic Crusted Prime Rib Roast',
	        		'servings' => 7,
	        		'total_time' => 135,
	        		'image_url' => 'https://lh3.googleusercontent.com/Qddo-2XM8xRqd_qs16TNZ-Mx7Nci-SUMxz82n4uZwLuw5xHHwD59pfnMXIxH2Z1lrvrcPyicbrFTxqMfwi2X5g=s180',
	        		'source_id' => 1,
            		'source_url' => 'https://ourlifetastesgood.blogspot.com/2015/12/garlic-crusted-prime-rib-roast.html',
            		'notes' => 'notes',
            		'user_id' => 1
	        	]
	    	]);

	    	DB::table('directions')->insert([
    			[
    				'recipe_id' => 'Garlic-Crusted-Prime-Rib-Roast-2294143',
    				'step' => 1,
    				'text' => 'Begin preparing the roast the day before cooking by mixing 2 tablespoons freshly minced garlic, 2 tablespoons olive oil, 2 teaspoons sea salt, 1 teaspoon ground black pepper, and 2 teaspoons fresh thyme leaves in a small bowl until combined. Lay out plastic wrap in a cross. I lay one large piece horizontally and then top it with a large piece vertically. Place the roast in the center of the plastic wrap and slather it with the garlic mixture all over the roast and along the sides. Wrap tightly in the plastic wrap and refrigerate overnight. Tip: I place the roast in a container to catch any leaks just in case.'
    			],
    			[
    				'recipe_id' => 'Garlic-Crusted-Prime-Rib-Roast-2294143',
    				'step' => 2,
    				'text' => 'Approximately an hour prior to roasting, remove the roast from the fridge and unwrap. Place the roast on a rack in a roasting pan and allow it come to room temperature to ensure even cooking throughout.',
    			],
				[
    				'recipe_id' => 'Garlic-Crusted-Prime-Rib-Roast-2294143',
    				'step' => 3,
    				'text' => 'Preheat the oven to 450°F and roast the meat for 15 minutes to develop a beautiful crust on the outside',
    			],
    			[
    				'recipe_id' => 'Garlic-Crusted-Prime-Rib-Roast-2294143',
    				'step' => 4,
    				'text' => 'Reduce the temp to 325°F and continue cooking for an hour and 45 minutes or until an instant read thermometer registers between 120° and 125°F. Remove the roast from the oven and allow to rest for at least 15 minutes. My instructions are for a mid-rare roast. If you prefer a different cook on your roast, please refer to the Roast Perfect App for degrees of done-ness temperature recommendations. Enjoy!',
    			]
    		]);

	        Recipe::find('Garlic-Crusted-Prime-Rib-Roast-2294143')->ingredients()->attach([
	        	1 => [
	        		'unit_id' => 'tbsp',
	        		'quantity' => 2,
	        		'display_quantity' => '2',
	        		'preparation' => 'freshly minced'
	        	],
	        	2 => [
	        		'unit_id' => 'tbsp',
	        		'quantity' => 2,
	        		'display_quantity' => '2',
                    'preparation' => null
	        	],
	        	3 => [
	        		'unit_id' => 'tsp',
	        		'quantity' => 2,
	        		'display_quantity' => '2',
                    'preparation' => null
	        	],
	        	4 => [
	        		'unit_id' => 'tsp',
	        		'quantity' => 1,
	        		'display_quantity' => '1',
	        		'preparation' => 'freshly ground'
	        	],
	        	5 => [
	        		'unit_id' => 'tsp',
	        		'quantity' => 2,
	        		'display_quantity' => '2',
	        		'preparation' => 'fresh leaves'
	        	],
	        	6 => [
	        		'unit_id' => 'lb',
	        		'quantity' => 5,
	        		'display_quantity' => '5',
                    'preparation' => null
	        	]
        	]);
	        Recipe::find('Garlic-Crusted-Prime-Rib-Roast-2294143')->attributes()->attach([1, 2, 3]);
	        Recipe::find('Garlic-Crusted-Prime-Rib-Roast-2294143')->nutrients()->attach([
	        	1 => [
	        		'value' => .86,
        		],
        		2 => [
	        		'value' => .23,
        		],
        		3 => [
	        		'value' => 52,
        		],
        		4 => [
	        		'value' => .02,
        		]
        	]);
		}
    }
}