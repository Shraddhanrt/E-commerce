<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;
use Auth;


use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {

        $products = Product::where('active', 1)->get();
        // dd(Auth::id());
        $wishlists = Wishlist::where('user_id', Auth::id())->get();
        // dd($wishlists);

        $featured = Product::where('active', 1)->where('featured', 1)->get();
        if (Auth::user())
        {
            $total = isset(Cart::where('user_id', Auth::user()->id)->first()->total_quantity);
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->count();
            // dd($wishlist);
        }
        $total = NULL;
        $wishlist = NULL;
        return view("welcome", compact('products', 'featured', 'total', 'wishlists', 'wishlist'));
    }
    public function about()
    {
        return view("index.about");
    }
    public function shop()
    {
        $products = Product::all();
        $wishlists = Wishlist::all();

        return view("index.shop", compact('products', 'wishlists'));
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
