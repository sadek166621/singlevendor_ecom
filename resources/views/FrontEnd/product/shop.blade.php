@extends('FrontEnd.master')
@section('content')
<div class="container-fluid py-5 page-header">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="display-3 fw-bold">Flash Sales</h2>
                <h5 class="display-6 fw-semibold">Deals updated daily</h5>
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
    <h2>Sale On Now</h2>
    <hr>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-2">
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
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
                        <button type="button" class="buy_now"><i class="fa-solid fa-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="text-center my-5">
    <button type="button" class="view_more">View More</button>
</div>
@endsection
