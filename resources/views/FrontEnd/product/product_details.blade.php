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
                        <span>৳{{$product->discount_price}}</span>
                        <del style="color: grey"> ৳{{$product->regular_price}}</del>
                    </h4>
                    <p class="">
                        <small>Product Category: {{$product->category->name_en??''}}</small><br>
                        <small>Brand: {{$product->brand->name_en ?? ''}}</small><br>
                        <small>Stock:{{$product->stock_qty ?? ''}}</small><br>
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
                    <button class="like btn" type="button">Buy Now</button>
                    <button class="like btn" style="margin-left: 5px" type="button" onclick="addToCart()">Add to cart</button>
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
                        <div class="col">
                            <div class="card h-100">
                                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                                <img src="assect/img/product/man-watch.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                                    <h5 class="product-price">BDT 581</h5>
                                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%
                                    </p>
                                    <small class="product-ratings">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="ratings">(105)</i>
                                    </small>
                                    <div class="text-center">
                                        <button type="button" class="product_page_buy_now">Buy Now</button>
                                        <button type="button" class="product_page_buy_now">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                                <img src="assect/img/product/watch.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                                    <h5 class="product-price">BDT 581</h5>
                                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%
                                    </p>
                                    <small class="product-ratings">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="ratings">(105)</i>
                                    </small>
                                    <div class="text-center">
                                        <button type="button" class="product_page_buy_now">Buy Now</button>
                                        <button type="button" class="product_page_buy_now">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                                <img src="assect/img/product//bracelet.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                                    <h5 class="product-price">BDT 581</h5>
                                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%
                                    </p>
                                    <small class="product-ratings">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="ratings">(105)</i>
                                    </small>
                                    <div class="text-center">
                                        <button type="button" class="product_page_buy_now">Buy Now</button>
                                        <button type="button" class="product_page_buy_now">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                                <img src="assect/img/product/card-holder.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                                    <h5 class="product-price">BDT 581</h5>
                                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%
                                    </p>
                                    <small class="product-ratings">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="ratings">(105)</i>
                                    </small>
                                    <div class="text-center">
                                        <button type="button" class="product_page_buy_now">Buy Now</button>
                                        <button type="button" class="product_page_buy_now">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                                <img src="assect/img/product//t-shirt.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                                    <h5 class="product-price">BDT 581</h5>
                                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%
                                    </p>
                                    <small class="product-ratings">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="ratings">(105)</i>
                                    </small>
                                    <div class="text-center">
                                        <button type="button" class="product_page_buy_now">Buy Now</button>
                                        <button type="button" class="product_page_buy_now">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                                <img src="assect/img/product/room-slipper.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                                    <h5 class="product-price">BDT 581</h5>
                                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%
                                    </p>
                                    <small class="product-ratings">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="ratings">(105)</i>
                                    </small>
                                    <div class="text-center">
                                        <button type="button" class="product_page_buy_now">Buy Now</button>
                                        <button type="button" class="product_page_buy_now">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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


    </script>
@endpush
