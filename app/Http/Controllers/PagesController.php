<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    protected $package;

    public function __construct(PackageRepositoryInterface $package)
    {
        $this->package = $package;
    }

    public function homeOld()
    {        
        setDefaultCurrency();
        
        $packages = $this->package->take(9);

        return view('public.home', compact('packages'));
    }

    public function home()
    {        
        setDefaultCurrency();

        return view('public.home-vue');
    }    
    
    public function deals()
    {
        return view('public.deals');
    }

    public function touristInformation()
    {
    	return view('public.tourist-information');
    }

    public function corporate()
    {
    	return view('public.corporate');
    }

    public function about()
    {
    	return view('public.about');
    }

    public function contact()
    {
    	return view('public.contact');
    }

    public function changeCurrency(Request $request)
    {  
        session(['currency' => $request->currency]);

        return redirect()->back();
    }
}
