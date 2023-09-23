<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function ecommerce()
    {
        return view('ecommerce');
    }
    public function shop()
    {
        $categories = Category::get(['name', 'id']);
        $products = Product::paginate(9);
        return view('shop', compact('categories', 'products'));
    }
    public function details()
    {
        return view('details');
    }
    public function wishlist(Request $request)
    {
        $user = $request->user();
        $wishlistItems = $user->wishlists;
        return view('wishlist', compact('wishlistItems'));
    }
    public function checkout()
    {
        return view('checkout');
    }
}