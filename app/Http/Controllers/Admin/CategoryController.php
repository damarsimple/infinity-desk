<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('categories')->get();

        return view('pages.admin.category', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = array('title' => 'Form Kategori');
        return view('categories.create', $data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'code' => 'required',
                'name' => 'required',
                'total_product' => 'required',
            ]
        )
            ->validate();

        DB::table('categories')->insert(
            [
                'code' => $request->code,
                'name' => $request->name,
                'total_product' => $request->total_product,
            ]
        );

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'admin/category/category-list'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $no
     * @return \Illuminate\Http\Response
     */
    public function show($no)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $no
     * @return \Illuminate\Http\Response
     */
    public function edit($no)
    {
        $data = array('title' => 'Form Edit Kategori');
        return view('categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $no
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'code' => 'required',
                'name' => 'required',
                'total-product' => 'required',
            ]
        )
            ->validate();

        DB::table('category')->insert(
            [
                'code' => $request->code,
                'name' => $request->name,
                'total_product' => $request->total_product,
            ]
        );

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'admin/category/category-list'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $no
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $no)
    {
        DB::table('Categories')->where('idcategory', $no)->delete();

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'admin/category/category-list'
        );
    }
}
