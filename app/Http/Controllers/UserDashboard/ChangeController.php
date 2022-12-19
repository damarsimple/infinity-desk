<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\Change;
use App\Models\Profile;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $curr_user = DB::table('users')->where('email', $user->email)->get();
        return view('pages.user.index', compact('curr_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_address()
    {
        $alamat = new Change;
        return view('addresses.create', compact('alamat'));
    }
    public function create_card()
    {
        $card = new Change;
        return view('cards.create', compact('card'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_address(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'receiver_name' => 'required',
                'phone_number' => 'required',
                'address_label' => 'required',
                'city_district ' => 'required',
                'zip_code ' => 'required',
                'full address' => 'required',
                'country' => 'required',
                'note',
            ]
        )
            ->validate();

        DB::table('addresses')->insert(
            [
                'receiver_name' => $request->receiver_name,
                'phone_number' => $request->phone_number,
                'address_label' => $request->address_label,
                'city_district' => $request->city_district,
                'zip_code' => $request->city_district,
                'full_address' => $request->full_address,
                'note' => $request->note,
            ]
        );

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function store_card(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'bank_name' => 'required',
                'account_number' => 'required',
                'card_holder' => 'required',
            ]
        )
            ->validate();

        DB::table('cards')->insert(
            [
                'receiver_name' => $request->receiver_name,
                'phone_number' => $request->phone_number,
                'address_label' => $request->address_label,
            ]
        );

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Change  $change
     * @return \Illuminate\Http\Response
     */
    public function show(Change $change)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Change  $change
     * @return \Illuminate\Http\Response
     */
    public function edit_name($no)
    {
        $model = DB::table('users')->where('no', $no)->first();

        return view('users.edit_name', compact('model'));
    }
    public function edit_email($no)
    {
        $model = DB::table('users')->where('no', $no)->first();

        return view('users.edit_email', compact('model'));
    }
    public function edit_adress($no)
    {
        $model = DB::table('addresses')->where('no', $no)->first();

        return view('addresses.edit_address', compact('model'));
    }
    public function edit_bd($no)
    {
        $model = DB::table('profiles')->where('no', $no)->first();

        return view('profiles.edit_bd', compact('model'));
    }
    public function edit_sex($no)
    {
        $model = DB::table('profiles')->where('no', $no)->first();

        return view('profiles.edit_bd', compact('model'));
    }
    public function edit_pn($no)
    {
        $model = DB::table('profiles')->where('no', $no)->first();

        return view('profiles.edit_profiles', compact('model'));
    }
    public function edit_language($no)
    {
        $model = DB::table('profiles')->where('no', $no)->first();

        return view('profiles.edit_language', compact('model'));
    }
    public function edit_country($no)
    {
        $model = DB::table('profiles')->where('no', $no)->first();

        return view('profiles.edit_country', compact('model'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Change  $change
     * @return \Illuminate\Http\Response
     */
    public function update_name(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function update_email(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'email' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function update_address(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'adddress_label' => 'required',
                'receiver' => 'required',
                'phone_number' => 'required',
                'city_district' => 'required',
                'zip_code' => 'required',
                'full_address' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function update_bd(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'birth_date' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function update_sex(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'sex' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function update_pn(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'phone_number' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function update_country(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'country' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function update_language(Request $request, $no)
    {
        Validator::make(
            $request->all(),
            [
                'language' => 'required',
            ]
        )
            ->validate();


        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Change  $change
     * @return \Illuminate\Http\Response
     */
    public function destroy_address(Request $request, $no)
    {
        DB::table('Addresses')->where('id_address', $no)->delete();

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
    public function destroy_card(Request $request, $no)
    {
        DB::table('Cards')->where('id_card', $no)->delete();

        return redirect(
            $request->has('redirectTo') ? $request->get('redirectTo') : 'dashboard/user/profile/setting'
        );
    }
}
