<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\StoreAddressRequest;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $provinces = \Indonesia::allProvinces();
        $addresses = Address::where('user_id', Auth::user()->id)->orderBy('is_default', 'desc')->get();

        return view('user.address', [
            'provinces' => $provinces,
            'addresses' => $addresses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressRequest $request)
    {
        $user = User::find($request->user_id);

        if (!$user || $user->id != Auth::user()->id) {
            return redirect()->back()->with('error', 'User not found');
        } else {

            $data = $request->all();

            Address::create($data);

            return redirect()->back()->with('success', 'Address added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $address = Address::findOrfail($id);

        if (!$address || $address->user_id != Auth::user()->id) {
            return redirect()->back()->with('error', 'Address not found');
        } else {
            $address->delete();
            return redirect()->back()->with('success', 'Address deleted');
        }
    }

    /**
     * Update the is_default resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function isDefault($id)
    {
        $address = Address::find($id);

        if (!$address || $address->user_id != Auth::user()->id) {
            return redirect()->back()->with('error', 'Address not found');
        } else {
            $address->is_default = true;
            $address->save();

            $addresses = Address::where('user_id', Auth::user()->id)->where('id', '!=', $id)->get();

            foreach ($addresses as $address) {
                $address->is_default = false;
                $address->save();
            }

            return redirect()->back()->with('success', 'Address updated');
        }
    }
}
