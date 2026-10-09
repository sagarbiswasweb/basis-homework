<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $companyInfo = Company::getCompanyData();
        return view('frontend.shop', ["companyinfoes" => $companyInfo]);
    }
}
