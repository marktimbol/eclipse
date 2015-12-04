<?php

namespace Eclipse\Repositories\Booking;

interface BookingRepositoryInterface {
	
	public function all();

	public function find($id);

	public function findByReference($reference);

	public function store($data);
	
	public function update($id, $data);

	public function delete($id);

}