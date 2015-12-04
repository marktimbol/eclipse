<?php

namespace App\Http\Controllers\Admin;

use App\Category;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->category->all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->category->store($request->all());
        
        flash()->success('Eclipse', 'You have successfully added new Category.');

        return redirect()->route('admin.categories.index');        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        return view('admin.categories.edit', compact('category'));         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        $this->category->update($category->id, $request->all());

        flash()->success('Eclipse', 'You have successfully updated the Category.');

        return redirect()->route('admin.categories.edit', $category->id);          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $this->category->delete($category->id);

        flash()->success( companyName(), 'You have successfully deleted the Category.');

        return redirect()->route('admin.categories.index'); 
    }
}
