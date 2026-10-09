<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public static function index(){
        return view('frontend.single-product');
    }
}
