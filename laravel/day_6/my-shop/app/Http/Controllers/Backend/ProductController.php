<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    Public static function create(){
        return view('backend.add-product');
    }
    public static function store(Request $request){
        // print_r($_POST);
        $product = new Product();
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();

        return back()->with('notification', 'Product added successfully');
    }
    public function index(){
        $products = Product::latest()->get();
        return view('backend.manage-product', ['products'=>$products]);
    }
}
