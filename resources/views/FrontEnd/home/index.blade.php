@extends('FrontEnd.master')
@section('content')
<!-- Option & Slider Part Start -->
<section class="option-slider container mt-5">
    <div class="row">
        <div class="col-md-3 d-none d-lg-block">
            <div class="sidemenu">
                <ul>
                    <li class="dropdown"><a href="##">Women's & Girl's Fashion <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                            <li class="dropdown_two"><a href="#">Muslim Wear</a>
                                <ul>
                                    <div class="d-flex">
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-1.avif"
                                                    alt="...">
                                                <p class="product-text">Shalwar Kameez</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-2.avif"
                                                    alt="...">
                                                <p class="product-text">Sarees</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-3.avif"
                                                    alt="...">
                                                <p class="product-text">Kurtis</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-4.avif"
                                                    alt="...">
                                                <p class="product-text">Unstitched Fabric</p>
                                            </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown_two"><a href="#">Western Wear</a>
                                <ul>
                                    <div class="d-flex">
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-1.avif"
                                                    alt="...">
                                                <p class="product-text">Shalwar Kameez</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-2.avif"
                                                    alt="...">
                                                <p class="product-text">Sarees</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-3.avif"
                                                    alt="...">
                                                <p class="product-text">Kurtis</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-4.avif"
                                                    alt="...">
                                                <p class="product-text">Unstitched Fabric</p>
                                            </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown_two"><a href="#">Inner Wear</a>
                                <ul>
                                    <div class="d-flex">
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-1.avif"
                                                    alt="...">
                                                <p class="product-text">Shalwar Kameez</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-2.avif"
                                                    alt="...">
                                                <p class="product-text">Sarees</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-3.avif"
                                                    alt="...">
                                                <p class="product-text">Kurtis</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-4.avif"
                                                    alt="...">
                                                <p class="product-text">Unstitched Fabric</p>
                                            </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown_two"><a href="#">Shoes</a>
                                <ul>
                                    <div class="d-flex">
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-1.avif"
                                                    alt="...">
                                                <p class="product-text">Shalwar Kameez</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-2.avif"
                                                    alt="...">
                                                <p class="product-text">Sarees</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-3.avif"
                                                    alt="...">
                                                <p class="product-text">Kurtis</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-4.avif"
                                                    alt="...">
                                                <p class="product-text">Unstitched Fabric</p>
                                            </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown_two"><a href="#">Bags</a>
                                <ul>
                                    <div class="d-flex">
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-1.avif"
                                                    alt="...">
                                                <p class="product-text">Shalwar Kameez</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-2.avif"
                                                    alt="...">
                                                <p class="product-text">Sarees</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-3.avif"
                                                    alt="...">
                                                <p class="product-text">Kurtis</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-4.avif"
                                                    alt="...">
                                                <p class="product-text">Unstitched Fabric</p>
                                            </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown_two"><a href="#">Watches</a>
                                <ul>
                                    <div class="d-flex">
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-1.avif"
                                                    alt="...">
                                                <p class="product-text">Shalwar Kameez</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-2.avif"
                                                    alt="...">
                                                <p class="product-text">Sarees</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-3.avif"
                                                    alt="...">
                                                <p class="product-text">Kurtis</p>
                                            </a></li>
                                        <li><a class="product" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/items/item-4.avif"
                                                    alt="...">
                                                <p class="product-text">Unstitched Fabric</p>
                                            </a></li>
                                    </div>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Health & Beauty <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Watches,Gags,Jewellery <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Men's & Boy's Fashion <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Mother & Baby <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Electronic Devices <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">TV & Home Appliances <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Electronic Accessories <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Groceries <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Home & Lifestyle <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Sports & Outdoors <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="##">Automotive & Motorbike <span>&rsaquo;</span></a>
                        <ul>
                            <li class="dropdown_two"><a href="#">Traditional Wear</a>
                                <ul>
                                    <li><a href="#">Shalwar Kameez</a></li>
                                    <li><a href="#">Sarees</a></li>
                                    <li><a href="#">Kurtis</a></li>
                                    <li><a href="#">Unstitched Fabric</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-12 col-md-9 slider">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('FrontEnd') }}/assect/img/slider/slider-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('FrontEnd') }}/assect/img/slider/slider-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('FrontEnd') }}/assect/img/slider/slider-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('FrontEnd') }}/assect/img/slider/slider-4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('FrontEnd') }}/assect/img/slider/slider-5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Option & Slider Part End -->

