<?php
namespace Eclipse\Repositories\Category;

use App\Category;

class CategoryRepository implements CategoryRepositoryInterface {
	
	public function all() {
		return Category::latest()->get();
	}

	public function find($id) {
		return Category::findOrFail($id);
	}

	public function store($data) {
		return Category::create($data);
	}

	public function update($id, $data) {

		$category = $this->find($id);
		
		$category->fill($data);
		
		$category->save();

	}

	public function delete($id) {

		$category = $this->find($id);

		$category->delete();

	}
}