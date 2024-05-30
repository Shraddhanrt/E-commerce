<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use App\Models\Customer;
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
        return view('index.wishlist');
    }
    public function getCart()
    {
        if (Auth::user())
        {
            $total = isset(Cart::where('user_id', Auth::user()->id)->first()->total_quantity);
        }
        $total = NULL;
        $products = Cart::where('user_id', Auth::user()->id)
            ->select('cart_items.quantity', 'cart_items.total', 'products.name', 'products.cost', 'products.image')
            ->leftJoin('cart_items', 'carts.id', 'cart_items.cart_id')
            ->leftJoin('products', 'products.id', 'cart_items.product_id')
            ->get();
        // dd($products);
        $subtotal = $products->sum('total');

        $customer = Customer::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();

        return view("index.feature", compact('total', 'products', 'customer', 'subtotal'));
    }
    public function customerStore(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'email'  => 'required|email|unique:users',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'password' => 'required|min:6'
            ]);
            $customer = new Customer();
            $customer->user_id = Auth::user()->id;
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->save();
            Session::flash('success', 'Customer Info Saved Successfully');
            return redirect()->back();
        }
        catch (Exception $e)
        {
            Session::flash('error', $e);
            return redirect()->back()->withInput($request->input());
        }
    }


    public function cartStore($id)
    {
        try
        {
            $cart = Cart::where('user_id', Auth::user()->id)->first();
            $product = Product::where('id', $id)->first();
            if (!$cart)
            {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->total = $product->cost;
                $cart->total_quantity = 1;
                $cart->save();
            }
            else
            {
                $cart->total = $cart->total + $product->cost;
                $cart->total_quantity = $cart->total_quantity + 1;
                $cart->save();
            }
            $check = CartItem::where('cart_id', $cart->id)->where('product_id', $id)->first();
            if ($check)
            {
                $check->quantity = $check->quantity + 1;
                $check->total = $check->quantity * $product->cost;
                $check->save();
            }
            else
            {
                $cart_item = new CartItem();
                $cart_item->cart_id = $cart->id;
                $cart_item->product_id = $id;
                $cart_item->quantity = 1;
                $cart_item->total = $product->cost;
                $cart_item->save();
            }
            return redirect()->back()->with('success', 'Added to cart successfully!!');
        }
        catch (Exception $e)
        {
            return redirect()->back()->with('error', $e);
        }
    }
}
