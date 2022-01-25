<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function details(Request $request, $slug)
    {
        return view('pages.frontend.detail');
    }
}
