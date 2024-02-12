@extends('FrontEnd.master')
@section('content')
@section('title')
Login
@endsection
    {{-- <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('home')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> Login
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <img class="border-radius-15" src="{{asset('frontend/assets/imgs/page/login-1.png')}}" alt="" />
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Login</h1>
                                            <p class="mb-30">Don't have an account? <a href="{{ route('register') }}">Create here</a></p>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email *" value="{{ old('email') }}" autofocus/>
                                                @error('email')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Your password *" autocomplete="current-password" value="{{ old('password')}}" />
                                                @error('password')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                                        <label class="form-check-label" for="exampleCheckbox1"><span>{{ __('Remember me') }}</span></label>
                                                    </div>
                                                </div>
                                                  <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-heading btn-block hover-up" name="login"><i class="fa-solid fa-arrow-right-to-bracket"></i> {{ __('Log in') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> --}}
    <section class="section-box shop-template mt-60">
        <div class="container">
          <div class="row mb-100">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
              <h3>Member Login</h3>
              <p class="font-md color-gray-500">Welcome back!</p>
              <div class="form-register mt-30 mb-30">
                <div class="form-group">
                  <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                    @csrf
                  
                  {{-- <input class="form-control" type="text" placeholder="stevenjob@gmail.com"> --}}
                  <label class="mb-5 font-sm color-gray-700">Email *</label>
                  <input class="form-control" type="email" name="email" placeholder="Login@gmail.com" value="{{ old('email') }}" autofocus/>
                      @error('email')
                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                      @enderror
                </div>
                <div class="form-group">
                        
                  <label class="mb-5 font-sm color-gray-700">Password *</label>
                  <input class="form-control" type="password" name="password" placeholder="Your password *" autocomplete="current-password" value="{{ old('password')}}">
                  @error('password')
                          <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="color-gray-500 font-xs">
                        <input class="checkagree"  type="checkbox" name="checkbox" id="exampleCheckbox1" value="">{{ __('Remember me') }}
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 text-end">
                    <div class="form-group"><a class="font-xs color-gray-500" href="{{ route('password.request') }}">Forgot your password?</a></div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="font-md-bold btn btn-buy" type="submit" value="Sign Up" name="login"> {{ __('Log in') }}</button>
                </div>
                <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Have not an account?</span><a class="font-xs color-brand-3 font-medium" href="{{ route('register') }}"> Sign Up</a></div>
              </div>
            </div>
            <div class="col-lg-5"></div>
          </div>
        </div>
      </section>
      <section class="section-box box-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
              <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
              <p class="font-lg color-white">Get E-mail updates about our latest shop and <span class="font-lg-bold">special offers.</span></p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
              <div class="box-form-newsletter mt-15">
                <form class="form-newsletter">
                  <input class="input-newsletter font-xs" value="" placeholder="Your email Address">
                  <button class="btn btn-brand-2">Sign Up</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection

@push('js')
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()

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
                                    <div class="cart-info"><a class="font-sm-bold color-brand-3" href="${base_url}/product-details/${slug}">${value.name}</a>

                                <p><span class="color-brand-2 font-sm-bold">${value.qty} x ${value.price}</span></p>
                                <div class="shopping-cart-delete">
                                        <a  id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fi-rs-cross-small"></i></a>
                                    </div>
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
</script>

@endpush
