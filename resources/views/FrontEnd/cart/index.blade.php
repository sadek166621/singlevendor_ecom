@extends('FrontEnd.master')
@section('title')
    Shopping Cart
@endsection
@section('content')
<div class="container-fluid py-5 page-header">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="display-3 fw-bold">{{get_setting('business_name')->value}}</h2>
                <h5 class="display-6 fw-semibold">Happy Shopping</h5>
                <div class="d-flex justify-content-center mt-3">
                    <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">Shopping Cart</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Cart Information Start -->
<section class="container my-5">
    <div class="pt-5">
        <div class="row g-3">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table text-center mb-0">
                    <thead class="text-black">
                        <tr>
                            <th>Image</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle" id="cartPage">

                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
{{--                <form class="mb-5" action="#">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control" placeholder="Coupon Code">--}}
{{--                        <div class="ms-2">--}}
{{--                            <button class="btn btn-primary py-2">Apply Coupon</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h4 class="fw-semibold text-white">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold">Subtotal</h6>
                            <h6 class="fw-semibold">৳<span id="cartSubTotal"></span></h6>
                        </div>
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <h6 class="fw-semibold">Shipping</h6>--}}
{{--                            <h6 class="fw-semibold">$10</h6>--}}
{{--                        </div>--}}
                        <hr>
                        <div class="d-flex justify-content-between my-2">
                            <h5 class="fw-semibold">Total</h5>
                            <h5 class="fw-semibold" >৳<span id="cartSubTotal"></span></h5>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    @auth
                        <a href="{{route('checkout')}}" class="btn btn-primary btn-lg d-block fw-semibold py-2 px-4 text-white">Proceed To
                            Checkout</a>
                    @endauth
                    @guest
                        {{-- <button type="submit" class="btn btn-primary btn-lg d-block fw-semibold py-2 px-4">Place Order</button> --}}
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg d-block fw-semibold py-2 px-4 text-white">Place Order</a></span>
                    @endguest

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')
    <script>
        function cart(){
            $.ajax({
                type: 'GET',
                url: '/get-cart-product',
                dataType:'json',
                success:function(response){
                    // console.log(response);
                    var rows = "";
                    // alert(Object.keys(response.carts).length);
                    $('#total_cart_qty').text(Object.keys(response.carts).length);
                    if(Object.keys(response.carts).length > 0){
                        $.each(response.carts, function(key,value){
                            var slug = value.options.slug;
                            var base_url = window.location.origin;
                            rows += `
                            <tr class="pt-30">
                                <td class="image product-thumbnail pt-40"><img src="/${value.options.image}" style="width: 100px; height: 100px" alt="#"></td>
                                <td class="product-des product-name">
                                    <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="${base_url}/product-details/${slug}">${value.name}</a></h6>`;
                            $.each(value.options.attribute_names, function(index,val){
                                rows +=               `<span>`+val+`: `+value.options.attribute_values[index]+`</span><br/>`;
                            });
                            rows +=       `</td>
                                <td class="price" data-title="Price">
                                    <h4 class="text-body">৳${value.price} </h4>
                                </td>
                                <td class="text-center detail-info" data-title="Stock">
                                    <div class="detail-extralink mr-15">
                                        <div class="align-items-center d-flex justify-content-center">

                                        ${value.qty > 1

                                ? `<button type="submit" style="margin-right: 5px; font-size: 12px;" class="btn btn-sm btn-danger" id="${value.rowId}" onclick="cartDecrement(this.id)" >
                                    <i class="fa fa-minus"></i>
                                    </button>`

                                : `  <button type="submit" style="margin-right: 5px;" class="btn btn-danger btn-sm" disabled > <i class="fa fa-minus"></i>
                                    </button>`

                            }

                                        <input type="text" value="${value.qty}" min="1" max="100" disabled="" style="width: 36px; height:40px; text-align: center; padding-left:0px;">

                                        <button type="submit" style="margin-left: 5px; font-size: 12px; border-radius: 0.25rem" class="btn btn-sm bg-primary text-white" id="${value.rowId}" onclick="cartIncrement(this.id)" ><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="price text-center" width="100px;" data-title="Price">
                                    <h4 class="text-brand">৳${value.subtotal} </h4>
                                </td>
                                <td class="action text-center" data-title="Remove"><a  id="${value.rowId}" onclick="cartRemove(this.id)" class="text-body btn btn-danger"><i class="text-white fas fa-trash"></i></a></td>
                            </tr>`;
                        });

                        $('#cartPage').html(rows);

                    }else{
                        html = '<tr><td class="text-center" colspan="6" style="font-size: 18px; font-weight: bold;">Cart empty!</td></tr>';
                        $('#cartPage').html(html);
                    }
                }
            });
        }
        cart();

        /* ==================== Start  cartIncrement ================== */
        function cartIncrement(rowId){
            $.ajax({
                type:'GET',
                url: "/cart-increment/"+rowId,
                dataType:'json',
                success:function(data){
                    // console.log(data)
                    cart();
                    miniCart();

                    const Toast = Swal.mixin({
                        toast:true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1200
                    })
                    Toast.fire({
                        type:'success',
                        title: data.success
                    })

                    if($.isEmptyObject(data.error)){
                        const Toast = Swal.mixin({
                            toast:true,
                            position: 'top-end',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1200
                        })

                        Toast.fire({
                            type:'success',
                            title: data.success
                        })

                    }else{
                        const Toast = Swal.mixin({
                            toast:true,
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 1200
                        })

                        Toast.fire({
                            type:'error',
                            title: data.error
                        })
                    }

                }
            });
        }
        /* ==================== End  cartIncrement ================== */

        /* ==================== Start  Cart Decrement ================== */
        function cartDecrement(rowId){
            $.ajax({
                type:'GET',
                url: "/cart-decrement/"+rowId,
                dataType:'json',
                success:function(data){
                    // console.log(data)
                    //console.log(data);
                    // if(data == 2){
                    //     alert("#"+rowId);
                    //     $("#"+rowId).attr("disabled", "true");
                    // }
                    cart();
                    miniCart();
                }
            });
        }
        /* ================ Start My Cart Remove Product =========== */
        function cartRemove(id){
            $.ajax({
                type: 'GET',
                url: '/cart-remove/'+id,
                dataType:'json',
                success:function(data){
                    cart();
                    miniCart();


                    // Start Message
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message
                }
            });
        }
        /* ==================== End  Cart Decrement ================== */
    </script>
@endpush
