<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;
use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PhotosController extends Controller
{
    protected $uploadsDirectory = '/images/uploads/';

    protected $package;

    public function __construct(PackageRepositoryInterface $package) {

        $this->package = $package;

    }

    public function uploadPackagePhoto(Request $request) {

        if( $request->hasFile('photo') ) {

            $file = $request->file('photo');

            $filename = $this->makeThumbnail($file);

            return $this->package->addPhoto($request->package_id, $filename);
      
        }

    }

    public function deletePackagePhoto($path) {

        $this->package->deletePhoto($path);

        return redirect()->back();

    }

    protected function makeThumbnail(UploadedFile $photo)
    {   

        $filename = sprintf('%s-%s', time(), $photo->getClientOriginalName()); //87947839749.jpg

        $image = Image::make($photo->getRealPath());

        $image->resize(800, null, function($constraint) {

            $constraint->aspectRatio();
        
        })->save( $this->fullPath($filename) );  

        return $filename;
        
    }    

    protected function fullPath($filename) {
    
        return public_path() . $this->uploadsDirectory . $filename;
    
    }

}