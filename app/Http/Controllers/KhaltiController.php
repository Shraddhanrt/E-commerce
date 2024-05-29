<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class KhaltiController extends Controller
{
    public function store()
    {
        try{
            $cart = Cart::where('user_id',Auth::user()->id)->first();
            $data = array(
                "amount" => $cart->total * 100,
            );
            
        }
        catch(Exception $e)
        {
            return back()->with('error',$e);
        }
    }
}