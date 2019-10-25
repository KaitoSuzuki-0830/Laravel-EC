<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Session;
use Cart;
use App\Mail\PurchaseSuccessful;
use Illuminate\Support\Facades\Mail;


class CheckoutController extends Controller
{
    public function index(){
        return view('checkout');
    }

    public function payment(){
        // set the stripe secret api key
        Stripe::setApiKey("sk_test_UEqp4NMzfktQXsr4Tvp6yrR400oKsFFHIR");

        // get the token and make change
        $token = request()->stripeToken;

        $charge = Charge::create([
            'amount' => Cart::total()*100,
            'currency' => 'usd',
            'description' => 'laravel stripe payment',
            'source' => $token,
        ]);

        //Session success message
        Session::flash('success','Purchased successfully');

        //destroy the cart
        Cart::destroy();

        Mail::To(request()->stripeEmail)->send(new PurchaseSuccessful);
        return redirect('/');
    }
}
