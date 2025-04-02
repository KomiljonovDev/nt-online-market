<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Team;
use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('home', $data);
    }
    public function show(string $id)
    {
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('product-filter', $data);
    }

    public function about()
    {
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('pages.about', $data);
    }
    public function contact(){
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('pages.contact', $data);
    }
    public function cart(){
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('pages.cart', $data);
    }
    public function checkout(){
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('pages.checkout', $data);
    }
    public function compare(){
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('pages.compare', $data);
    }
    public function faq(){
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('pages.faq', $data);
    }
    public function offers(){
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('pages.offers', $data);
    }
    public function terms(){
        $data = (new HomeService)->getHomeData(); // Static chaqirish
        return view('pages.terms', $data);
    }
}
