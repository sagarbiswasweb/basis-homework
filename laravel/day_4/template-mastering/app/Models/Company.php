<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public static $companyData = [
        "company_name"              => "Sagar's Shop",
        "company_logo"              => [
                                    "logo_1"    => "frontend-assets/img/logo.png",
                                    "logo_2"    => ""
                                    ],
        "company_facebook_link"     => "https://www.facebook.com",
        "company_twitter_link"      => "https://www.twitter.com",
        "company_youtube_link"      => "https://www.youtube.com",
        "company_linkedin_link"     => "https://www.linkedin.com",
        "company_address"           => "Kaoran Bazar, BDBL Bhaban, Dhaka",
        "company_description"       => "This is the best online shop where you can find your desired mobile, laptop, tv and other electronics and accessories in resonable price "
    ];

    public static function getCompanyData(){
        return self::$companyData;
    }
}
