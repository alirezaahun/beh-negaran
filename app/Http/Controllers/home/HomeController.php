<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\bottomBannerResource;
use App\Http\Resources\V1\sliderResource;
use App\Http\Resources\V1\topBannerResource;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $main = Banner::where('type' , 'main')->where('is_active' , 1)->first();
        $sliders = Banner::where('type' , 'slider')->where('is_active' , 1)->orderBy('priority')->get();
        $logos = Banner::where('type' , 'logo')->where('is_active' , 1)->orderBy('priority')->get();
        // $products = Product::where('is_active' , 1)->get();
        // return (sliderResource::collection($sliders))->additional(['topBanners' => [topBannerResource::collection($TopBanners)] , 'bottomBanners' => [bottomBannerResource::collection($BottomBanners)]]);
        return view('home.index' , compact('main' , 'sliders' , 'logos'));

    }
}
