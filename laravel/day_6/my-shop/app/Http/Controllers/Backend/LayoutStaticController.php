<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutStaticController extends Controller
{
    public static function index(){
        return view('backend.layout-static');
    }
}
