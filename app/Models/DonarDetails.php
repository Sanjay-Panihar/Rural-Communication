<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonarDetails extends Model
{
    use HasFactory;
    protected $fillable = ['doner_nationality', 'donation_amount', 'mobile_number', 'doner_name', 'doner_email', 'doner_country', 'doner_state',
                          'doner_city', 'doner_pincode', 'doner_address', 'pan_aadhar', 'doner_nationality'];
}
