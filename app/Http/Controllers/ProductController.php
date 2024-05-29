<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Auth;


use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {

        $products = Product::where('active', 1)->get();
        $featured = Product::where('active', 1)->where('featured', 1)->get();
        $total = Cart::where('user_id', Auth::user()->id)->first()->total_quantity ?? NULL;
        return view("welcome", compact('products', 'featured', 'total'));
    }
    public function about()
    {
        return view("index.about");
    }
    public function shop()
    {
        return view("index.shop");
    }
    // public function features()
    // {
    //     return view("index.feature");
    // }
    public function contact()
    {
        return  view("index.contact");
    }
    public function blog()
    {
        return  view("index.blog");
    }
    public function showDetails()
    {
        return  view("index.continuereading");
    }
    public function newNavbar()
    {
        return view('index.navbar2');
    }
    public function productDetails()
    {
        return view('index.cart');
    }
}