<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\PaymentDetails;
use App\Models\ContactForm;
use App\Models\DonarDetails;
use Response;

class DonateController extends Controller
{
    public function index()
    {
      return view('donate.index');
    }
    public function store(Request $request)
    {

      $validated = $request->validate([
        // 'doner_nationality' => 'required',
        'donation_base_amount' => 'required',
        'MobileNumber' => 'required',
        'doner_name' => 'required',
        'doner_email' => 'required',
        'doner_country' => 'required',
        'doner_state' => 'required',
        'doner_city' => 'required',
        'doner_pincode' => 'required',
        'doner_address' => 'required',
        'pan_aadhar' => 'required|min:12|numeric',
    ]);


      $donarDetails = DonarDetails::create([
        'doner_nationality' => "Indian",
        'donation_amount' => $request->donation_base_amount,
        'mobile_number' => $request->MobileNumber,
        'doner_name' => $request->doner_name,
        'doner_email' => $request->doner_email,
        'doner_country' => $request->doner_country,
        'doner_state' => $request->doner_state,
        'doner_city' => $request->doner_city,
        'doner_pincode' => $request->doner_pincode,
        'doner_address' => $request->doner_address,
        'pan_aadhar' => $request->pan_aadhar,
    ]);

    $donarDetails = DonarDetails::latest('id')->first();
    $donarId = $donarDetails->id;

    $amount = $request->donation_base_amount * 100;
    $receipt = rand(1111111111, 9999999999);
    $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

    $order = $api->order->create([
      'receipt' => $receipt,
      'amount' => $amount,
      'currency' => 'INR',
      'notes'=> array('order_id'=> $donarId)
    ]);

    return response()->json([ 'status' => 'success', 'order_id' => $order['id'], 'receipt' => $receipt,
    'amount' => $amount, 'donar_id' => $donarId ]);


    }
    public function paymentSuccess(Request $request)
    {
    $paymentDetails =  PaymentDetails::create([
      'donar_id'            => $request->donar_id,
      'razorpay_payment_id' => $request->razorpay_payment_id,
      'razorpay_signature'  => $request->razorpay_signature,
      'razorpay_order_id'   => $request->razorpay_order_id
    ]);
      return view('donate.payment-success');
    }
    public function contactForm(Request $request)
    {
      $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'mobile_number' => 'required|min:10',
        'message' => 'required|min:20',
    ]);

    $contactForm =  ContactForm::create([
      'name'            => $request->name,
      'email'           => $request->email,
    'mobile_number'     => $request->mobile_number,
      'message'         => $request->message
    ]);
      return redirect()->back()->with('success', 'Message sent successfully.');
    }

}
