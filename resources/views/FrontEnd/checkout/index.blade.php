@extends('FrontEnd.master')
@section('title')
    Checkout
@endsection
@section('content')
<!-- Header Start -->
<div class="container-fluid py-5 page-header">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="display-3 fw-bold">BOKCHO</h2>
                <h5 class="display-6 fw-semibold">Happy Shopping</h5>
                <div class="d-flex justify-content-center mt-3">
                    <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">Checkout</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Check Out Information Start -->
<section class="container my-5">
    {{-- <div class="row">
        <div class="mb-40">
            <h1 class="heading-2 mb-10">Checkout</h1>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are <span class="text-brand" id="total_cart_qty"></span> products in your cart</h6>
            </div>
        </div>
    </div> --}}
    <div class="pt-5">
        <div class="row px-xl-5">

            <div class="col-lg-8 p-5 bg-white">
                {{-- <div class="mb-40">
                    <h1 class="heading-2 mb-10">Checkout</h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are <span class="text-brand" id="total_cart_qty"></span> products in your cart</h6>
                    </div>

                </div> --}}
                <form action="{{ route('checkout.payment') }}" method="post">
                    @csrf
                <div class="mb-4">
                    <h4 class="fw-semibold mb-4">Billing Address</h4>
                    <div class="row g-3">
                        <div class="col-md-12 form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" required="" id="name" name="name" placeholder="Full Name" value="{{ Auth::user()->name ?? old('name') }}">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        </div>
                        {{-- <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Dewal">
                        </div> --}}
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" id="email" type="email" name="email" placeholder="Email address *" value="{{ Auth::user()->email ?? old('email') }}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" required="" type="number" name="phone" placeholder="Phone" id="phone" value="{{ Auth::user()->phone ?? old('phone') }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Full Address</label>
                            <textarea name="address" id="address" class="form-control" placeholder="Address" required>{{ old('address') }}</textarea>
                            @error('address')
                                <p class="text-danger">{{$message}}</p>
                            @enderror                        </div>
                        {{-- <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="form-control">
                                <option selected>United States</option>
                                <option>Bangladesh</option>
                                <option>India</option>
                                <option>Nepal</option>
                                <option>Pakistan</option>
                                <option>Sri-lanka</option>
                                <option>Nowkhali</option>
                            </select>
                        </div> --}}
                        {{-- <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div> --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Devision</label>
                              <select class="form-control font-sm select-style1 color-gray-700" name="division_id" id="division_id" required>
                                <option value="">Select Division</option>

                                @foreach(get_divisions() as $division)
                                  <option value="{{ $division->id }}">{{ ucwords($division->division_name_en) }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                                <label>District</label>
                              <select class="form-control font-sm select-style1 color-gray-700"  name="district_id" id="district_id" required>
                                <option selected=""  value="">Select District</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                                <label>Upazila</label>
                              <select class="form-control font-sm select-style1 color-gray-700" name="upazilla_id" id="upazilla_id" required>
                                <option selected=""  value="">Select Upazilla</option>
                              </select>
                            </div>
                          </div>
                        <div class="col-md-6 form-group">
                            <label>Product Shipping</label>
                            <select class="form-control" name="shipping_id" id="shipping_id" required>
                                <option value="">Select Shipping</option>
                                                @foreach ($shippings as $key => $shipping)
                                                    <option value="{{ $shipping->id }}">@if($shipping->type == 1) Inside Dhaka @else Outside Dhaka @endif </option>
                                                @endforeach
                              </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Additional Information</label>
                            <textarea required name="comment" class="form-control" id="comment" placeholder="Additional Information" rows="5">

                            </textarea>
                            @error('address')
                                <p class="text-danger">{{$message}}</p>
                            @enderror                        </div>
                        <div class="col-md-12 form-group d-none">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" data-bs-toggle="collapse"
                                    data-bs-target="#shipping-address">
                                <label class="custom-control-label" for="shipto" data-bs-toggle="collapse"
                                    data-bs-target="#shipping-address">Ship to different address</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="Sunny">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Dewal">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+88 01700 000000">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" placeholder="Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="form-control">
                                <option selected>United States</option>
                                <option>Bangladesh</option>
                                <option>India</option>
                                <option>Nepal</option>
                                <option>Pakistan</option>
                                <option>Sri-lanka</option>
                                <option>Nowkhali</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-5">
                    <div class="card-header bg-primary">
                        <h4 class="fw-semibold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-semibold mb-3">Products</h5>
                        @foreach ($carts as $cart)
                        <div class="d-flex justify-content-between mb-1">
                            <p>{{$cart->name}} x  {{$cart->qty}}</p>
                            <p>৳{{$cart->subtotal}}</p>
                        </div>
                        @endforeach

                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">৳<span id="cartSubTotal">{{ $cartTotal }}</span></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">৳<span id="ship_amount">0.00</span></h6>
                            <input type="hidden" value="" name="shipping_charge" class="ship_amount" />
                            <input type="hidden" value="" name="shipping_type" class="shipping_type" />
                            <input type="hidden" value="" name="shipping_name" class="shipping_name" />

                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between my-2">
                            <input type="hidden" value="" name="shipping_charge" class="ship_amount" />
                                    <input type="hidden" value="" name="shipping_type" class="shipping_type" />
                                    <input type="hidden" value="" name="shipping_name" class="shipping_name" />
                                    <input type="hidden" value="{{ $cartTotal }}" name="sub_total" id="cartSubTotalShi" />
                                    <input type="hidden" value="" name="grand_total" id="grand_total" />
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">৳<span id="grand_total_set">{{ $cartTotal }}</span></h5>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h4 class="fw-semibold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" type="radio" name="payment_option" id="cash_on_delivery" value="cod" checked>
                                <label class="custom-control-label" for="paypal">Cash On Delivery</label>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment"
                                    id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment"
                                    id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
{{--                    @auth--}}
                    <button type="submit" class="btn btn-primary btn-lg d-block fw-semibold py-2 px-4">Place Order</button>
{{--                    @endauth--}}
{{--                    @guest--}}
                    {{-- <button type="submit" class="btn btn-primary btn-lg d-block fw-semibold py-2 px-4">Place Order</button> --}}
{{--                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg d-block fw-semibold py-2 px-4">Place Order</a></span>--}}
{{--                    @endguest--}}
                </div>
            </div>
        </form>
        </div>

    </div>
</section>
@endsection
@push('js')
<!--  Division To District Show Ajax -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: 'division-district/ajax/',
                    type:"GET",
                    data:{'division_id':division_id},
                    dataType:"json",
                    success:function(data) {
                        // Reset district selection
                        $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                        // Populate district options
                        $.each(data, function(key, value){
                            $('select[name="district_id"]').append('<option value="'+ value.id +'">' + capitalizeFirstLetter(value.district_name_en) + '</option>');
                        });
                        $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');
                    },
                });
            } else {
                // Reset district selection if division is not selected
                $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');
            }
        });

        // Function to capitalize first letter of a string
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        // Address Relationship Division/District/Upazilla Show Data Ajax
        $('select[name="address_id"]').on('change', function(){
            var address_id = $(this).val();
            $('.selected_address').removeClass('d-none');
            if(address_id) {
                $.ajax({
                    url: "{{  url('/address/ajax') }}/"+address_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        $('#dynamic_division').text(capitalizeFirstLetter(data.division_name_en));
                        $('#dynamic_division_input').val(data.division_id);
                        $("#dynamic_district").text(capitalizeFirstLetter(data.district_name_en));
                        $('#dynamic_district_input').val(data.district_id);
                        $("#dynamic_upazilla").text(capitalizeFirstLetter(data.upazilla_name_en));
                        $('#dynamic_upazilla_input').val(data.upazilla_id);
                        $("#dynamic_address").text(data.address);
                        $('#dynamic_address_input').val(data.address);
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>

<!--  District To Upazilla Show Ajax -->
<script type="text/javascript">
$(document).ready(function() {
    $('select[name="district_id"]').on('change', function(){
        var district_id = $(this).val();
        if(district_id) {
            $.ajax({
                url: '/district-upazilla/ajax/',
                type:"GET",
                data:{'district_id': district_id},
                dataType:"json",
                success:function(data) {
                   var d =$('select[name="upazilla_id"]').empty();
                    $.each(data, function(key, value){
                        $('select[name="upazilla_id"]').append('<option value="'+ value.id +'">' + value.name_en + '</option>');
                    });
                },
            });
        } else {
            alert('danger');
        }
    });
});
</script>

<!-- create address ajax -->
<script type="text/javascript">
$(document).ready(function() {
    $('#addressStore').on('click', function() {
        var division_id = $('#division_id').val();
        var district_id = $('#district_id').val();
        var upazilla_id = $('#upazilla_id').val();
        var address     = $('#address').val();
        var is_default  = $('#is_default').val();
        var status      = $('#status').val();

        $.ajax({
            url: '{{ route('address.ajax.store') }}',
            type: "POST",
            data: {
              _token: $("#csrf").val(),
              division_id: division_id,
              district_id: district_id,
              upazilla_id: upazilla_id,
              address: address,
              is_default: is_default,
              status: status,
            },
            dataType:'json',
            success: function(data){
                // console.log(data);
                $('#address').val(null);

                $('select[name="address_id"]').html('<option value="" selected="" disabled="">Select Address</option>');
                $.each(data, function(key, value){
                    $('select[name="address_id"]').append('<option value="'+ value.id +'">' + value.address + '</option>');
                });
                $('select[name="division_id"]').html('<option value="" selected="" disabled="">Select Division</option>');
                $('select[name="district_id"]').html('<option value="" selected="" disabled="">Select District</option>');
                $('select[name="upazilla_id"]').html('<option value="" selected="" disabled="">Select Upazila</option>');

                // Start Message
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 2000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Swal.fire({
                        type: 'error',
                        title: data.error
                    })
                }

                // End Message
                $('#Close').click();
            }
        });
     });
});
</script>
<script>
    $(document).ready(function() {
    $('select[name="shipping_id"]').on('change', function(){
        var shipping_id = $(this).val();
        if(shipping_id) {
            $.ajax({
                url: "{{  url('/checkout/shipping/ajax') }}/"+shipping_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    $('#ship_amount').text(data.shipping_charge);
                    $('.ship_amount').val(data.shipping_charge);
                    $('.shipping_name').val(data.name);
                    $('.shipping_type').val(data.type);

                    let shipping_price = parseInt(data.shipping_charge);
                    let grand_total_price = parseInt($('#cartSubTotalShi').val());
                    grand_total_price += shipping_price;
                    $('#grand_total_set').html(grand_total_price);
                    $('#grand_total').val(grand_total_price);
                },
            });
        } else {
            // Reset the elements if no shipping option is selected
            $('#ship_amount').text('0');
            $('.ship_amount').val('0');
            $('.shipping_name').val('');
            $('.shipping_type').val('');

            let grand_total_price = parseInt($('#cartSubTotalShi').val());
            $('#grand_total_set').html(grand_total_price);
            $('#grand_total').val(grand_total_price);
        }
    });
});
</script>
@endpush
