@extends('Frontend.master')
@section('content')
    <div class="container-fluid py-5 page-header">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="display-3 fw-bold">{{$category->name_en}}</h2>
{{--                    <h5 class="display-6 fw-semibold">Deals updated daily</h5>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Flash Sale Start -->
    {{-- <section class="flash-sale container-fluid bg-white mt-2">
        <div class="container p-2">
            <div class="d-flex align-items-center">
                <h5 class="me-5 d-none d-md-block">On Sale Now</h5>
                <h5 class="trimmers me-4">Ending in <span>03</span> : <span>47</span> : <span> 45</span></h5>
                <span class="d-none d-md-block">|</span>
                <p class="ms-5 d-none d-md-block">00 : 00 Tomorrow</p>
            </div>
        </div>

    </section> --}}
    <!-- Flash Sale End -->

    <!-- Shop Option Part Start -->
    {{-- <section class="shop-option container-fluid mt-3 p-2">
        <div class="container">
            <ul>
                <li><a href="">All</a></li>
                <li><a href="">Electronic</a></li>
                <li><a href="#">Health &amp; Beauty</a></li>
                <li><a href="">Fashion</a></li>
                <li><a href="">Home &amp; Living</a></li>
                <li><a href="">Supermarket</a></li>
                <li><a href="">Stationary &amp; Toys</a></li>
                <li><a href="">Sports &amp; Motors</a></li>
            </ul>
        </div>
    </section> --}}
    <!-- Shop Option Part End -->


    <!-- Product Start -->
    <section class="just-for-you container mt-2">
{{--        <h2>Sale On Now</h2>--}}
{{--        <hr>--}}
<div id="product-container" class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-2">
    @foreach ($products as $product )
    <div class="col">
        <?php $discountPercentage = round((($product->regular_price - $product->discount_price) / $product->regular_price) * 100); ?>
        <div class="card h-100">
            <span class="favorite"><i class="fa-regular fa-heart"></i></span>
            <img src="{{ asset($product->product_thumbnail) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="product-text">{!! Str::substr($product->name_en, 0, 20) !!}......</p>
                <h5 class="product-price">৳{{ $product->discount_price }}</h5>
                <p class="discount-percent"><span
                        class="discount-price">৳{{ $product->regular_price }}</span> -
                    {{ $discountPercentage }}%</p>
                <small class="product-ratings">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="ratings">({{ $product->stock_qty }})</i>
                </small>
                <div class="text-center">
                    <button type="button" class="buy_now">Buy Now</button>
                    @if($product->is_varient == 1)
                    <button type="button" id="{{ $product->id }}" onclick="productView(this.id)"
                        data-bs-toggle="modal" data-bs-target="#quickViewModal" class="buy_now">Add to Cart</button>
                    @else
                    <input type="hidden" id="pfrom" value="direct">
                    <input type="hidden" id="product_product_id" value="{{ $product->id }}" min="1">
                    <input type="hidden" id="{{ $product->id }}-product_pname"
                        value="{{ $product->name_en }}">
                    <button type="button" onclick="addToCartDirect({{ $product->id }})" class="buy_now">Add
                        to Cart</button>
                    @endif

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
    </section>
    <div class="text-center my-5">
        {{-- <button type="button" class="view_more">View More</button> --}}
    </div>
@endsection
@push('js')
<script>
    function addToCartDirect(id) {
        var product_name = $('#' + id + '-product_pname').val();
        // alert(product_name);
        var quantity = 1;

        // Start Message
        // const Toast = Swal.mixin({
        //         toast: true,
        //         position: 'top-end',
        //         icon: 'success',
        //         showConfirmButton: false,
        //         timer: 1200
        // });

        $.ajax({
            type: 'POST',
            url: '/cart/data/store/' + id,
            dataType: 'json',
            data: {
                quantity: quantity,
                product_name: product_name,
                _token: "{{ csrf_token() }}",
            },
            success: function (data) {
                console.log(data);
                miniCart();
                $('#closeModel').click();

                // Start Sweertaleart Message
                if ($.isEmptyObject(data.error)) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1200
                    })
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                } else {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1200
                    })
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // Start Sweertaleart Message


            }
        });
    }

    function addToCart() {
        var total_attributes = parseInt($('#total_attributes').val());
        //alert(total_attributes);
        var checkNotSelected = 0;
        var checkAlertHtml = '';
        for (var i = 1; i <= total_attributes; i++) {
            var checkSelected = parseInt($('#attribute_check_' + i).val());
            if (checkSelected == 0) {
                checkNotSelected = 1;
                checkAlertHtml += `<div class="attr-detail mb-5">
											<div class="alert alert-danger d-flex align-items-center" role="alert">
												<div>
													<i class="fa fa-warning mr-10"></i> <span> Select ` + $('#attribute_name_' + i).val() + `</span>
												</div>
											</div>
										</div>`;
            }
        }
        if (checkNotSelected == 1) {
            $('#qty_alert').html('');
            //$('#attribute_alert').html(checkAlertHtml);
            $('#attribute_alert').html(`<div class="attr-detail mb-5">
											<div class="alert alert-danger d-flex align-items-center" role="alert">
												<div>
													<i class="fa fa-warning mr-10"></i> <span> Select all attributes</span>
												</div>
											</div>
										</div>`);
            return false;
        }
        $('.size-filter li').removeClass("active");
        var product_name = $('#pname').val();
        var id = $('#product_id').val();
        var price = $('#product_price').val();
        var color = $('#color option:selected').val();
        var size = $('#size option:selected').val();
        var quantity = $('#qty').val();
        var varient = $('#pvarient').val();

        var min_qty = parseInt($('#minimum_buy_qty').val());
        if (quantity < min_qty) {
            $('#attribute_alert').html('');
            $('#qty_alert').html(`<div class="attr-detail mb-5">
											<div class="alert alert-danger d-flex align-items-center" role="alert">
												<div>
													<i class="fa fa-warning mr-10"></i> <span> Minimum quantity ` + min_qty + ` required.</span>
												</div>
											</div>
										</div>`);
            return false;
        }
        // console.log(min_qty);
        var p_qty = parseInt($('#stock_qty').val());
        // if(quantity > p_qty){
        //     $('#stock_alert').html(`<div class="attr-detail mb-5">
        // 								<div class="alert alert-danger d-flex align-items-center" role="alert">
        // 									<div>
        // 										<i class="fa fa-warning mr-10"></i> <span> Not enough stock.</span>
        // 									</div>
        // 								</div>
        // 							</div>`);
        //     return false;
        // }


        // alert(varient);

        var options = $('#choice_form').serializeArray();
        var jsonString = JSON.stringify(options);
        //console.log(options);

        // Start Message
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            icon: 'success',
            showConfirmButton: false,
            timer: 1200
        });

        $.ajax({
            type: 'POST',
            url: '/cart/data/store/' + id,
            dataType: 'json',
            data: {
                color: color,
                size: size,
                quantity: quantity,
                product_name: product_name,
                product_price: price,
                product_varient: varient,
                options: jsonString,
            },
            success: function (data) {
                // console.log(data);
                miniCart();
                $('#closeModel').click();

                // Start Sweertaleart Message
                if ($.isEmptyObject(data.error)) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1200
                    })

                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })

                    $('#qty').val(min_qty);
                    $('#pvarient').val('');

                    for (var i = 1; i <= total_attributes; i++) {
                        $('#attribute_check_' + i).val(0);
                    }

                } else {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1200
                    })

                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })

                    $('#qty').val(min_qty);
                    $('#pvarient').val('');

                    for (var i = 1; i <= total_attributes; i++) {
                        $('#attribute_check_' + i).val(0);
                    }
                }
                // Start Sweertaleart Message
                var buyNowCheck = $('#buyNowCheck').val();
                //alert(buyNowCheck);
                if (buyNowCheck && buyNowCheck == 1) {
                    $('#buyNowCheck').val(0);
                    window.location = '/checkout';
                }

            }
        });
    }


    function miniCartRemove(rowId) {
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/' + rowId,
            dataType: 'json',
            success: function (data) {

                miniCart();
                cart();

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
                } else {
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message
            }
        });
    }

