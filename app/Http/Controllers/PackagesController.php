<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    protected $package;

    public function __construct(PackageRepositoryInterface $package) {

    	$this->package = $package;

    }

    public function index() {

    	$packages = $this->package->all();

    	return view('public.packages.index', compact('packages'));

    }

    public function package($package) {

    	$packages = $this->package->related($package->id);

        $pageTitle = sprintf('%s - %s', $package->name, $package->subtitle);

    	return view('public.packages.package', compact('packages', 'package', 'pageTitle'));

    }

}
