<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\MainProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected $prapare_menu;
    function __construct()
    {
        $this->prapare_menu = Cache::get('MainProduct');
        if(empty($this->prapare_menu)){
            $this->prapare_menu = MainProduct::where('status',1)->pluck('product_name','sr')->toArray();
            Cache::put('MainProduct',$this->prapare_menu,1440);
        }

        return $this->prapare_menu;
    }
}
