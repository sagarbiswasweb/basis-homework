<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\CompanyInfo;
use App\Models\Product;
use App\Models\RecentlyViewed;
use App\Models\Slider;
use App\Models\TopNew;
use App\Models\TopSeller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $companyInfos = CompanyInfo::all();

        $productinfos = Product::all();
        $sliderInfos = Slider::all();
        $brandImgs = Brand::all();
        $topSellerInfos = TopSeller::all();
        $recentlyViewedInfos = RecentlyViewed::all();
        $topNewInfos = TopNew::all();

        return view('frontend.home', [
            'companydata' => $companyInfos, 
            'productdata' => $productinfos,
            'sliderdata' => $sliderInfos,
            'brandImgData' => $brandImgs,
            'topsellerdata' => $topSellerInfos,
            'recentlyViewedData' => $recentlyViewedInfos,
            'topNewData' => $topNewInfos
        ]);
    }
}
