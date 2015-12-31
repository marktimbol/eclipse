<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Package;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Eclipse\Repositories\Package\PackageRepositoryInterface;

class PackagesController extends Controller
{
	protected $package;

    public function __construct(PackageRepositoryInterface $package)
    {
    	$this->package = $package;
    }

    public function index()
    {
    	return $this->package->all();
    }

    public function package($package)
    {
    	return $package;
    }

    public function featuredPackages()
    {
        return $this->package->take(9);
    }
} 
