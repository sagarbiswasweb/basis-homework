<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $companyInfo = Company::getCompanyData();

        $productInfo = Product::getProductData();
        $sliderInfo = Product::getSliderData();
        $brandImage = Product::getBrandImg();
        $topSellerInfo = Product::getTopSeller();
        $recentlyViewed = Product::getRecentlyViewed();
        $topNew = Product::getTopNew();

        return view('frontend.home', [
            "companyinfoes" => $companyInfo, 
            "productinfoes" => $productInfo, 
            "sliderinfoes" => $sliderInfo, 
            "brandimages" => $brandImage, 
            "topsellers" => $topSellerInfo, 
            "recentlyviewed" => $recentlyViewed, 
            "topnew" => $topNew
        ]);
    }
}
