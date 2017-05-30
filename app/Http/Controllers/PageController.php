<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function fetchproduct($id)
    {
        return view('produk',['prod_id'=>$id]);
    }
}