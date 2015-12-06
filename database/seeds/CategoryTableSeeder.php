<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
			'Safari',
			'Safari Adventure',
			'Cruise / Boats',
			'City Tours',
			'Bus Tours',
			'Air Tours',
			'Fishing & Yachting',
			'Water Parks / Entertainment',
			'UAE Attractions',
			'Shopping Malls',
			'Souks'
		];

		foreach( $categories as $category )
		{
			$new_category = new Category;
			$new_category->name = $category;
			$new_category->save();
		}
    }
}
