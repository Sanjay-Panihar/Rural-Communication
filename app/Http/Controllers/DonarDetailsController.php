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
            'mobile_number'    => 'required|min:10',
            'doner_state'      => 'required',
            'pan_aadhar'        => 'required|min:12',
            'donar_email'      => 'required|email',
            'doner_country'    => 'required',
            'doner_city'       => 'required',
            'doner_pincode'    => 'required|min:6',
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
