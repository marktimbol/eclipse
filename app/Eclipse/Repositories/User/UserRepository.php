<?php

namespace Eclipse\Repositories\User;

use App\User;

class UserRepository implements UserRepositoryInterface {
	
	public function all() {
	
		return User::with('bookings.packages')->has('bookings')->latest()->get();
	
	}

	public function find($id) {
	
		return User::with('bookings')->findOrFail($id);
	
	}

	public function store($data) {

		return User::create($data);
	
	}

	public function update($id, $data) {
		
		$user = $this->find($id);
		
		$user->fill($data);
		
		$user->save();

	}

	public function delete($id) {

		$user = $this->find($id);
		
		$user->delete();

	}


}