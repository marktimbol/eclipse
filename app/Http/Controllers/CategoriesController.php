<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected $category;

    public function __construct(CategoryRepositoryInterface $category) {

    	$this->category = $category;

    }

    public function getPackagesPerCategory($category) {

    	$packages = $category->packages()->get();

    	return view('public.packages.index', compact('packages'));

    }
}
