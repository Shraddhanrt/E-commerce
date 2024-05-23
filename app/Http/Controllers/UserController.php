<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use Validator;
use Hash;


class UserController extends Controller
{
    //
    public function index()
    {
        return view('index.login');
    }
    public function store(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'email'  => 'required|email|unique:users',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'password' => 'required|min:6'
            ]);
            $user = new User();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('home')->with('success', 'Logged in Successfully!');
        }
        catch (Exception $e)
        {
            Session::flash('error', $e);
            return redirect()->back()->withInput($request->input());
        }
    }

    public function getWishlist()
    {
        dd("wishlist");
    }
    public function getCart()
    {
        dd("cart");
    }
}
