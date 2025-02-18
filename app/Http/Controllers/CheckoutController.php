<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class CheckoutController extends Controller
{
    public function charge(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            'amount' => $product->price * 100,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => $product->name,
        ]);

        return back()->with('success', 'Payment successful!');
    }
}

