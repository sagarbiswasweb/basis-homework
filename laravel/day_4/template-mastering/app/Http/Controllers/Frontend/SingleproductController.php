<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class SingleproductController extends Controller
{
    public function index(){
        $companyInfo = Company::getCompanyData();
        return view('frontend.single-product', ["companyinfoes" => $companyInfo]);
    }
}
