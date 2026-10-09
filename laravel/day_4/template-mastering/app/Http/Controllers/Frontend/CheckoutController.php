<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $companyInfo = Company::getCompanyData();
        return view('frontend.checkout', ["companyinfoes" => $companyInfo]);
    }
}
