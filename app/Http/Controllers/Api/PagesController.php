<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Eclipse\Repositories\Package\PackageRepositoryInterface;

class PagesController extends Controller
{
    protected $package;

    public function __construct(PackageRepositoryInterface $package)
    {
        $this->package = $package;
    }

    public function home()
    {        
        setDefaultCurrency();

        $packages = $this->package->take(9);

        return $packages;
    }
}
