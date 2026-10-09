<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $productData = [
        [
            "img"           => "frontend-assets/img/product-1.jpg",
            "des"           => "Samsung Galaxy s5- 2015",
            "new_price"     => "$70000000000.00",
            "prev_price"    => "$100000000.00"
        ],
        [
            "img"           => "frontend-assets/img/product-2.jpg",
            "des"           => "Nokia Lumia 1320",
            "new_price"     => "$899011.00",
            "prev_price"    => "$9995454.00"
        ],
        [
            "img"           => "frontend-assets/img/product-3.jpg",
            "des"           => "LG Leon 2015",
            "new_price"     => "$40075.00",
            "prev_price"    => "$4256565.00"
        ],
        [
            "img"           => "frontend-assets/img/product-4.jpg",
            "des"           => "Sony microsoft",
            "new_price"     => "$20445240.00",
            "prev_price"    => "$22424545.00"
        ],
        [
            "img"           => "frontend-assets/img/product-5.jpg",
            "des"           => "iPhone 6",
            "new_price"     => "$1245400.00",
            "prev_price"    => "$1344555.00"
        ],
        [
            "img"           => "frontend-assets/img/product-6.jpg",
            "des"           => "Samsung gallaxy note 4",
            "new_price"     => "$404540.00",
            "prev_price"    => ""
        ]

    ];

    public static $sliderData = [
        [
            "img" => "frontend-assets/img/h4-slide.png",
            "name" => [
                "iPhone",
                "6",
                "Plus"
            ],
            "des" => "Dual SIM"
        ],
        [
            "img" => "frontend-assets/img/h4-slide2.png",
            "name" => [
                "by one, get one",
                "50%",
                "off"
            ],
            "des" => "school supplies & backpacks.*"
        ],
        [
            "img" => "frontend-assets/img/h4-slide3.png",
            "name" => [
                "Apple",
                "Store",
                "Ipoduuuuu"
            ],
            "des" => "Select Item"
        ],
        [
            "img" => "frontend-assets/img/h4-slide4.png",
            "name" => [
                "Apple",
                "Store",
                "Ipod"
            ],
            "des" => "& Phone"
        ]
    ];


    public static $brandImg = [
        "frontend-assets/img/brand1.png",
        "frontend-assets/img/brand2.png",
        "frontend-assets/img/brand3.png",
        "frontend-assets/img/brand4.png",
        "frontend-assets/img/brand5.png",
        "frontend-assets/img/brand6.png",
    ];

    public static $topSeller = [
        [
            "img"           => "frontend-assets/img/product-thumb-1.jpg",
            "des"           => "Sony Smart TV - 2015",
            "new_price"     => "$400.00",
            "prev_price"    => "$425.00"
        ],
        [
            "img"           => "frontend-assets/img/product-thumb-2.jpg",
            "des"           => "Apple new mac book 2015",
            "new_price"     => "$44400.00",
            "prev_price"    => "$4454425.00"
        ],
        [
            "img"           => "frontend-assets/img/product-thumb-3.jpg",
            "des"           => "Apple new i phone 6",
            "new_price"     => "$4454545400.00",
            "prev_price"    => "$4444425.00"
        ],
    ];

    public static $recentlyViewed = [
        [
            "img"           => "frontend-assets/img/product-thumb-4.jpg",
            "des"           => "Sony playstation microsoft",
            "new_price"     => "$44400.00",
            "prev_price"    => "$442222225.00"
        ],
        [
            "img"           => "frontend-assets/img/product-thumb-1.jpg",
            "des"           => "Sony Smart Air Condtion",
            "new_price"     => "$424.00",
            "prev_price"    => "$4545.00"
        ],
        [
            "img"           => "frontend-assets/img/product-thumb-2.jpg",
            "des"           => "Samsung gallaxy note 4",
            "new_price"     => "$55.00",
            "prev_price"    => "$11.00"
        ],
    ];

    public static $topNew = [
        [
            "img"           => "frontend-assets/img/product-thumb-3.jpg",
            "des"           => "Apple new i phone 6",
            "new_price"     => "$4.00",
            "prev_price"    => "$6.00"
        ],
        [
            "img"           => "frontend-assets/img/product-thumb-4.jpg",
            "des"           => "Samsung gallaxy note 4",
            "new_price"     => "$77.00",
            "prev_price"    => "$88.00"
        ],
        [
            "img"           => "frontend-assets/img/product-thumb-1.jpg",
            "des"           => "Sony playstation microsoft",
            "new_price"     => "$0.00",
            "prev_price"    => "$8888.00"
        ],
    ];

    public static function getProductData(){
        return self::$productData;
    }

    public static function getSliderData(){
        return self::$sliderData;
    }

    public static function getBrandImg(){
        return self::$brandImg;
    }

    public static function getTopSeller(){
        return self::$topSeller;
    }

    public static function getRecentlyViewed(){
        return self::$recentlyViewed;
    }

    public static function getTopNew(){
        return self::$topNew;
    }
}
