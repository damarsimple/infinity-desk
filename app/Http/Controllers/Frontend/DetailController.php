<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(Request $request, $slug)
    {
        return view('pages.frontend.detail');
    }
}
