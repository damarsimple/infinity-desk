<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function details(Request $request, $slug)
    {
        $current_product = DB::table('products')->where('id', $slug)->get();
        return view('pages.frontend.detail', compact('current_product'));
    }
}
