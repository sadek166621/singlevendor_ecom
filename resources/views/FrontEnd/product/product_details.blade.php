@extends('Frontend.master')
@section('title')
    {{$product->name_en}} Details
@endsection
@section('content')

    <!-- Product Information Start -->
    <section class="container bg-white my-5 p-5">
        <div class="row">
            <div class="col-md-6 m-auto">
                <!-- default start -->
                <section id="default" class="padding-top0" style="margin: 0 25%">
                    <div class="">
                        <div class="">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="{{asset($product->product_thumbnail)}}"
                                     xoriginal="{{asset($product->product_thumbnail)}}" width="350px" height="350px"/>
                                <div class="xzoom-thumbs mt-4 m-auto" >
                                    <a href="{{asset($product->product_thumbnail)}}"><img class="xzoom-gallery"
                                                                                width="40" src="{{asset($product->product_thumbnail)}}"
                                                                                xpreview="{{asset($product->product_thumbnail)}}"></a>
                                    @foreach($multiImg as $image)
                                        <a href="{{asset($image->photo_name)}}"><img class="xzoom-gallery"
                                                                                    width="40" src="{{asset($image->photo_name)}}"></a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- default end -->
            </div>

            <div class="col-md-6">
                <?php $discount = round((($product->regular_price - $product->discount_price) / $product->regular_price) * 100); ?>
                <div style="background-color: rgba(255,2,137,0.3); border-radius: 5px; color: #ff00c3; width: 60px;">
                    <small class="m-1">{{$discount}}% off</small></div>
{{--                <span class="stock-status out-stock"> ৳{{  $discount }} Off </span>--}}
                <h1 class="product-title">{{$product->name_en}} </h1>
                <div>

                    <h4 class="price">Current Price:
                        <span id="product_price">৳{{$product->discount_price}}</span>
                        <del style="color: grey"> ৳{{$product->regular_price}}</del>
                    </h4>
                    <p class="">
                        <small>Product Category: {{$product->category->name_en??''}}</small><br>
                        <small>Brand: {{$product->brand->name_en ?? ''}}</small><br>
                        <small>Stock: <span id="stock_qty">{{$product->stock_qty ?? ''}}</span></small><br>
                    </p>
                </div>
                <div class="detail-extralink mb-3 align-items-baseline d-flex" >
                    <div class="mr-10">
                        <span class="">Quantity:</span>
                    </div>
                    <div class="detail-qty border radius mx-2 px-1">
                        <a href="#" class="qty-down"><i class="fa fa-angle-left text-dark"></i></a>
                        <input type="text" name="quantity" class="qty-val" value="1" min="1" id="qty" style="border: none; width: 30px; height: 50px; text-align: center" readonly>
                        <a href="#" class="qty-up"><i class="fa fa-angle-right text-dark"></i></a>
                    </div>

                    <div class="row" id="qty_alert">

                    </div>
                </div>

                <div class="d-flex">
                    <input type="hidden" id="pfrom" value="direct">
                    <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
                    <input type="hidden" id="{{ $product->id }}-product_pname"
                           value="{{ $product->name_en }}">
                    <button class="like btn" id="buy_now" type="button">Buy Now</button>
{{--                    <button class="like btn" style="margin-left: 5px" type="button" onclick="addToCartDirect({{$product->id}})">Add to cart</button>--}}
                    <button class="like btn" style="margin-left: 5px" type="button" onclick="addCart({{$product->id}})">Add to cart</button>
                </div>
            </div>

