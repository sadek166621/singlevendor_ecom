<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorPayment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function withdrawRequest()
    {
        return $this->belongsTo(WithdrawRequest::class, 'withdrawal_request_id');
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }
}
