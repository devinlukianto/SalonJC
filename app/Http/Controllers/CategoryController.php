<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function retrieveCategory() {
            return Category::all();
        } 

    public function paginateCategory(){
        return Category::paginate(5);
    }*/

    public function index(Request $request)
    {
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        /*if (Cache::has('categories')){
            $categories = Cache::put('categories' . $currentPage);
        }
        else {
            Cache::put('categories' . $currentPage,  $this->retrieveCategory(), 10);
        }*/

        /*if (Cache::has('categoriescache')) {
             $categories = Cache::pull('categoriescache')-> paginate(5);
        }
        else {
            Cache::rememberForever('categoriescache', function(){
                return Category::all();
            });
        }*/
        $categories_cache = Cache::rememberForever('categoriescache', function(){
            return Category::all();
        });

        //$categories = Cache::remember('categoriescache')::paginate(5);
        
        $per_page = 5;
        $categories = new LengthAwarePaginator (
            $categories_cache->forPage($currentPage, $per_page), 
            $categories_cache->count(), 
            $per_page, 
            $currentPage,
            ['path' => $request->url(),
            'query' => $request->query()]
        );
        
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
            return redirect()->route('categories.create')
                ->withErrors($validator);
        } else {
            // store
            $category = new Category;
            $category->name  = Input::get('name');
            $category->description = Input::get('description');
            $category->save();

            // redirect
            Session::flash('message', 'Successfully created Category!');
            return redirect()->route('categories.index');
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
            //Cache::forget('categories');

            // redirect
            Session::flash('message', 'Successfully updated category!');
            return redirect()->route('categories.index');
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
        //Cache::forget('categories');

        // redirect
        Session::flash('message', 'Successfully deleted the category!');
        return redirect()->route('categories.index');
    }

    public function restoreAll(){
        $categories = Category::onlyTrashed()->restore();

        return redirect()->route('categories.index');
    }

    public function showTrash(){
        $categories = Category::onlyTrashed()->paginate(5);

        return view('category.trash', ['categories'=>$categories]);
    }

    public function restore($id){
        $categories = Category::onlyTrashed()->find($id)->restore();

        $categories_cache = Cache::remember('categories', 10, function(){
            return Category::all();
        });
        
        $per_page = 5;

        return redirect()->route('categories.index');
    }

    public function forceDelete($id) {
        $category = Category::onlyTrashed()->find($id)->forceDelete();
        $categories = Category::onlyTrashed()->paginate(5);

       return redirect()->route('category.showtrash');    }
}
