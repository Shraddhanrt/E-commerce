<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Exception;
use Auth;
use Session;

class AdminAuthController extends Controller
{

    public function index()
    {
        try
        {
            if (Auth::check())
            {
                if (strtoupper(Auth::User()->role) == 'admin')
                {
                    return redirect()->route('admin.dashboard.index');
                }
            }

            return view('admin.login.index');
        }
        catch (Exception $e)
        {
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function login(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails())
            {
                Session::flash('warning', 'Email and password are required.');
                return redirect()->back()
                    ->withInput($request->input())
                    ->withErrors($validator->errors());
            }
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                if (Auth::User()->status != 1)
                {
                    Auth::logout();
                    Session::flash('error', 'Your account is not activated yet.');
                    return redirect()->back()->withInput($request->input());
                }

                Session::flash('success', 'Login Success.');

                if (strtoupper(Auth::User()->role) == 'ADMIN')
                {
                    return redirect()->route('admin.dashboard.index');
                }
                else
                {
                    return redirect()->route('home');
                }
            }
            else
            {
                Session::flash('error', 'Invalid credentials Given.');
                return redirect()->back()->withInput($request->input());
            }
        }
        catch (Exception $e)
        {
            Session::flash('error', 'Something went wrong. Please try again !');
            return redirect()->back()->withInput($request->input())
                ->withErrors($validator->errors());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flash('success', 'Logged out Succesfully.');
        return redirect()->route('admin.login.index');
    }
}
