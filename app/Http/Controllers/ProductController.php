<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {
        return view("welcome");
    }
    public function about()
    {
        return view("index.about");
    }
    public function shop()
    {
        return view("index.shop");
    }
    public function features()
    {
        return view("index.feature");
    }
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
}
