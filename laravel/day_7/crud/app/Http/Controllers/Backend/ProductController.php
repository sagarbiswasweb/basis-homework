<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('backend.product.add');
    }

    public function store(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->size = $request->size;

        // for image 
        $image = $request->image;
        $imageName = $image->getClientOriginalName();
        $folder = 'product-images/';
        $image->move($folder, $imageName);
        $product->image = $folder.$imageName;

        $product->save();
        return back()->with('msg', 'Product added successfully');
    }

    public function index(){
        $products = Product::all();
        return view('backend.product.manage', ['products'=>$products]);
    }
}
