<?php

namespace App\Http\Controllers;
use App\Models\DonarDetails;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class DonarDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donarDetails = DonarDetails::all();
        return view('admin.donar-details.index', compact('donarDetails'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "<pre>"; print_r('show'); die;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donarDetail = DonarDetails::findOrFail($id);
        return view('admin.donar-details.edit', compact('donarDetail'));
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
      $validator = $request->validate([
            'donar_name'       => 'required',
            'donation_amount'  => 'required',
            'mobile_number'    => 'required|numeric|digits:10',
            'doner_state'      => 'required',
            'pan_aadhar'        => 'required|digits:12',
            'donar_email'      => 'required|email',
            'doner_country'    => 'required',
            'doner_city'       => 'required',
            'doner_pincode'    => 'required|numeric|digits:6',
        ]);
        DonarDetails::findOrFail($id)->update([
          'donar_name'      => $request->doner_name,
          'donation_amount' => $request->donation_amount,
          'mobile_number'   => $request->mobile_number,
          'doner_state'     => $request->doner_state,
          'pan_aadhar'      => $request->pan_aadhar,
          'donar_email'     => $request->donar_email,
          'doner_city'      => $request->doner_city,
          'doner_country'   => $request->doner_country,
          'doner_pincode'   => $request->doner_pincode,
        ]);

        return back()->with('message', 'Donar details updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DonarDetails::findOrFail($id)->delete();
        return back()->with('message', 'Record deleted successfully.');
    }
}
