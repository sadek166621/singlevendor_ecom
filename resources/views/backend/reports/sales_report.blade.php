@extends('admin.admin_master')
@section('admin')
    <section class="content-main">
        <div class="content-header mx-2">
            <div class="col-md-12">
                <h2 class="content-title">Product List </h2>
                <strong style="font-weight: bold" class="text-dark"> {{ count($orders) }} Orders Found </strong>

            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table id="example" class="table table-bordered table-striped" width="100%">
                        <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $key => $item)
                            <tr>
                                <td> {{ $key+1}} </td>

                                <td>
                                    {{ $item->order->invoice_no ?? ''}}

                                </td>
                                <td> {{ $item->product->name_bn ?? 'NULL' }} </td>
                                <td> {{ $item->qty }} </td>
                                <td> {{ $item->price}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- table-responsive //end -->
            </div>
            <!-- card-body end// -->
        </div>
    </section>
@endsection
