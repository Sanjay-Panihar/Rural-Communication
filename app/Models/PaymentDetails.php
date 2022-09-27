<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    use HasFactory;

    protected $fillable = ['donar_id','razorpay_payment_id', 'razorpay_signature' , 'razorpay_order_id'];
}
