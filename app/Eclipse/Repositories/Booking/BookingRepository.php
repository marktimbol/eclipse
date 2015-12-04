<?php

namespace Eclipse\Repositories\Booking;

use App\Booking;

class BookingRepository implements BookingRepositoryInterface {
	
	public function all() {
	
		return Booking::with('user')->latest()->get();
	
	}

	public function find($id) {
	
		return Booking::with('user')->findOrFail($id);
	
	}

	public function findByReference($reference) {

		return Booking::with('user')->where('booking_reference', $reference)->first();

	}

	public function store($data) {

		return Booking::create($data);
	
	}

	public function update($id, $data) {
		
		$Booking = $this->find($id);
		
		$Booking->fill($data);
		
		$Booking->save();

	}

	public function delete($id) {

		$Booking = $this->find($id);
		
		$Booking->delete();

	}


}