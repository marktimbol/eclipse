<?php

namespace Eclipse\Repositories\Category;

use App\Category;

class CategoryRepository implements CategoryRepositoryInterface {
	
	public function all()
	{
		return Category::with('packages')->latest()->get();
	}

	public function take($items)
	{
		return Category::with('packages')->take($items)->get();
	}

	public function find($id)
	{
		return Category::with('packages')->findOrFail($id);
	}

	public function store($data) 
	{
		return Category::create($data);
	}

	public function update($id, $data)
	{
		$category = $this->find($id);
		
		$category->fill($data);
		
		$category->save();
	}

	public function delete($id)
	{
		$category = $this->find($id);

		$category->delete();
	}
}