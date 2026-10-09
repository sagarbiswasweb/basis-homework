<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Error404Controller extends Controller
{
    public static function index(){
        return view('backend.404');
    }
}
