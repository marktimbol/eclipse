<?php

use Illuminate\Database\Seeder;

class PackagePhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Package::class, 5)->create()->each(function($package) {
        	$package->photos()->save(factory(App\Photo::class)->make());
        });
    }
}