{{--            <div class="col-md-3 d-none d-lg-block">--}}
{{--                <div>--}}
{{--                    <small>Delivery</small>--}}
{{--                    <div class="d-flex justify-content-between">--}}
{{--                        <p><i class="fa-solid fa-location-dot"></i> Dhaka, Dhaka North, Banani Road No. 12 - 19</p>--}}
{{--                        <a href="#">Change</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div>--}}
{{--                    <div class="d-flex justify-content-between">--}}
{{--                        <p><i class="fa-solid fa-truck-fast"></i> Standard Delivery</p>--}}
{{--                        <p>BDT 60</p>--}}
{{--                    </div>--}}
{{--                    <small>5 - 10 day(s)</small>--}}
{{--                    <p><i class="fa-regular fa-handshake"></i> Cash on Delivery Available</p>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div>--}}
{{--                    <small>Delivery</small>--}}
{{--                    <p><i class="fa-solid fa-person-walking-arrow-loop-left"></i> 7 Days Returns</p>--}}
{{--                    <small>Change of mind is not applicable</small>--}}
{{--                    <p><i class="fa-solid fa-gears"></i> Warranty not available</p>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div>--}}
{{--                    <small>Sold by</small>--}}
{{--                    <div class="d-flex justify-content-between">--}}
{{--                        <p><i class="fa-solid fa-shop"></i> Kafela Shop</p>--}}
{{--                        <a href="#"><i class="fa-regular fa-message"></i> CHAT</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <p> Positive Seller Ratings</p>--}}
{{--                    <h4>86%</h4>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <p> Ship on Time</p>--}}
{{--                    <h4>97%</h4>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <p> Chat Response Rate</p>--}}
{{--                    <h4>99%</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- Product Information End -->
    <!-- Description Part Start -->
    <section class="container mb-5">
        <div class="row g-3">
            <div class="col-md-8 bg-white">
                <div class="p-4">
                    <div>
                        <h4>About this item</h4>
                        <hr>
                        <h6 class="mb-2">Product details</h6>
                        {!! $product->description_en !!}
                    </div>
                </div>
            </div>
            <div class="just-for-you col-md-4 bg-white border-start">
                <div class="py-4">
                    <h5 class="">Similar items</h5>
                    <div class="row row-cols-2 g-2">
                        @if(count($relatedProduct) >0)
                            @foreach ($relatedProduct as $product_trending )
                                <div class="col">
                                        <?php $discountPercentage = round((($product_trending->regular_price - $product_trending->discount_price) / $product_trending->regular_price) * 100); ?>
                                    <div class="card h-100">
                                        {{--                        <span class="favorite"><i class="fa-regular fa-heart"></i></span>--}}
                                        <a href="{{route('product.details', $product_trending->slug)}}">
                                            <img src="{{ asset($product_trending->product_thumbnail) }}" class="card-img-top" alt="...">
                                        </a>

                                        <div class="card-body">
                                            <a href="{{route('product.details', $product_trending->slug)}}">
                                                <p class="product-text">{!! Str::substr($product_trending->name_en, 0, 20) !!}{{Str::length($product_trending->name_en) > 20 ? '...':''}}</p>
                                            </a>
                                            <h5 class="product-price">৳{{ $product_trending->discount_price }}</h5>
                                            <p class="discount-percent"><span
                                                    class="discount-price">৳{{ $product_trending->regular_price }}</span> -
                                                {{ $discountPercentage }}%</p>
                                            <small class="product-ratings">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="ratings">({{ $product_trending->stock_qty }})</i>
                                            </small>
                                            <div class="text-center">
                                                <button type="submit" onclick="buyNow({{ $product_trending->id }})" class="buy_now">Buy Now</button>
                                                @if($product_trending->is_varient == 1)
                                                    <button type="button" id="{{ $product_trending->id }}" onclick="productView(this.id)"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal" class="buy_now">Add to Cart</button>
                                                @else
                                                    <input type="hidden" id="pfrom" value="direct">
                                                    <input type="hidden" id="product_product_id" value="{{ $product_trending->id }}" min="1">
                                                    <input type="hidden" id="{{ $product_trending->id }}-product_pname"
                                                           value="{{ $product_trending->name_en }}">
                                                    <button type="button" onclick="addToCartDirect({{ $product_trending->id }})" class="buy_now">Add
                                                        to Cart</button>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No Products Found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Description Part Start -->
@endsection

@push('js')
    <script>
        //Qty Up-Down
        $('.detail-qty').each(function () {
            var qtyval = parseInt($(this).find(".qty-val").val(), 10);

            $('.qty-up').on('click', function (event) {
                event.preventDefault();
                qtyval = qtyval + 1;
                $(this).prev().val(qtyval);
            });

            $(".qty-down").on("click", function (event) {
                event.preventDefault();
                qtyval = qtyval - 1;
                if (qtyval > 1) {
                    $(this).next().val(qtyval);
                } else {
                    qtyval = 1;
                    $(this).next().val(qtyval);
                }
            });
        });

        function addCart(id){
            var qty = $('.qty-val').val();
            addToCartDirect(id, false, qty);
        }

        $('#buy_now').on('click', function (){
            var qty = $('.qty-val').val();
            var id = {{$product->id}};
            buyNow(id, qty);

        });



    </script>
@endpush
