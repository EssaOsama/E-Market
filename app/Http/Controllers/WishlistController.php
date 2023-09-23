<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function addToWishlist(Request $request, Product $product)
    {
        $user = $request->user();

        if (!$user->wishlists->contains($product)) {

            $wishlistItem = new Wishlist([
                'user_id' => $user->id,
                'product_id' => $product->id,
            ]);
            $wishlistItem->save();
        }
        return redirect()->route('wishlist')->with('success', 'added successfully');
    }

     public function destroy($id)
    {
        Wishlist::destroy($id);
        return redirect()->back()->with('success', __('deleted successfully'));
    }

}