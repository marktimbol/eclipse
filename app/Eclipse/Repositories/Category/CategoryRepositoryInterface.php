<?php

namespace Eclipse\Repositories\Category;

interface CategoryRepositoryInterface {
	
	public function all();

	public function find($id);

	public function store($data);
	
	public function update($id, $data);

	public function delete($id);
}