<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category($id)
    {
        return view('client.pages.product.category');
    }
    public function detail($id)
    {
        return view('client.pages.product.detail');
    }
}
