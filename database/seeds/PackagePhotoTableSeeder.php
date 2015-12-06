<?php

use App\Package;
use App\Photo;
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
        $packages = Package::all();

        foreach( $packages as $package )
        {
            $filename = sprintf('%s-Tour.jpg', str_replace(' ', '-', $package->name));

            $newPhoto = new Photo;

            $newPhoto->path = $filename;
            $newPhoto->imageable_id = $package->id;
            $newPhoto->imageable_type = 'App\Package';
            
            $newPhoto->save();
        }
    }
}
