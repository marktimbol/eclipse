<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Eclipse\Repositories\Category\CategoryRepositoryInterface;

class CategoriesController extends Controller
{
	protected $category;

    public function __construct(CategoryRepositoryInterface $category)
    {
    	$this->category = $category;
    }

    public function index()
    {
		return $this->category->all();
    }
}
