<?php

use App\Category;
use App\Photo;
use Illuminate\Database\Seeder;

class CategoryPhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        foreach( $categories as $category )
        {
            $filename = sprintf('%s-Tour.jpg', str_replace([' ', '/'], '-', $category->name));

            $newPhoto = new Photo;

            $newPhoto->path = $filename;
            $newPhoto->imageable_id = $category->id;
            $newPhoto->imageable_type = 'App\Category';
            
            $newPhoto->save();
        }
    }
}
