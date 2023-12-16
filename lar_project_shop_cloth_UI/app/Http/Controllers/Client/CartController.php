<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('client.pages.cart.list');
    }
    public function checkout()
    {
        return view('client.pages.cart.checkout');
    }
}
