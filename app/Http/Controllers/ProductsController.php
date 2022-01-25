<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product(Request $request)
    {
        $products = Product::with('seller')->paginate(12);

        return view('pages.frontend.product', [
            'products' => $products,
        ]);
    }
}
