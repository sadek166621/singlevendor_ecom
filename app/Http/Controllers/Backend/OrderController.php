<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use App\Models\VendorComission;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\Address;
use App\Models\District;
use App\Models\Upazilla;
use App\Models\Shipping;
use Session;
use PDF;
use function Symfony\Component\VarDumper\Dumper\esc;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date = $request->date;
        $delivery_status = null;
        $payment_status = null;

        //dd($request);

        //$orders = Order::orderBy('id', 'desc');

        // if ($request->delivery_status != null) {
        //     $orders = $orders->where('delivery_status', $request->delivery_status);
        //     // dd($orders);
        //     $delivery_status = $request->delivery_status;
        // }

        // if ($request->payment_status != null) {
        //     $orders = $orders->where('payment_status', $request->payment_status);
        //     $payment_status = $request->payment_status;
        // }

        // if ($date != null) {
        //     $orders = $orders->where('created_at', '>=', date('Y-m-d', strtotime(explode(" - ", $date)[0])))->where('created_at', '<=', date('Y-m-d', strtotime(explode(" - ", $date)[1])));
        // }

        if($request->delivery_status != null && $request->payment_status != null && $date != null){

            $orders = Order::where('created_at', '>=', date('Y-m-d', strtotime(explode(" - ", $date)[0])))->where('created_at', '<=', date('Y-m-d', strtotime(explode(" - ", $date)[1])))->where('delivery_status', $request->delivery_status)->where('payment_status', $request->payment_status);

            $delivery_status = $request->delivery_status;
            $payment_status = $request->payment_status;

        }else if($request->delivery_status == null && $request->payment_status == null && $date == null){
            $orders = Order::orderBy('id', 'desc');
        }else{
            if($request->delivery_status == null){
                if($request->payment_status != null && $date != null){
                    $orders = Order::where('created_at', '>=', date('Y-m-d', strtotime(explode(" - ", $date)[0])))->where('created_at', '<=', date('Y-m-d', strtotime(explode(" - ", $date)[1])))->where('payment_status', $request->payment_status);
                    $payment_status = $request->payment_status;
                }else if($request->payment_status == null && $date != null){
                    $orders = Order::where('created_at', '>=', date('Y-m-d', strtotime(explode(" - ", $date)[0])))->where('created_at', '<=', date('Y-m-d', strtotime(explode(" - ", $date)[1])));
                }else{
                    $orders = Order::where('payment_status', $request->payment_status);
                    $payment_status = $request->payment_status;
                }
            }else if($request->payment_status == null){
                if($request->delivery_status != null && $date != null){
                    $orders = Order::where('created_at', '>=', date('Y-m-d', strtotime(explode(" - ", $date)[0])))->where('created_at', '<=', date('Y-m-d', strtotime(explode(" - ", $date)[1])))->where('delivery_status', $request->delivery_status);
                    $delivery_status = $request->delivery_status;
                }else if($request->delivery_status == null && $date != null){
                    $orders = Order::where('created_at', '>=', date('Y-m-d', strtotime(explode(" - ", $date)[0])))->where('created_at', '<=', date('Y-m-d', strtotime(explode(" - ", $date)[1])));
                }else{
                    $orders = Order::where('delivery_status', $request->delivery_status);
                    $delivery_status = $request->delivery_status;
                }
            }else if($request->date == null){
                if($request->delivery_status != null && $request->payment_status != null){
                    $orders = Order::where('delivery_status', $request->delivery_status)->where('payment_status', $request->payment_status);
                    $delivery_status = $request->delivery_status;
                    $payment_status = $request->payment_status;
                }else if($request->delivery_status == null && $request->payment_status != null){
                    $orders = Order::where('payment_status', $request->payment_status);
                    $payment_status = $request->payment_status;
                }else{
                    $orders = Order::where('delivery_status', $request->delivery_status);
                    $delivery_status = $request->delivery_status;
                }
            }
        }

        //dd($request);

        $orders = $orders->paginate(15);
        return view('backend.sales.all_orders.index', compact('orders', 'delivery_status', 'date','payment_status'));
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
        $order = Order::findOrFail($id);
        $shippings = Shipping::where('status', 1)->get();

        return view('backend.sales.all_orders.show', compact('order', 'shippings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
//        return $request;
        $this->validate($request,[
            'payment_method' => 'required',
        ]);
        $order = Order::findOrFail($id);

        $order->division_id = $request->division_id;
        $order->district_id = $request->district_id;
        $order->upazilla_id = $request->upazilla_id;
        $order->payment_method = $request->payment_method;
        $order->payment_status = $request->status;

        $discount_total = ($order->sub_total - $request->discount);
        $total_ammount = ($discount_total + $request->shipping_charge);

        Order::where('id', $id)->update([
            'shipping_charge'   => $request->shipping_charge,
            'discount'          => $request->discount,
            'grand_total'       => $total_ammount,
        ]);

        $order->save();

        Session::flash('success','Admin Orders Information Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        $notification = array(
            'message' => 'Order Deleted Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    /*================= Start update_payment_status Methoed ================*/
    public function update_payment_status(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
        $order->payment_status = $request->status;
        $order->save();

        if($order->user_id != 1){
            $this->addPoints($request->order_id);
            $this->addCommission($request->order_id);
        }

        return response()->json(['success'=> 'Payment status has been updated']);

        // dd($order);
    }
    public function addPoints($id)
    {
        $order = Order::findOrFail($id);
        $user = User::findOrfail($order->user_id);
        if ($user->role == 3){
            $orderedProducts = OrderDetail::where('order_id', $order->id)->get();
            $point = 0;
            foreach ($orderedProducts as $item){
                $point += $item->product->points;
            }
            if($order->payment_status == 1){
                $user->points += $point;
            }
            else{
                $user->points -= $point;
            }
            $user->save();
        }
    }

    public function addCommission($id)
    {

        $orderedProducts = OrderDetail::where('order_id', $id)->get();
        $order = Order::findOrFail($id);

        foreach ($orderedProducts as $item){
            if($item->product->vendor_id != 0){
                $vendor = Vendor::findOrFail($item->product->vendor_id);
                if($vendor->commission != 0){
                    $vendorCommission = ($item->qty * $item->price)*($vendor->commission/100);
                    $adminCommission = ($item->qty * $item->price) - $vendorCommission;
                    if($order->payment_status == 1){
                        $vendor->balance += $vendorCommission;

                        $commission = new VendorComission();
                        $commission->order_id = $id;
                        $commission->vendor_id = $vendor->id;
                        $commission->vendor_amount = $vendorCommission;
                        $commission->admin_commission = $adminCommission;
                        $commission->month = date('m');
                        $commission->year = date('Y');
                        $commission->save();
                    }
                    else{
                        $vendor->balance -= $vendorCommission;
                        VendorComission::where('order_id', $id)->delete();

                    }

                    $vendor->save();

                }

            }
        }
    }



    /*================= Start update_delivery_status Methoed ================*/
    public function update_delivery_status(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
        $order->delivery_status = $request->status;
        $order->save();

        return response()->json(['success'=> 'Delivery status has been updated']);

    }



    /*================= Start admin_user_update Methoed ================*/
    public function admin_user_update(Request $request, $id)
    {
        $user = Order::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // dd($user);

        Session::flash('success','Customer Information Updated Successfully');
        return redirect()->back();
    }

    /* ============= Start getdivision Method ============== */
    public function getdivision($division_id){
        $division = District::where('division_id', $division_id)->orderBy('district_name_en','ASC')->get();

        return json_encode($division);
    }
    /* ============= End getdivision Method ============== */

    /* ============= Start getupazilla Method ============== */
    public function getupazilla($district_id){
        $upazilla = Upazilla::where('district_id', $district_id)->orderBy('name_en','ASC')->get();

        return json_encode($upazilla);
    }
    /* ============= End getupazilla Method ============== */

    /* ============= Start invoice_download Method ============== */
    // public function invoice_download($id){
    //     $order = Order::findOrFail($id);

    //     $pdf = PDF::loadView('backend.invoices.invoice',compact('order'))->setPaper('a4')->setOptions([
    //             'tempDir' => public_path(),
    //             'chroot' => public_path(),
    //     ]);
    //     return $pdf->download('invoice.pdf');
    // } // end method

    /* ============= Start invoice_download Method ============== */
    public function invoice_download($id){
        $order = Order::findOrFail($id);
        //dd(app('url')->asset('upload/abc.png'));
        $pdf = PDF::loadView('backend.invoices.invoice',compact('order'))->setPaper('a4');
        return $pdf->download('invoice.pdf');
    } // end method
    /* ============= End invoice_download Method ============== */

}
