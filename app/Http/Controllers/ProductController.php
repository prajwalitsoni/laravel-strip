<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
    public function purchase(Request $request, $id)
{
    $product = \App\Models\Product::findOrFail($id);
    $user = $request->user();

    try {
        $charge = $user->charge($product->price * 100, $request->payment_method);
        return redirect()->route('products.index')->with('success', 'Payment successful!');
    } catch (\Exception $e) {
        return back()->withErrors(['error' => $e->getMessage()]);
    }
}
}
