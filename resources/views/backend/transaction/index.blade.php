@extends('admin.admin_master')
@section('admin')
    <section class="content-main">
        <div class="content-header mx-2">
            <div class="col-md-12">
                <h2 class="content-title">Product List </h2>
                <strong style="font-weight: bold" class="text-dark"> {{ count($items) }} Transactions Found </strong>

            </div>

        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table id="example" class="table table-bordered table-striped" width="100%">
                        <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Vendor Name</th>
                            <th scope="col">Added Amount</th>
                            <th scope="col">Withdrawn Amount</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key => $item)
                            <tr>
                                <td> {{ $key+1}} </td>
                                <td>
                                    {{ $item->vendor->shop_name ?? 'NULL' }}
                                </td>
                                <td> {{ $item->add_amount }} </td>
                                <td> {{ $item->withdraw_amount }} </td>
                                <td> {{ $item->created_at }} </td>
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
