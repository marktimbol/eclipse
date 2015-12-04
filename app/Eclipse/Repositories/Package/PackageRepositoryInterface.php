<?php

namespace Eclipse\Repositories\Package;

interface PackageRepositoryInterface {
	
	public function all();

	public function related($packageId);

	public function find($id);

	public function store($data);
	
	public function update($id, $data);

	public function delete($id);

	public function needsToConfirm($package);

	public function addPhoto($id, $filename);

	public function deletePhoto($path);

	public function updatePhoto($id, $filename);

	public function deleteExistingPhotos($id, $model);
}