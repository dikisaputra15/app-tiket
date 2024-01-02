<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //

    public function addCart(Request $request)
    {
        $tiket = Tiket::where('id', $request->id)->first();
        // dd($tiket->id);
        Cart::add($tiket->id, $tiket->kategori, 1, $tiket->harga, 0);
        return view('livewire.cart.item-cart');
    }
}
