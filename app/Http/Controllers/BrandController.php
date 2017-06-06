<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brands = Brand::all();
        return view('brands.index')->with('brands',$brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brands.create');
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
            'name'=>'required',
            'company'=>'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::to('brands/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $brand = new Brand(Input::all());
/*            $brand->name = Input::get('name');
            $brand->description = Input::get('description');
            $brand->company = Input::get('company');
            $brand->company_phone = Input::get('company_phone');
            $brand->company_address = Input::get('company_address');*/
            $brand->save();

            return redirect('brands');
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
        $brand = Brand::find($id);
        return view('brands.show')
            ->with('brand', $brand);
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
        $brand = Brand::find($id);
        return view('brands.edit')
            ->with('brand',$brand);
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
            'name'=>'required',
            'company'=>'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::to('brands/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $brand = Brand::find($id);
            $brand->name = Input::get('name');
            $brand->description = Input::get('description');
            $brand->company = Input::get('company');
            $brand->company_phone = Input::get('company_phone');
            $brand->company_address = Input::get('company_address');
            $brand->save();

            return redirect('brands');
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
        $brand = Brand::find($id);
        $brand->delete();

        return redirect('brands');
    }
}
