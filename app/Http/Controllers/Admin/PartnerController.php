<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {
        $datas = DB::table('partners')->get();

        return view('pages.admin.patner', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Partner;
        return view('patners.create', compact('model'));
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
                'company' => 'required',
                'responsible_person' => 'required',
                'role' => 'required',
                'contact_person' => 'required',
                'email' => 'required',
                'country' => 'required',
                'status' => 'required',
            ]
        )
            ->validate();

        DB::table('partners')->insert(
            [
                'company' => $request->company,
                'responsible_person' => $request->responsible_person,
                'role' => $request->role,
                'contact_person' => $request->contact_person,
                'email' => $request->email,
                'country' => $request->country,
                'status' => $request->status,
            ]
        );

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'admin/partner/partner-data'
        );
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
        $model = DB::table('partners')->where('no', $no)->first();

        return view('partners.edit', compact('model'));
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
                'company' => 'required',
                'responsible_person' => 'required',
                'role' => 'required',
                'contact_person' => 'required',
                'email' => 'required',
                'country' => 'required',
                'status' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'admin/partner/partner-data'
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
        DB::table('Partners')->where('idpartner', $no)->delete();

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'admin/partner/partner-data'
        );
    }
}
