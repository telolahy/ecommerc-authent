<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    public function index(){
        return view('boutiques.index');
    }
    public function about(){
        return view('boutiques.about');
    }
    public function blog(){
        return view('boutiques.blog');
    }
    public function contact(){
        return view('boutiques.contact');
    }
    public function product(){
        return view('boutiques.product');
    }




    public function blog_detail(){
        return view('boutiques.index');
    }
    public function home_02(){
        return view('boutiques.home-02');
    }
    public function home_03(){
        return view('boutiques.home-03');
    }
    public function product_detail(){
        return view('boutiques.product-detail');
    }
    public function shoping_cart(){
        return view('boutiques.shoping-cart');
    }
}
