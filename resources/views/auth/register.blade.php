@extends('FrontEnd.master')
@section('title')
Register
@endsection
@section('content')
    {{-- <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('home')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Create an Account</h1>
                                            <p class="mb-30">Already have an account? <a href="{{route('login')}}">Login</a></p>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="fw-900">Name : *</label>
                                                <input type="text" name="name" placeholder="Name" id="name" value="{{ old('name') }}" />
                                                @error('name')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="fw-900">User Name : *</label>
                                                <input type="text" name="username" placeholder="Username" id="username" value="{{ old('username') }}" />
                                                @error('username')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="fw-900">Phone Number : *</label>
                                                <input type="number" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}"/>
                                                @error('phone')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="fw-900">Email : *</label>
                                                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}"/>
                                                @error('email')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="fw-900">Password : *</label>
                                                <input type="password" name="password" placeholder="Password" id="password" autocomplete="new-password"/>
                                                <span>password must be at least 8 characters</span>
                                                @error('password')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="fw-900">Confirm password : *</label>
                                                <input type="password" placeholder="Confirm password" name="password_confirmation"/>
                                                @error('password')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="" />
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                    </div>
                                                </div>
                                                <a href="#"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                            </div>
                                            <div class="form-group mb-30">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">Submit &amp; Register</button>
                                            </div>
                                            <p class="font-xs text-muted"><strong>Note:</strong>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy</p>
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
    {{-- <section class="section-box shop-template mt-60">
        <div class="container">
          <div class="row mb-100">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
              <h3>Create an account</h3>
              <p class="font-md color-gray-500">Access to all features. No credit card required.</p>
              <div class="form-register mt-30 mb-30">
                <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                    @csrf
                <div class="form-group">
                  <label class="mb-5 font-sm color-gray-700">Full Name *</label>
                  <input class="form-control" type="text" name="name" placeholder="Name" id="name" value="{{ old('name') }}">
                  @error('name')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                </div>

                <div class="form-group">
                  <label class="mb-5 font-sm color-gray-700">Username *</label>
                  <input class="form-control"  name="username" placeholder="Username" id="username" value="{{ old('username') }}">
                  @error('username')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                </div>

                <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Email *</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                                                      <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                  @enderror
                  </div>
                  <div class="form-group">
                    <label class="mb-5 font-sm color-gray-700">Phone *</label>
                    <input class="form-control" type="number" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                    @error('phone')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                  </div>
                <div class="form-group">
                  <label class="mb-5 font-sm color-gray-700">Password *</label>
                  <input class="form-control" type="password" name="password" placeholder="Password" id="password" autocomplete="new-password">
                  <span>password must be at least 8 characters</span>
                                                @error('password')
                                                    <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                @enderror
                </div>
                <div class="form-group">
                  <label class="mb-5 font-sm color-gray-700">Re-Password *</label>
                  <input class="form-control" type="password" placeholder="Confirm password" name="password_confirmation">
                  @error('password')
                  <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
              @enderror
                </div>
                <div class="form-group">
                  <label>
                    <input class="checkagree" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">By clicking Register button, you agree our terms and policy,
                  </label>
                </div>
                <div class="form-group">
                  <button class="font-md-bold btn btn-buy" type="submit" name="login">Submit &amp; Register</button>
                </div>
                </form>
                <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Already have an account?</span><a class="font-xs color-brand-3 font-medium" href="{{route('login')}}"> Login In</a></div>
              </div>
            </div>

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
      </section> --}}
      <div class="container-fluid py-5 page-header">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="display-3 fw-bold">Bokcho</h2>
                    <h5 class="display-6 fw-semibold">Happing Shopping</h5>
                    <div class="d-flex justify-content-center mt-3">
                        <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                        <p class="m-0 px-2">-</p>
                        <p class="m-0">Sign Up</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Sign In Start -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h2>Create an account</h2>
            <span>Already have an account? <a href="{{ route('login') }}"><small>Sign In</small></a></span>
            <form class="row g-3 mt-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="col-md-12">
                    <label for="name" class="form-label fw-semibold">Full Name <span
                            class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" placeholder="Name" id="name" value="{{ old('name') }}" required>
                            @error('name')
                                                              <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                          @enderror
                </div>
                <div class="col-md-12">
                    <label for="username" class="form-label fw-semibold">Username <span
                            class="text-danger">*</span></label>
                            <input class="form-control"  name="username" placeholder="Username" id="username" value="{{ old('username') }}" required>
                            @error('username')
                                                              <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                          @enderror
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label fw-semibold">Email <span
                            class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
                                                              <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                          @enderror
                </div>
                <div class="col-md-12">
                    <label for="number" class="form-label fw-semibold">Phone <span
                            class="text-danger">*</span></label>
                            <input class="form-control" type="number" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
                            @error('phone')
                                                            <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                        @enderror
                </div>
                <div class="col-md-12">
                    <label for="pa" class="form-label fw-semibold">Password <span
                            class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" placeholder="Password" id="password" autocomplete="new-password" required>
                            <span>password must be at least 8 characters</span>
                                                          @error('password')
                                                              <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                                                          @enderror
                </div>
                <div class="col-md-12">
                    <label for="re-password" class="form-label fw-semibold">Re-Password <span
                            class="text-danger">*</span></label>
                            <input class="form-control" type="password" placeholder="Confirm password" name="password_confirmation" required>
                            @error('password')
                            <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                </div>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">By clicking Register button, you
                            agree our terms and policy,</label>
                    </div>
                </div>
                <div class="col-md-12 my-3">
                    <button type="submit" class="btn btn-primary px-5 py-2">Submit & Register</button>
                </div>
            </form>
            </div>

        </div>
    </div>
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
</script>

@endpush