</script>
{{-- <script>
    var offset = 12;

    $('#load-more-btn').click(function () {
        $.ajax({
            url: '/load-more-products',
            method: 'GET',
            data: {
                offset: offset
            },
            success: function (response) {
                var products = response.products;

                if (products.length > 0) {
                    products.forEach(function (product) {
                        // Make sure to use the correct attribute names based on your actual product model
                        var discountPercentage = Math.round(((product.regular_price -
                            product.discount_price) / product.regular_price) * 100);

                        // Append the new products to the container
                        $('#product-container').append(`
                        <div class="col">
            <?php $discountPercentage = round((($product->regular_price - $product->discount_price) / $product->regular_price) * 100); ?>
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset($product->product_thumbnail) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">{!! Str::substr($product->name_en, 0, 20) !!}......</p>
                    <h5 class="product-price">৳{{ $product->discount_price }}</h5>
                    <p class="discount-percent"><span class="discount-price">৳{{ $product->regular_price }}</span> - {{ $discountPercentage }}%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">({{ $product->stock_qty }})</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        @if($product->is_varient == 1)
                        <button type="button" id="{{ $product->id }}" onclick="productView(this.id)" data-bs-toggle="modal" data-bs-target="#quickViewModal" class="buy_now">Add to Cart</button>
                        @else
                        <input type="hidden" id="pfrom" value="direct">
                        <input type="hidden" id="product_product_id" value="{{ $product->id }}"  min="1">
                        <input type="hidden" id="{{ $product->id }}-product_pname" value="{{ $product->name_en }}">
                        <button type="button" onclick="addToCartDirect({{ $product->id }})" class="buy_now">Add to Cart</button>
                        @endif

                    </div>
                </div>
            </div>
        </div>
                        `);
                    });

                    offset += products.length;
                } else {
                    $('#load-more-btn').hide();
                }
            },
            error: function (error) {
                console.error(error);
            }
        });
    });

</script> --}}
@endpush