<!-- Camping Part Start -->
<section class="camping container d-none d-xl-block mt-5">
    <div class="camp-img">
        <a href=""><img src="{{ asset('FrontEnd') }}/assect/img/slider/free delevery.jpg" alt=""></a>
    </div>
</section>
<!-- Camping Part End -->

<!-- Verified PArt Start -->
<section class="verified container mt-5 p-3 d-none d-lg-block">
    <ul>
        <li><img src="{{ asset('FrontEnd') }}/assect/img/icon/safe.png" alt="" /><a href="">Safe Payments</a></li>
        <!-- <li>|</li> -->
        <li><img src="{{ asset('FrontEnd') }}/assect/img/icon/car.png" alt="" /><a href="">Nationwide Delivery</a></li>
        <!-- <li>|</li> -->
        <li><img src="{{ asset('FrontEnd') }}/assect/img/icon/back.png" alt="" /><a href="#">Free &amp; Easy Return</a></li>
        <!-- <li>|</li> -->
        <li><img src="{{ asset('FrontEnd') }}/assect/img/icon/best.png" alt="" /><a href="">Best Price Guaranteed</a></li>
        <!-- <li>|</li> -->
        <li><img src="{{ asset('FrontEnd') }}/assect/img/icon/right.png" alt="" /><a href="">100% Authentic Products</a></li>
        <!-- <li>|</li> -->
        <li><img src="{{ asset('FrontEnd') }}/assect/img/icon/safe.png" alt="" /><a href="">Daraz Verified</a></li>

    </ul>
</section>
<!-- Verified Part End -->

<!-- Services Part Start -->
{{-- <section class="services container owl-carousel owl-theme owl-loaded mt-5 bg-white p-3">
    <div class="owl-stage-outer">
        <div class="row owl-stage g-1">
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/wholesale price.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Wholesale Price</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/everyday low price.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Everyday Low Price!</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/free delivery.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Free Delivery</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/fashion.png" class="card-img-top" alt="...">
                    <p class="product-text">Fashion</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/beauty & glamour.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Beauty & Glamour</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/mart.png" class="card-img-top" alt="...">
                    <p class="product-text">Mart</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/home makeover.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Home Makeover</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/best price.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Best Price Guaranteed</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card last" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/services/visa card.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Payment</p>
                </a>
            </div>
        </div>
    </div>
</section> --}}
<!-- Services Part End -->

<!-- Flash Sale Start -->
{{-- <section class="flash-sale container owl-carousel owl-theme owl-loaded mt-5">
    <h2>Flash Sale</h2>
    <div class="owl-stage-outer bg-white py-3 px-1">
        <div class="d-flex justify-content-between align-items-center px-3">
            <div class="d-flex">
                <h5 class="me-5">On Sale Now</h5>
                <h5 class="trimmers d-none d-md-block">Ending in <span>03</span> : <span>47</span> : <span>
                        45</span></h5>
            </div>
            <div>
                <a class="btn-primary" href="">SHOP MORE</a>
            </div>
        </div>
        <hr>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 owl-stage g-2">
            <div class="col owl-item">
                <div class="card h-100">
                    <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                    <img src="{{ asset('FrontEnd') }}/assect/img/product/man-watch.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                        <h5 class="product-price">BDT 581</h5>
                        <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                        <small class="product-ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="ratings">(105)</i>
                        </small>
                        <div class="text-center">
                            <button type="button" class="buy_now">Buy Now</button>
                            <button type="button" class="buy_now">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col owl-item">
                <div class="card h-100">
                    <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                    <img src="{{ asset('FrontEnd') }}/assect/img/product/watch.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                        <h5 class="product-price">BDT 581</h5>
                        <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                        <small class="product-ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="ratings">(105)</i>
                        </small>
                        <div class="text-center">
                            <button type="button" class="buy_now">Buy Now</button>
                            <button type="button" class="buy_now">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col owl-item">
                <div class="card h-100">
                    <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                    <img src="{{ asset('FrontEnd') }}/assect/img/product//bracelet.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                        <h5 class="product-price">BDT 581</h5>
                        <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                        <small class="product-ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="ratings">(105)</i>
                        </small>
                        <div class="text-center">
                            <button type="button" class="buy_now">Buy Now</button>
                            <button type="button" class="buy_now">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col owl-item">
                <div class="card h-100">
                    <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                    <img src="{{ asset('FrontEnd') }}/assect/img/product/card-holder.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                        <h5 class="product-price">BDT 581</h5>
                        <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                        <small class="product-ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="ratings">(105)</i>
                        </small>
                        <div class="text-center">
                            <button type="button" class="buy_now">Buy Now</button>
                            <button type="button" class="buy_now">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col owl-item">
                <div class="card h-100">
                    <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                    <img src="{{ asset('FrontEnd') }}/assect/img/product//t-shirt.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                        <h5 class="product-price">BDT 581</h5>
                        <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                        <small class="product-ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="ratings">(105)</i>
                        </small>
                        <div class="text-center">
                            <button type="button" class="buy_now">Buy Now</button>
                            <button type="button" class="buy_now">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col owl-item">
                <div class="card h-100">
                    <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                    <img src="{{ asset('FrontEnd') }}/assect/img/product/room-slipper.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                        <h5 class="product-price">BDT 581</h5>
                        <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                        <small class="product-ratings">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="ratings">(105)</i>
                        </small>
                        <div class="text-center">
                            <button type="button" class="buy_now">Buy Now</button>
                            <button type="button" class="buy_now">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> --}}
