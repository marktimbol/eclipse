<?php

namespace Eclipse\Repositories\Package;

use App\Package;
use App\Photo;
use Illuminate\Support\Facades\File;

class PackageRepository implements PackageRepositoryInterface {
	
	public function all() {
	
		return Package::with('photos', 'category')->latest()->get();
	
	}


	/**
	 * TODO
	 */

	public function related($packageId) {

		return Package::with('photos')->whereNotIn('id', [$packageId])->take(3)->get();
	}


	public function find($id) {
	
		return Package::with('photos')->findOrFail($id);
	
	}

	public function store($data) {

		return Package::create($data);
	
	}

	public function update($id, $data) {
		
		$category = $this->find($id);
		
		$category->fill($data);
		
		$category->save();

	}

	public function delete($id) {

		$package = $this->find($id);

		/**
		 * Delete the photo from the directory /images/uploads
		 */
		$this->deleteExistingPhotos($id, 'Package');		
		
		/**
		 * Delete the record from the "categories" table
		 */
		$package->delete();

	}

	public function needsToConfirm($package) {

		return $package->confirmAvailability;

	}

	/**
	 * Add new package photo
	 */
	public function addPhoto($id, $filename) {

		$package = $this->find($id);

		$photo = new Photo;

		$photo->path = $filename;

		return $package->photos()->save($photo);

		
	}	

	public function deletePhoto($path) {

		/**
		 * Delete the photo from the directory
		 */
		$photoPath = public_path('images/uploads/'.$path);

        if( File::isFile($photoPath) ) {

            File::delete( $photoPath );

        }	

        /**
         * Delete the photo from the "photos" table
         */

        Photo::wherePath($path)->delete();

	}


	public function updatePhoto($id, $filename) {
		
		/**
		 * Delete the existing photo
		 */
        $this->deleteExistingPhotos($id, 'Package');
		
		$this->addPhoto($id, $filename);

	}

	/**
	 * Find the related photo on the given Model, If there's an existing
	 * photo, we will loop through them and then delete them one by one.
	 * And finally, we will delete it's record from the "photos" table
	 */
	public function deleteExistingPhotos($id, $model) {

		$model = 'App\\'.$model;

		$oldPhoto = Photo::where('imageable_type', $model)
							->where('imageable_id', $id);

		if( count($oldPhoto) > 0 ) {

			foreach( $oldPhoto->get() as $photo ) {

				$oldPhotoPath = public_path('images/uploads/'.$photo->path);

		        if( File::isFile($oldPhotoPath) ) {

		            File::delete( $oldPhotoPath );

		        }
		        
		    }

	        $oldPhoto->delete();

		}


	}	

}