<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreatePackageRequest;
use Eclipse\Repositories\Category\CategoryRepositoryInterface;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    protected $currentUser;
    
    protected $package;

    protected $category;

    public function __construct(PackageRepositoryInterface $package, CategoryRepositoryInterface $category) {

        parent::__construct();

        $this->currentUser = auth()->user();

        $this->package = $package;

        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $packages = $this->package->all();

        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->category->all();

        return view('admin.packages.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreatePackageRequest $request)
    {
        $category = $this->category->find($request->category_id); 

        $package = $category->packages()->create($request->all());
        
        flash()->success('Yay!', 'You have successfully added new Package.');

        return redirect()->route('admin.packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($package)
    {
        return view('admin.packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($package)
    {
        $categories = $this->category->all();

        return view('admin.packages.edit', compact('package', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(CreatePackageRequest $request, $package)
    {        
        $this->package->update($package->id, $request->all());

        flash()->success('Eclipse', 'Package has been successfully updated.');

        return redirect()->route('admin.packages.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($package)
    {
        $this->package->delete($package->id);

        flash()->success('Yay!', 'Package has been successfully deleted.');

        return redirect()->route('admin.packages.index');         
    }
}
