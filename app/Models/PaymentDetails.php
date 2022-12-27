<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentDetails extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['donar_id','razorpay_payment_id', 'razorpay_signature' , 'razorpay_order_id'];
}
