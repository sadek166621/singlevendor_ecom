@extends('FrontEnd.master')
@section('content')
<div class="container-fluid py-5 page-header">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="display-3 fw-bold">NANDON</h2>
                <h5 class="display-6 fw-semibold">Happing Shopping</h5>
                <div class="d-flex justify-content-center mt-3">
                    <p class="m-0"><a href="#">Home</a></p>
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
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <tr>
                            <td class="text-start"><div class="d-flex px-4">
                                <img src="assect/img/product/t-shirt.webp" alt="" style="width: 50px;">
                                <div class="ms-3">
                                    <p>Colorful Stylish Shirt</p>
                                    <small class="discount-percent">No Brand, Color Family:Multicolor</small>
                                </div>
                            </div></td>
                            <td>
                                <h5 class="product-price">BDT 581</h5>
                                <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-regular fa-trash-can ms-3"></i>
                                </span>
                            </td>
                            <td>
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center"
                                        value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start"><div class="d-flex px-4">
                                <img src="assect/img/product/t-shirt.webp" alt="" style="width: 50px;">
                                <div class="ms-3">
                                    <p>Colorful Stylish Shirt</p>
                                    <small class="discount-percent">No Brand, Color Family:Multicolor</small>
                                </div>
                            </div></td>
                            <td>
                                <h5 class="product-price">BDT 581</h5>
                                <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-regular fa-trash-can ms-3"></i>
                                </span>
                            </td>
                            <td>
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center"
                                        value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start"><div class="d-flex px-4">
                                <img src="assect/img/product/t-shirt.webp" alt="" style="width: 50px;">
                                <div class="ms-3">
                                    <p>Colorful Stylish Shirt</p>
                                    <small class="discount-percent">No Brand, Color Family:Multicolor</small>
                                </div>
                            </div></td>
                            <td>
                                <h5 class="product-price">BDT 581</h5>
                                <p class="discount-percent"><span class="discount-price">BDT 800</span> - 27%</p>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                    <i class="fa-regular fa-trash-can ms-3"></i>
                                </span>
                            </td>
                            <td>
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center"
                                        value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="#">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Coupon Code">
                        <div class="ms-2">
                            <button class="btn btn-primary py-2">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card mb-3">
                    <div class="card-header bg-primary">
                        <h4 class="fw-semibold">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="fw-semibold">Subtotal</h6>
                            <h6 class="fw-semibold">$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-semibold">Shipping</h6>
                            <h6 class="fw-semibold">$10</h6>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between my-2">
                            <h5 class="fw-semibold">Total</h5>
                            <h5 class="fw-semibold">$160</h5>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-lg d-block fw-semibold py-2 px-4">Proceed To
                        Checkout</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
