<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getData(Request $request){
        if($request->ajax()){
            return datatables()->of(Product::all())->toJson();
        }
        return view("products");
    }
}
