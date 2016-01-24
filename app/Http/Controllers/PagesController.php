<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

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

        return view('public.home');
    }    
    
    public function deals()
    {
        $filename = 'images/uploads/1452846732-Desert-Safari.jpg';

        $command = Storage::disk('s3')->getDriver()->getAdapter()->getClient()->getCommand('GetObject', [
            'Bucket'                     => env('S3_BUCKET'),
            'Key'                        => $filename,
            'ResponseContentDisposition' => 'attachment;'
        ]);

        $request = Storage::disk('s3')->getDriver()->getAdapter()->getClient()->createPresignedRequest($command, '+5 minutes');

        $imagePath = $request->getUri();

        return $imagePath;


        return view('public.deals', compact('path'));
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