<!-- Flash Sale End -->

<!-- Categories Part Start -->
<section class="categories container owl-carousel owl-theme owl-loaded mt-5">
    <h2>Categories</h2>
    <hr>
    <div class="owl-stage-outer">
        <div class="row owl-stage g-1">
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/sofas.jpg" class="card-img-top" alt="...">
                    <p class="product-text">Sofas</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/wardrobe.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Wardrobe Organisers</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/trimmers.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Trimmers & Groomers</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/moisturizers.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Moisturizers & Cream</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/dried.jpg" class="card-img-top" alt="...">
                    <p class="product-text">Dried Fruit Nuts</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/drawing.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Drawing Pad</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/shirts.jpg" class="card-img-top" alt="...">
                    <p class="product-text">Blouses & Shirts</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/fashion.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Fashion</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/wardrobe.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Sofas</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/wardrobe.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Wardrobe Organisers</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/trimmers.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Trimmers & Groomers</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/moisturizers.png" class="card-img-top"
                        alt="...">
                    <p class="product-text">Moisturizers & Cream</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/dried.jpg" class="card-img-top" alt="...">
                    <p class="product-text">Dried Fruit Nuts</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/drawing.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Drawing Pad</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/shirts.jpg" class="card-img-top" alt="...">
                    <p class="product-text">Blouses & Shirts</p>
                </a>
            </div>
            <div class="col owl-item">
                <a class="card" href="#"><img src="{{ asset('FrontEnd') }}/assect/img/categories/fashion.jpg" class="card-img-top"
                        alt="...">
                    <p class="product-text">Fashion</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Categories Part End -->

