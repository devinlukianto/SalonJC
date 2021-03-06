<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class ProductController extends Controller
{
    private $rules = array(
        'name'=>'required',
        'price'=>'required|numeric',
        'stock'=>'required|integer',
        'description'=>'nullable',
        'category'=> 'nullable'
    );

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $products_from_cache = Cache::rememberForever('products',  function(){
            return Product::all();
        });
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        
        $per_page = 10;
        $products = new LengthAwarePaginator (
            $products_from_cache->forPage($current_page, $per_page), 
            $products_from_cache->count(), 
            $per_page, 
            $current_page,
            ['path' => $request->url(),
            'query' => $request->query()]
        );
//        $products = Product::paginate(10);


        $brands = Brand::all();
        $categories = Category::all();
        $is_trash = 0;
        return view('products.index')
            ->with('products',$products)
            ->with('brands',$brands)
            ->with('categories',$categories)
            ->with('is_trash',$is_trash);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands = Brand::pluck('name', 'id');
        $categories = Category::pluck('name','id');
        return view('products.create')
            ->with('brands', $brands)
            ->with('categories',$categories);
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

        $validator = Validator::make(Input::all(), $this->rules);

        if($validator->fails()) {
            return redirect()
                ->route('products.create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $product = new Product;
            $product->name = Input::get('name');
            if(is_numeric(Input::get('price'))) {
                $product->price = Input::get('price');
            } else {

            }

            $product->stock = Input::get('stock');
            $product->description = Input::get('description');
            $product->brand_id = Input::get('brand_id');
            $product->category_id = Input::get('category');
            $product->save();

            return redirect('products');
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
        $product = Product::find($id);
        //$brand = Brand::find($product->brand_id);
        $brand = $product->brand;
        $category = $product->category;
        return view('products.show')
            ->with('product', $product)
            ->with('brand', $brand)
            ->with('category',$category);
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
        $product = Product::find($id);
        $brands = Brand::pluck('name', 'id');
        $categories = Category::pluck('name','id');
        return view('products.edit')
            ->with('product',$product)
            ->with('brands', $brands)
            ->with('categories',$categories);
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
        $product = Product::find($id);

        $validator = Validator::make(Input::all(), $this->rules);

        if($validator->fails()) {
            return redirect(route('products.create'))
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $product->name = Input::get('name');
            $product->price = Input::get('price');
            $product->stock = Input::get('stock');
            $product->description = Input::get('description');
            $product->brand_id = Input::get('brand_id');
            $product->category_id = Input::get('category');
            $product->update();

            return redirect('products');
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
        $product = Product::find($id);
        $product->delete();

        //Cache::forget('products');

        return redirect('products');
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->paginate(10);
        $brands = Brand::all();
        $categories = Category::all();
        $is_trash = 1;
        return view('products.index')
            ->with('products',$products)
            ->with('brands',$brands)
            ->with('categories',$categories)
            ->with('is_trash',$is_trash);
    }

    public function restore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();

        Cache::forget('products');
        
        return redirect('products');
    }

    public function deletepermanent($id)
    {
        $product = Product::withTrashed()->find($id);
        $product->forceDelete();

        return redirect(route('product.trash'));
    }

    public function showtrash($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $brand = $product->brand;
        $category = $product->category;
        $is_trash = 1;
        return view('products.show')
            ->with('product',$product)
            ->with('brand',$brand)
            ->with('category',$category)
            ->with('is_trash',$is_trash);
    }
}
