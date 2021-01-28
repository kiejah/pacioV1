<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    //
    protected $fillable= [
        'user_id',
        'company_id',
        'parcelTrackerCode',
        'MerchantRequestID',
        'phoneNumber',
        'CheckoutRequestID',
        'ResultCode',
        'ResponseDescription',
        'ResultDesc',
        'Amount',
        'MpesaReceiptNumber',
        'paymentMethod',
    ];
}
