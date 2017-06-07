<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::paginate(5);

        return view('category.index', ['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = array(
            'name'       => 'required|unique:categories',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('categories/create')
                ->withErrors($validator);
        } else {
            // store
            $category = new Category;
            $category->name  = Input::get('name');
            $category->description = Input::get('description');
            $category->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('categories');
        }
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
        $category = Category::find($id);
        $products = $category->products()->get();
        return view('category.show', ['category'=>$category, 'products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('category.edit', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = array(
            'name'       => 'required|unique:categories',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('categories/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $category = Category::find($id);
            $category->name       = Input::get('name');
            $category->description       = Input::get('description');
            $category->save();

            // redirect
            Session::flash('message', 'Successfully updated category!');
            return Redirect::to('categories');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the category!');
        return Redirect::to('categories');
    }

    public function restoreAll(){
        $categories = Category::onlyTrashed()->restore();

        return Redirect::to('categories');
    }

    public function showTrash(){
        $categories = Category::onlyTrashed()->paginate(5);

        return view('category.trash', ['categories'=>$categories]);
    }

    public function restore($id){
        $categories = Category::onlyTrashed()->find($id)->restore();

        return Redirect::to('categories');
    }

    public function forceDelete($id) {
        $category = Category::onlyTrashed()->find($id)->forceDelete();
        $categories = Category::onlyTrashed()->paginate(5);

        return view('category.trash', ['categories'=>$categories]);
    }
}
