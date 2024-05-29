<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Cart;
use Auth;
use Illuminate\Support\Facades\Redirect;
use DB;


use Exception;

class KhaltiController extends Controller
{
    public function store()
    {
        try
        {
            $cart = Cart::where('user_id', Auth::user()->id)->first();
            $customer = Customer::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();
            $data =
                array(
                    "amount" => $cart->total,
                    "purchase_order_id" => $cart->id,
                    "return_url" => route('khalti.response'),
                    "website_url" => route('home'),
                    "purchase_order_name" => $customer->name,
                    "customer_info" => array(
                        "name" => $customer->name,
                        "email" => Auth::user()->email,
                        "phone" => $customer->phone,

                    )

                );
            // dd($data);
            $url = 'https://a.khalti.com/api/v2/epayment/initiate/';
            // dd($data);
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
            curl_setopt($curl, CURLOPT_ENCODING, "");
            curl_setopt($curl, CURLOPT_AUTOREFERER, true);
            $headers = array();
            $headers = [
                'Authorization: key live_secret_key_68791341fdd94846a146f0457ff7b455',
                'Accept: application/json'
            ];
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $response = curl_exec($curl);
            curl_close($curl);
            $responseHeaders = curl_getinfo($curl);
            // dd($responseHeaders);
            // dd($response);
            // Redirect the user to the eSewa payment page
            $data = json_decode($response, true);
            return Redirect::intended($data['payment_url']);
        }
        catch (Exception $e)
        {
            return back()->with('error', $e);
        }
    }

    public function response(Request $request)
    {
        try
        {
            $data = $request->all();
            $r = array(
                "pidx" => $data['pidx'],
            );
            $url = 'https://a.khalti.com/api/v2/epayment/lookup/';
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $r);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
            curl_setopt($curl, CURLOPT_ENCODING, "");
            curl_setopt($curl, CURLOPT_AUTOREFERER, true);
            $headers = array();
            $headers = [
                'Authorization: key live_secret_key_68791341fdd94846a146f0457ff7b455',
                'Accept: application/json'
            ];
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $response = curl_exec($curl);
            curl_close($curl);
            $responseHeaders = curl_getinfo($curl);
            $final_data = json_decode($response, true);
            // dd($final_data);

            if ($final_data['status'] == 'Completed')
            {
                Cart::where('user_id', Auth::user()->id)->delete();
                return Redirect::route('home')->with('success', 'Payment Successful');
            }
            else
            {
                return Redirect::route('home')->with('error', 'Payment Failed');
            }
        }
        catch (Exception $e)
        {
            return Redirect::route('home')->with('error', $e->getmessage());
        }
    }
}