<!-- Just For You Start -->
<section class="just-for-you container mt-5">
    <h2>Just For You</h2>
    <hr>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-2">
        @foreach ($product_trendings as $product_trending )
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product/man-watch.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{-- <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product/watch.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product//bracelet.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product/card-holder.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product//t-shirt.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product/room-slipper.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product/man-watch.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product/watch.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product//bracelet.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product/card-holder.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product//t-shirt.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <span class="favorite"><i class="fa-regular fa-heart"></i></span>
                <img src="{{ asset('FrontEnd') }}/assect/img/product/room-slipper.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="product-text">This is Brown Round Quartx Watch With Leather......</p>
                    <h5 class="product-price">BDT 581</h5>
                    <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                    <small class="product-ratings">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="ratings">(105)</i>
                    </small>
                    <div class="text-center">
                        <button type="button" class="buy_now">Buy Now</button>
                        <button type="button" class="buy_now">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<div class="text-center my-5">
    <button type="button" class="view_more">View More</button>
</div>
<!-- Just For You End -->
@endsection
@push('js')
<script>
    function addToCartDirect(id){
        var product_name = $('#'+id+'-product_pname').val();
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
        type:'POST',
        url:'/cart/data/store/'+id,
        dataType:'json',
        data:{
            quantity:quantity,product_name:product_name,_token:"{{ csrf_token() }}",
        },
            success:function(data){
                console.log(data);
                miniCart();
                $('#closeModel').click();

                // Start Sweertaleart Message
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
                // Start Sweertaleart Message


            }
        });
    }
    function addToCart(){
            var total_attributes = parseInt($('#total_attributes').val());
            //alert(total_attributes);
            var checkNotSelected = 0;
            var checkAlertHtml = '';
            for(var i=1; i<=total_attributes; i++){
                var checkSelected = parseInt($('#attribute_check_'+i).val());
                if(checkSelected == 0){
                    checkNotSelected = 1;
                    checkAlertHtml += `<div class="attr-detail mb-5">
											<div class="alert alert-danger d-flex align-items-center" role="alert">
												<div>
													<i class="fa fa-warning mr-10"></i> <span> Select `+$('#attribute_name_'+i).val()+`</span>
												</div>
											</div>
										</div>`;
                }
            }
            if(checkNotSelected == 1){
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
            if(quantity < min_qty){
                $('#attribute_alert').html('');
                $('#qty_alert').html(`<div class="attr-detail mb-5">
											<div class="alert alert-danger d-flex align-items-center" role="alert">
												<div>
													<i class="fa fa-warning mr-10"></i> <span> Minimum quantity `+ min_qty +` required.</span>
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
            type:'POST',
            url:'/cart/data/store/'+id,
            dataType:'json',
            data:{
              color:color,size:size,quantity:quantity,product_name:product_name,product_price:price,product_varient:varient,options:jsonString,
            },
                success:function(data){
                    // console.log(data);
                    miniCart();
                    $('#closeModel').click();

                    // Start Sweertaleart Message
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

                        $('#qty').val(min_qty);
                        $('#pvarient').val('');

                        for(var i=1; i<=total_attributes; i++){
                            $('#attribute_check_'+i).val(0);
                        }

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

                        $('#qty').val(min_qty);
                        $('#pvarient').val('');

                        for(var i=1; i<=total_attributes; i++){
                            $('#attribute_check_'+i).val(0);
                        }
                    }
                    // Start Sweertaleart Message
                    var buyNowCheck = $('#buyNowCheck').val();
                    //alert(buyNowCheck);
                    if(buyNowCheck && buyNowCheck == 1){
                        $('#buyNowCheck').val(0);
                        window.location = '/checkout';
                    }

                }
            });
        }

        function miniCart(){
            $.ajax({
                type: 'GET',
                url: '/product/mini/cart',
                dataType:'json',
                success:function(response){
                    // alert(response);
                    //checkout();
                    $('span[id="cartSubTotal"]').text(response.cartTotal);
                    $('#cartSubTotalShi').val(response.cartTotal);
                    $('.cartQty').text(Object.keys(response.carts).length);
                    $('#total_cart_qty').text(Object.keys(response.carts).length);

                    var miniCart = "";

                    if(Object.keys(response.carts).length > 0){
                        $.each(response.carts, function(key,value){
                            //console.log(value);
                            var slug = value.options.slug;
                            var base_url = window.location.origin;
                          miniCart += `

                            <div class="item-cart mb-20">
                                            <div class="cart-image"><img src="/${value.options.image}" alt="Ecom"></div>
                                    <div class="cart-info">
                                      <a  id="${value.rowId}" onclick="miniCartRemove(this.id)" style='float:right;padding: 2px;'><i class="fa-solid fa-xmark"></i></a>
                                      <a class="font-sm-bold color-brand-3" href="${base_url}/product-details/${slug}">${value.name}</a>
                                     <p><span class="color-brand-2 font-sm-bold">${value.qty} x ${value.price}</span></p>
                            </div>
                        </div>`

                        });

                        $('#miniCart').html(miniCart);
                        $('#miniCart_empty_btn').hide();
                        $('#miniCart_btn').show();
                    }else{
                        html = '<h4 class="text-center">Cart empty!</h4>';
                        $('#miniCart').html(html);
                        $('#miniCart_btn').hide();
                        $('#miniCart_empty_btn').show();
                    }
                }
            });
        }
        /* ============ Function Call ========== */
        miniCart();

        function miniCartRemove(rowId){
            $.ajax({
               type:'GET',
               url: '/minicart/product-remove/' +rowId,
               dataType: 'json',
               success:function(data){

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
                }else{
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
@endpush
