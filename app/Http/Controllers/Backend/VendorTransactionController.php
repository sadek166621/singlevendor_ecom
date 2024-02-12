<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\VendorTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorTransactionController extends Controller
{
    public function index()
    {
        if(Auth::guard('admin')->user()->role ==1){
            $items = VendorTransaction::latest()->get();
        }
        else{
            $vendor = Vendor::where('user_id', Auth::guard('admin')->user()->id)->first();
            $items = VendorTransaction::where('vendor_id', $vendor->id)->latest()->get();
        }
        return view('backend.transaction.index', compact('items'));
    }
}
