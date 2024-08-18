<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\MainProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function home(){
        $prapare_menu = $this->prapare_menu;
        return view('Front.index',compact('prapare_menu'));
    }

    public function contact_us() {
        $prapare_menu = $this->prapare_menu;
        return view('Front.contactus',compact('prapare_menu'));
    }

    public function about_us() {
        $prapare_menu = $this->prapare_menu;
        $getallactivebrands  = Brands::where('status',1)->pluck('name')->toArray();
        return view('Front.aboutus',compact('prapare_menu','getallactivebrands'));
    }

    public function product(Request $request,$slug) {
        $prapare_menu = $this->prapare_menu;
        $getUniqueProductBrands = Product::groupBy('product_make')->where('slug',$slug)->pluck('product_make')->toArray();
        $getProductData =  Product::where('slug',$slug)->get()->toArray();
        $getProductInfo = Product::where('slug',$slug)->select('product_name')->first();
        return view('Front.product',compact('prapare_menu','getUniqueProductBrands','getProductData','getProductInfo','slug'));
    }

    public function brandProduct(Request $request,$slug,$brand_name)  {
        $prapare_menu = $this->prapare_menu;
        $getUniqueProductBrands = Product::groupBy('product_make')->where('slug',$slug)->pluck('product_make')->toArray();
        $getUniqueProductBNumbers = Product::groupBy('product_number')->where('slug',$slug)->where('product_make',$brand_name)->pluck('product_number')->toArray();
        $getProductData = Product::where('slug',$slug)->where('product_make',$brand_name)->get()->toArray();
        $getProductInfo = Product::where('slug',$slug)->where('product_make',$brand_name)->select('product_name')->first();
        return view('Front.brand_product',compact('prapare_menu','getUniqueProductBNumbers','getUniqueProductBrands','getProductData','getProductInfo','slug','brand_name'));
    }
}
