<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $companyInfos = CompanyInfo::all();
        return view('frontend.cart', ["companydata" => $companyInfos]);
    }
}
