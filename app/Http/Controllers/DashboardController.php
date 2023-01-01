<?php

namespace App\Http\Controllers;
use App\Models\DonarDetails;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
      $donarDetails = DonarDetails::all();
      return view('admin.home.dashboard', compact('donarDetails'));
    }
}
