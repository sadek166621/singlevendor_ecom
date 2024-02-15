{{-- <!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('FrontEnd.include.style')
    <style>
        .invoice-3 .invoice-header {
            /* background: url(../imgs/invoice/header-bg-2.jpg) top left no-repeat; */
            /* background-size: cover; */
            /* color: #fff; */

            padding: 30px;
        }
        .invoice .invoice-top {
            padding: 15px 150px 25px 150px;
        }
        .invoice-content .invoice-btn-section {
    text-align: center;
    margin-top: 30px;
}
.invoice-content .btn-custom:hover {
    color: #fff;
}.invoice-content .btn-custom {
    border: none;
    z-index: 1;
}
.invoice-content .btn-download {
    background: #3BB77E;
}

.invoice {
    background: #fff !important;
}
    </style>
</head>

<body>
    <div class="invoice invoice-content invoice-3 bg-white">
        <div class="back-top-home hover-up mt-30 ml-30">
            {{-- <a class="hover-up" href="{{ route('home') }}"><i class="fi-rs-home mr-5"></i> Homepage</a> -
        </div>
        <div class="container bg-white">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner">
                        <div class="invoice-info" id="invoice_wrapper">
                            <div class="invoice-header bg-white">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="invoice-name">
                                            <div class="logo w-50">
                                                <a href="{{route('home')}}">
                                                    @php
                                                        $logo = get_setting('site_footer_logo');
                                                    @endphp
                                                    @if($logo != null)
                                                        <img src="{{ asset(get_setting('site_footer_logo')->value ?? 'null') }}" style="max-width: 200px !important;" alt="{{ env('APP_NAME') }}">
                                                    @else
                                                        <img src="{{ asset('upload/no_image.jpg') }}" alt="{{ env('APP_NAME') }}" style="max-width: 200px !important;">
                                                    @endif
                                                </a>
                                                <div>
                                                    <strong>{{ get_setting('business_name')->value ?? ''}}</strong> <br />
                                                    {{-- {{ get_setting('business_address')->value ?? ''}}<br> --
                                                    <abbr title="Phone">Phone:</abbr> {{ get_setting('phone')->value ?? ''}}<br>
                                                    <abbr title="Email">Email: </abbr>{{ get_setting('email')->value ?? ''}}<br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="invoice-numb">
                                            <h4 class="invoice-header-1 mb-10 mt-20">Invoice No:<span class="text-heading">{{ $order->invoice_no }}</span></h4>
                                            <strong class="text-mute">Invoice Data:</strong> {{ \Carbon\Carbon::parse($order->date)->isoFormat('MMM Do YYYY')}}<br />
                                            <strong class="text-mute">Payment Method:</strong> @if($order->payment_method == 'cod') Cash On Delivery @else {{ $order->payment_method }} @endif<br />
                                            <strong class="text-mute">Status:</strong> <span class="">{{ $order->delivery_status }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="invoice-top bg-white">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="invoice-number">
                                            <h4 class="invoice-title-1 mb-10">Bill To</h4>
                                            <p class="invoice-addr-1 text-capitalize">
                                                {{-- @if($order->user->name)
                                                    <strong>{{ $order->user->name ?? '' }}</strong> <br />
                                                @else
                                                    <strong>{{ $order->name ?? '' }}</strong> <br />
                                                @endif --
                                                <strong>{{ $order->name ?? '' }}</strong> <br />
                                                {{ $order->address ?? '' }}<br>
                                                {{ $order->upazilla->name_en ?? '' }}, {{ $order->district->district_name_en ?? '' }}, {{ $order->division->division_name_en ?? '' }}<br>
                                                {{-- @if($order->user->phone)
                                                    <abbr title="Phone">Phone:</abbr> {{ $order->user->phone ?? ''}}<br>
                                                @else
                                                    <abbr title="Phone">Phone:</abbr> {{ $order->phone ?? ''}}<br>
                                                @endif --
                                                <abbr title="Phone">Phone:</abbr> {{ $order->phone ?? ''}}<br>

                                                {{-- @if($order->user->email)
                                                    <abbr title="Email">Email: </abbr>{{ $order->user->email ?? ''}}<br>
                                                @else
                                                    <abbr title="Email">Email: </abbr>{{ $order->email ?? ''}}<br>
                                                @endif --
                                                <abbr title="Email">Email: </abbr>{{ $order->email ?? ''}}<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-center bg-white">
                                <div class="table-responsive">
                                    <table class="table table-striped invoice-table">
                                        <thead class="bg-active">
                                            <tr>
                                                <th>Item Item</th>
                                                <th class="text-center">Unit Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-right">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($order->order_details as $order_detail)
                                                <tr>
                                                    <td>
                                                        <div class="item-desc-1">
                                                            <span>{{$order_detail->product->name_en ?? ' '}}</span>
                                                            <span>
                                                                @if($order_detail->is_varient && count(json_decode($order_detail->variation))>0)
                                                                    @foreach(json_decode($order_detail->variation) as $varient)
                                                                        <span>{{ $varient->attribute_name }} : <span class="d-inline-block fw-normal ms-1">{{ $varient->attribute_value }}</span></span>
                                                                    @endforeach
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">{{$order_detail->
                                                    price ?? ''}}</td>
                                                    <td class="text-center">{{$order_detail->
                                                    qty ?? ''}}</td>
                                                    <td class="text-right">{{ ($order_detail->price * $order_detail->
                                                        qty) ?? ' ' }}</td>
                                                </tr>
                                                @endforeach
                                                 <tr>
                                                    <td colspan="3" class="text-end f-w-600">SubTotal</td>
                                                    <td class="text-right">{{ $order->sub_total ?? ' ' }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-end f-w-600">Shipping cost:</td>
                                                    <td class="text-right">{{ $order->shipping_charge ?? '' }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-end f-w-600">Discount:</td>
                                                    <td class="text-right">{{ $order->discount ?? '0.00' }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-end f-w-600">Grand Total</td>
                                                    <td class="text-right f-w-600">{{ ($order->grand_total-$order->discount) ?? ' '}}</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-bottom mb-5 bg-white">
                                <div class="row">
                                    <div class="col-sm-6">
                                        {{-- <div>
                                            <h3 class="invoice-title-1">Important Note</h3>
                                            <ul class="important-notes-list-1">
                                                <li>All amounts shown on this invoice are in BDT</li>
                                                <li>finance charge of 1.5% will be made on unpaid balances after 30 days.</li>
                                                <li>Once order done, money can't refund</li>
                                                <li>Delivery might delay due to some external dependency</li>
                                            </ul>
                                        </div> -
                                    </div>
                                    <div class="col-sm-6 col-offsite">
                                        <div class="text-end">
                                            <p class="mb-0 text-13">Thank you for your Order</p>
                                            <p><strong>{{ get_setting('business_name')->value ?? ' '}}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-btn-section clearfix d-print-none">
                            <a id="invoice_download_btn"  class="btn btn-lg btn-custom btn-download hover-up"> <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-download.svg') }}" alt="" /> Download </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('FrontEnd.include.script')



</body>

</html> --}}
<!DOCTYPE html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="SkyDreamIT">

<style>
                    /*--------------------------------------------------------------
                >> TABLE OF CONTENTS:
                ----------------------------------------------------------------
                1. Normalize
                2. Typography
                3. Invoice General Style
                --------------------------------------------------------------*/
                /*--------------------------------------------------------------
                2. Normalize
                ----------------------------------------------------------------*/
                @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;display=swap");

                *,
                ::after,
                ::before {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                }

                html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
                }

                /* Sections
                ========================================================================== */
                /**
                * Remove the margin in all browsers.
                */
                body {
                margin: 0;
                }

                /**
                * Render the `main` element consistently in IE.
                */
                main {
                display: block;
                }

                /**
                * Correct the font size and margin on `h1` elements within `section` and
                * `article` contexts in Chrome, Firefox, and Safari.
                */
                h1 {
                font-size: 2em;
                margin: 0.67em 0;
                }

                /* Grouping content
                ========================================================================== */
                /**
                * 1. Add the correct box sizing in Firefox.
                * 2. Show the overflow in Edge and IE.
                */
                hr {
                -webkit-box-sizing: content-box;
                box-sizing: content-box;
                /* 1 */
                height: 0;
                /* 1 */
                overflow: visible;
                /* 2 */
                }

                /**
                * 1. Correct the inheritance and scaling of font size in all browsers.
                * 2. Correct the odd `em` font sizing in all browsers.
                */
                pre {
                font-family: monospace, monospace;
                /* 1 */
                font-size: 1em;
                /* 2 */
                }

                /* Text-level semantics
                ========================================================================== */
                /**
                * Remove the gray background on active links in IE 10.
                */
                a {
                background-color: transparent;
                }

                /**
                * 1. Remove the bottom border in Chrome 57-
                * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
                */
                abbr[title] {
                border-bottom: none;
                /* 1 */
                text-decoration: underline;
                /* 2 */
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
                /* 2 */
                }

                /**
                * Add the correct font weight in Chrome, Edge, and Safari.
                */
                b,
                strong {
                font-weight: bolder;
                }

                /**
                * 1. Correct the inheritance and scaling of font size in all browsers.
                * 2. Correct the odd `em` font sizing in all browsers.
                */
                code,
                kbd,
                samp {
                font-family: monospace, monospace;
                /* 1 */
                font-size: 1em;
                /* 2 */
                }

                /**
                * Add the correct font size in all browsers.
                */
                small {
                font-size: 80%;
                }

                /**
                * Prevent `sub` and `sup` elements from affecting the line height in
                * all browsers.
                */
                sub,
                sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline;
                }

                sub {
                bottom: -0.25em;
                }

                sup {
                top: -0.5em;
                }

                /* Embedded content
                ========================================================================== */
                /**
                * Remove the border on images inside links in IE 10.
                */
                img {
                border-style: none;
                }

                /* Forms
                ========================================================================== */
                /**
                * 1. Change the font styles in all browsers.
                * 2. Remove the margin in Firefox and Safari.
                */
                button,
                input,
                optgroup,
                select,
                textarea {
                font-family: inherit;
                /* 1 */
                font-size: 100%;
                /* 1 */
                line-height: 1.15;
                /* 1 */
                margin: 0;
                /* 2 */
                }

                /**
                * Show the overflow in IE.
                * 1. Show the overflow in Edge.
                */
                button,
                input {
                /* 1 */
                overflow: visible;
                }

                /**
                * Remove the inheritance of text transform in Edge, Firefox, and IE.
                * 1. Remove the inheritance of text transform in Firefox.
                */
                button,
                select {
                /* 1 */
                text-transform: none;
                }

                /**
                * Correct the inability to style clickable types in iOS and Safari.
                */
                button,
                [type=button],
                [type=reset],
                [type=submit] {
                -webkit-appearance: button;
                }

                /**
                * Remove the inner border and padding in Firefox.
                */
                button::-moz-focus-inner,
                [type=button]::-moz-focus-inner,
                [type=reset]::-moz-focus-inner,
                [type=submit]::-moz-focus-inner {
                border-style: none;
                padding: 0;
                }

                /**
                * Restore the focus styles unset by the previous rule.
                */
                button:-moz-focusring,
                [type=button]:-moz-focusring,
                [type=reset]:-moz-focusring,
                [type=submit]:-moz-focusring {
                outline: 1px dotted ButtonText;
                }

                /**
                * Correct the padding in Firefox.
                */
                fieldset {
                padding: 0.35em 0.75em 0.625em;
                }

                /**
                * 1. Correct the text wrapping in Edge and IE.
                * 2. Correct the color inheritance from `fieldset` elements in IE.
                * 3. Remove the padding so developers are not caught out when they zero out
                *    `fieldset` elements in all browsers.
                */
                legend {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                /* 1 */
                color: inherit;
                /* 2 */
                display: table;
                /* 1 */
                max-width: 100%;
                /* 1 */
                padding: 0;
                /* 3 */
                white-space: normal;
                /* 1 */
                }

                /**
                * Add the correct vertical alignment in Chrome, Firefox, and Opera.
                */
                progress {
                vertical-align: baseline;
                }

                /**
                * Remove the default vertical scrollbar in IE 10+.
                */
                textarea {
                overflow: auto;
                }

                /**
                * 1. Add the correct box sizing in IE 10.
                * 2. Remove the padding in IE 10.
                */
                [type=checkbox],
                [type=radio] {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                /* 1 */
                padding: 0;
                /* 2 */
                }

                /**
                * Correct the cursor style of increment and decrement buttons in Chrome.
                */
                [type=number]::-webkit-inner-spin-button,
                [type=number]::-webkit-outer-spin-button {
                height: auto;
                }

                /**
                * 1. Correct the odd appearance in Chrome and Safari.
                * 2. Correct the outline style in Safari.
                */
                [type=search] {
                -webkit-appearance: textfield;
                /* 1 */
                outline-offset: -2px;
                /* 2 */
                }

                /**
                * Remove the inner padding in Chrome and Safari on macOS.
                */
                [type=search]::-webkit-search-decoration {
                -webkit-appearance: none;
                }

                /**
                * 1. Correct the inability to style clickable types in iOS and Safari.
                * 2. Change font properties to `inherit` in Safari.
                */
                ::-webkit-file-upload-button {
                -webkit-appearance: button;
                /* 1 */
                font: inherit;
                /* 2 */
                }

                /* Interactive
                ========================================================================== */
                /*
                * Add the correct display in Edge, IE 10+, and Firefox.
                */
                details {
                display: block;
                }

                /*
                * Add the correct display in all browsers.
                */
                summary {
                display: list-item;
                }

                /* Misc
                ========================================================================== */
                /**
                * Add the correct display in IE 10+.
                */
                template {
                display: none;
                }

                /**
                * Add the correct display in IE 10.
                */
                [hidden] {
                display: none;
                }

                /*--------------------------------------------------------------
                2. Typography
                ----------------------------------------------------------------*/
                body,
                html {
                color: #666;
                font-family: "Inter", sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.6em;
                overflow-x: hidden;
                background-color: #f5f6fa;
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                clear: both;
                color: #111;
                padding: 0;
                margin: 0 0 20px 0;
                font-weight: 500;
                line-height: 1.2em;
                }

                h1 {
                font-size: 60px;
                }

                h2 {
                font-size: 48px;
                }

                h3 {
                font-size: 30px;
                }

                h4 {
                font-size: 24px;
                }

                h5 {
                font-size: 18px;
                }

                h6 {
                font-size: 16px;
                }

                p,
                div {
                margin-top: 0;
                line-height: 1.5em;
                }

                p {
                margin-bottom: 15px;
                }

                ul {
                margin: 0 0 25px 0;
                padding-left: 20px;
                list-style: disc;
                }

                ol {
                padding-left: 20px;
                margin-bottom: 25px;
                }

                dfn,
                cite,
                em,
                i {
                font-style: italic;
                }

                blockquote {
                margin: 0 15px;
                font-style: italic;
                font-size: 20px;
                line-height: 1.6em;
                margin: 0;
                }

                address {
                margin: 0 0 15px;
                }

                img {
                border: 0;
                max-width: 100%;
                height: auto;
                vertical-align: middle;
                }

                a {
                color: inherit;
                text-decoration: none;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                }

                a:hover {
                color: #007aff;
                }

                button {
                color: inherit;
                -webkit-transition: all 0.3s ease;
                transition: all 0.3s ease;
                }

                a:hover {
                text-decoration: none;
                color: inherit;
                }

                table {
                width: 100%;
                caption-side: bottom;
                border-collapse: collapse;
                }

                th {
                text-align: left;
                }

                td {
                border-top: 1px solid #dbdfea;
                }

                td {
                padding: 10px 10px;
                line-height: 1.55em;
                }

                th {
                padding: 10px 10px;
                line-height: 1.55em;
                }

                dl {
                margin-bottom: 25px;
                }

                dl dt {
                font-weight: 600;
                }

                b,
                strong {
                font-weight: bold;
                }

                pre {
                color: #666;
                border: 1px solid #dbdfea;
                font-size: 18px;
                padding: 25px;
                border-radius: 5px;
                }

                kbd {
                font-size: 100%;
                background-color: #666;
                border-radius: 5px;
                }

                a:hover {
                color: #007aff;
                }

                ul {
                padding-left: 15px;
                }

                /*--------------------------------------------------------------
                3. Invoice General Style
                ----------------------------------------------------------------*/
                .tm_f10 {
                font-size: 10px;
                }

                .tm_f11 {
                font-size: 11px;
                }

                .tm_f12 {
                font-size: 12px;
                }

                .tm_f13 {
                font-size: 13px;
                }

                .tm_f14 {
                font-size: 14px;
                }

                .tm_f15 {
                font-size: 15px;
                }

                .tm_f16 {
                font-size: 16px;
                }

                .tm_f17 {
                font-size: 17px;
                }

                .tm_f18 {
                font-size: 18px;
                }

                .tm_f19 {
                font-size: 19px;
                }

                .tm_f20 {
                font-size: 20px;
                }

                .tm_f21 {
                font-size: 21px;
                }

                .tm_f22 {
                font-size: 22px;
                }

                .tm_f23 {
                font-size: 23px;
                }

                .tm_f24 {
                font-size: 24px;
                }

                .tm_f25 {
                font-size: 25px;
                }

                .tm_f26 {
                font-size: 26px;
                }

                .tm_f27 {
                font-size: 27px;
                }

                .tm_f28 {
                font-size: 28px;
                }

                .tm_f29 {
                font-size: 29px;
                }

                .tm_f30 {
                font-size: 30px;
                }

                .tm_f40 {
                font-size: 40px;
                }

                .tm_f50 {
                font-size: 50px;
                }

                .tm_light {
                font-weight: 300;
                }

                .tm_normal {
                font-weight: 400;
                }

                .tm_medium {
                font-weight: 500;
                }

                .tm_semi_bold {
                font-weight: 600;
                }

                .tm_bold {
                font-weight: 700;
                }

                .tm_m0 {
                margin: 0px;
                }

                .tm_mb0 {
                margin-bottom: 0px;
                }

                .tm_mb1 {
                margin-bottom: 1px;
                }

                .tm_mb2 {
                margin-bottom: 2px;
                }

                .tm_mb3 {
                margin-bottom: 3px;
                }

                .tm_mb4 {
                margin-bottom: 4px;
                }

                .tm_mb5 {
                margin-bottom: 5px;
                }

                .tm_mb6 {
                margin-bottom: 6px;
                }

                .tm_mb7 {
                margin-bottom: 7px;
                }

                .tm_mb8 {
                margin-bottom: 8px;
                }

                .tm_mb9 {
                margin-bottom: 9px;
                }

                .tm_mb10 {
                margin-bottom: 10px;
                }

                .tm_mb11 {
                margin-bottom: 11px;
                }

                .tm_mb12 {
                margin-bottom: 12px;
                }

                .tm_mb13 {
                margin-bottom: 13px;
                }

                .tm_mb14 {
                margin-bottom: 14px;
                }

                .tm_mb15 {
                margin-bottom: 15px;
                }

                .tm_mb16 {
                margin-bottom: 16px;
                }

                .tm_mb17 {
                margin-bottom: 17px;
                }

                .tm_mb18 {
                margin-bottom: 18px;
                }

                .tm_mb19 {
                margin-bottom: 19px;
                }

                .tm_mb20 {
                margin-bottom: 20px;
                }

                .tm_mb21 {
                margin-bottom: 21px;
                }

                .tm_mb22 {
                margin-bottom: 22px;
                }

                .tm_mb23 {
                margin-bottom: 23px;
                }

                .tm_mb24 {
                margin-bottom: 24px;
                }

                .tm_mb25 {
                margin-bottom: 25px;
                }

                .tm_mb26 {
                margin-bottom: 26px;
                }

                .tm_mb27 {
                margin-bottom: 27px;
                }

                .tm_mb28 {
                margin-bottom: 28px;
                }

                .tm_mb29 {
                margin-bottom: 29px;
                }

                .tm_mb30 {
                margin-bottom: 30px;
                }

                .tm_mb40 {
                margin-bottom: 40px;
                }

                .tm_pt25 {
                padding-top: 25px;
                }

                .tm_pt0 {
                padding-top: 0;
                }

                .tm_radius_6_0_0_6 {
                border-radius: 6px 0 0 6px;
                }

                .tm_radius_0_6_6_0 {
                border-radius: 0 6px 6px 0;
                }

                .tm_radius_0 {
                border-radius: 0 !important;
                }

                .tm_width_1 {
                width: 10%;
                }

                .tm_width_1 input {
                width: 100%;
                }

                .tm_width_2 {
                width: 10%;
                }

                .tm_width_3 {
                width: 25%;
                }

                .tm_width_3 input {
                width: 100% !important;
                }

                .tm_width_4 {
                width: 2%;
                }

                .tm_width_5 {
                width: 30%;
                }

                .tm_width_6 {
                width: 50%;
                }

                .tm_width_6 input {
                width: 100% !important;
                }

                .tm_width_7 {
                width: 50%;
                }

                .tm_width_8 {
                width: 66.66666667%;
                }

                .tm_width_9 {
                width: 75%;
                }

                .tm_width_10 {
                width: 83.33333333%;
                }

                .tm_width_11 {
                width: 91.66666667%;
                }

                .tm_width_12 {
                width: 100%;
                }

                .tm_border {
                border: 1px solid #dbdfea;
                }

                .tm_border_bottom {
                border-bottom: 1px solid #dbdfea;
                }

                .tm_border_top {
                border-top: 1px solid #dbdfea;
                }

                .tm_border_left {
                border-left: 1px solid #dbdfea;
                }

                .tm_border_right {
                border-right: 1px solid #dbdfea;
                }

                .tm_round_border {
                border: 1px solid #dbdfea;
                overflow: hidden;
                border-radius: 6px;
                }

                .tm_accent_color,
                .tm_accent_color_hover:hover {
                color: #007aff;
                }

                .tm_accent_bg,
                .tm_accent_bg_hover:hover {
                background-color: #007aff;
                }

                .tm_accent_bg_10 {
                background-color: rgba(0, 122, 255, 0.1);
                }

                .tm_accent_bg_20 {
                background-color: rgba(0, 122, 255, 0.15);
                }

                .tm_green_bg {
                background-color: #34c759;
                }

                .tm_green_bg_15 {
                background-color: rgba(52, 199, 89, 0.1);
                }

                .tm_primary_bg,
                .tm_primary_bg_hover:hover {
                background-color: #111;
                }

                .tm_primary_bg_2 {
                background-color: #000036;
                }

                .tm_danger_color {
                color: red;
                }

                .tm_primary_color {
                color: #111;
                }

                .tm_secondary_color {
                color: #666;
                }

                .tm_ternary_color {
                color: #b5b5b5;
                }

                .tm_white_color {
                color: #fff;
                }

                .tm_white_color_60 {
                color: rgba(255, 255, 255, 0.6);
                }

                .tm_gray_bg {
                background: #f5f6fa;
                }

                .tm_ternary_bg {
                background-color: #b5b5b5;
                }

                .tm_accent_10_bg {
                background-color: rgba(0, 122, 255, 0.1);
                }

                .tm_accent_border {
                border-color: #007aff;
                }

                .tm_accent_border_10 {
                border-color: rgba(0, 122, 255, 0.1);
                }

                .tm_accent_border_20 {
                border-color: rgba(0, 122, 255, 0.2);
                }

                .tm_accent_border_30 {
                border-color: rgba(0, 122, 255, 0.3);
                }

                .tm_accent_border_40 {
                border-color: rgba(0, 122, 255, 0.4);
                }

                .tm_accent_border_50 {
                border-color: rgba(0, 122, 255, 0.5);
                }

                .tm_primary_border {
                border-color: #111;
                }

                .tm_gray_border {
                border-color: #f5f6fa;
                }

                .tm_primary_border_2 {
                border-color: #000036;
                }

                .tm_secondary_border {
                border-color: #666;
                }

                .tm_ternary_border {
                border-color: #b5b5b5;
                }

                .tm_border_color {
                border-color: #dbdfea;
                }

                .tm_border_1 {
                border-style: solid;
                border-width: 1px;
                }

                .tm_body_lineheight {
                line-height: 1.5em;
                }

                .tm_invoice_in {
                position: relative;
                z-index: 100;
                }

                .tm_container {
                max-width: 880px;
                padding: 30px 15px;
                margin-left: auto;
                margin-right: auto;
                position: relative;
                }

                .tm_text_center {
                text-align: center;
                }

                .tm_text_uppercase {
                text-transform: uppercase;
                }

                .tm_text_right {
                text-align: right;
                }

                .tm_align_center {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                }

                .tm_border_bottom_0 {
                border-bottom: 0;
                }

                .tm_border_top_0 {
                border-top: 0;
                }

                .tm_table_baseline {
                vertical-align: baseline;
                }

                .tm_border_none {
                border: none !important;
                }

                .tm_flex {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                }

                .tm_justify_between {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                }

                .tm__align_center {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                }

                .tm_border_left_none {
                border-left-width: 0;
                }

                .tm_border_right_none {
                border-right-width: 0;
                }

                .tm_table_responsive {
                overflow-x: auto;
                }

                .tm_table_responsive>table {
                min-width: 600px;
                }

                .tm_50_col>* {
                width: 50%;
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                }

                .tm_no_border {
                border: none !important;
                }

                .tm_grid_row {
                display: grid;
                /* grid-gap: 10px 20px; */
                list-style: none;
                padding: 0;
                }

                .tm_col_2 {
                grid-template-columns: repeat(2, 1fr);
                }

                .tm_col_3 {
                grid-template-columns: repeat(3, 1fr);
                }

                .tm_col_4 {
                grid-template-columns: repeat(4, 1fr);
                }

                .tm_max_w_150 {
                max-width: 150px;
                }

                .tm_left_auto {
                margin-left: auto;
                }

                hr {
                background: #dbdfea;
                height: 1px;
                border: none;
                margin: 0;
                }

                .tm_invoice {
                background: #fff;
                border-radius: 10px;
                padding: 50px;
                }

                .tm_invoice_footer {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                }

                .tm_invoice_footer table {
                margin-top: -1px;
                }

                .tm_invoice_footer .tm_left_footer {
                width: 58%;
                padding: 10px 15px;
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                }

                .tm_invoice_footer .tm_right_footer {
                width: 42%;
                }

                .tm_note {
                margin-top: 30px;
                font-style: italic;
                }

                .tm_font_style_normal {
                font-style: normal;
                }

                .tm_sign img {
                max-height: 45px;
                }

                .tm_coffee_shop_img {
                position: absolute;
                height: 200px;
                opacity: 0.04;
                top: 40px;
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
                }

                .tm_coffee_shop_img img {
                max-height: 100%;
                }

                .tm_invoice.tm_style1 .tm_invoice_right {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                width: 60%;
                }

                .tm_invoice.tm_style1 .tm_invoice_table {
                grid-gap: 1px;
                }

                .tm_invoice.tm_style1 .tm_invoice_table>* {
                border: 1px solid #dbdfea;
                margin: -1px;
                padding: 8px 15px 10px;
                }

                .tm_invoice.tm_style1 .tm_invoice_head {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                }

                .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right div {
                line-height: 1em;
                }

                .tm_invoice.tm_style1 .tm_invoice_info {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                }

                .tm_invoice.tm_style1 .tm_invoice_info_2 {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                border-top: 1px solid #dbdfea;
                border-bottom: 1px solid #dbdfea;
                padding: 11px 0;
                }

                .tm_invoice.tm_style1 .tm_invoice_seperator {
                min-height: 18px;
                border-radius: 1.6em;
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
                margin-right: 20px;
                }

                .tm_invoice.tm_style1 .tm_invoice_info_list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                }

                .tm_invoice.tm_style1 .tm_invoice_info_list>*:not(:last-child) {
                margin-right: 20px;
                }

                .tm_invoice.tm_style1 .tm_logo img {
                max-height: 50px;
                }

                .tm_invoice.tm_style1 .tm_logo.tm_size1 img {
                max-height: 60px;
                }

                .tm_invoice.tm_style1 .tm_logo.tm_size2 img {
                max-height: 70px;
                }

                .tm_invoice.tm_style1 .tm_grand_total {
                padding: 8px 15px;
                }

                .tm_invoice.tm_style1 .tm_box_3 {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                }

                .tm_invoice.tm_style1 .tm_box_3>* {
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
                }

                .tm_invoice.tm_style1 .tm_box_3 ul {
                margin: 0;
                padding: 0;
                list-style: none;
                }

                .tm_invoice.tm_style1 .tm_box_3 ul li {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                }

                .tm_invoice.tm_style1 .tm_box_3 ul li:not(:last-child) {
                margin-bottom: 5px;
                }

                .tm_invoice.tm_style1 .tm_box_3 ul span {
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                }

                .tm_invoice.tm_style1 .tm_box_3 ul span:first-child {
                margin-right: 5px;
                }

                .tm_invoice.tm_style1 .tm_box_3 ul span:last-child {
                -webkit-box-flex: 1;
                -ms-flex: 1;
                flex: 1;
                }

                .tm_invoice.tm_style2 .tm_invoice_head {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                border-bottom: 1px solid #dbdfea;
                padding-bottom: 15px;
                position: relative;
                }

                .tm_invoice.tm_style2 .tm_invoice_left {
                width: 20%;
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                }

                .tm_invoice.tm_style2 .tm_invoice_right {
                width: 80%;
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                }

                .tm_invoice.tm_style2 .tm_invoice_info {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                }

                .tm_invoice.tm_style2 .tm_invoice_info_left {
                width: 30%;
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                }

                .tm_invoice.tm_style2 .tm_invoice_info_right {
                width: 70%;
                -webkit-box-flex: 0;
                -ms-flex: none;
                flex: none;
                }

                .tm_invoice.tm_style2 .tm_logo img {
                max-height: 70px;
                }

                .tm_invoice.tm_style2 .tm_invoice_title {
                line-height: 0.8em;
                }

                .tm_invoice.tm_style2 .tm_invoice_info_in {
                padding: 12px 20px;
                border-radius: 10px;
                }

                .tm_invoice.tm_style2 .tm_card_note {
                display: inline-block;
                padding: 6px 15px;
                border-radius: 6px;
                margin-bottom: 10px;
                margin-top: 5px;
                }

                .tm_invoice.tm_style2 .tm_invoice_footer .tm_left_footer {
                padding-left: 0;
                }

                .tm_invoice.tm_style1.tm_type1 {
                padding: 0px 50px 30px;
                position: relative;
                overflow: hidden;
                border-radius: 0;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
                height: 110px;
                position: relative;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_shape_bg {
                position: absolute;
                height: 100%;
                width: 70%;
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
                top: 0px;
                right: -100px;
                overflow: hidden;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_shape_bg img {
                height: 100%;
                width: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                -webkit-transform: skewX(-35deg) translateX(-45px);
                transform: skewX(-35deg) translateX(-45px);
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_right {
                position: relative;
                z-index: 2;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_logo img {
                max-height: 70px;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                margin-right: 0;
                border-radius: 0;
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
                position: absolute;
                height: 100%;
                width: 57.5%;
                right: -60px;
                overflow: hidden;
                border: none;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
                height: 100%;
                width: 100%;
                -o-object-fit: cover;
                object-fit: cover;
                -webkit-transform: skewX(-35deg);
                transform: skewX(-35deg);
                -webkit-transform: skewX(-35deg) translateX(-10px);
                transform: skewX(-35deg) translateX(-10px);
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
                position: relative;
                padding: 4px 0;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_card_note,
                .tm_invoice.tm_style1.tm_type1 .tm_invoice_info_list {
                position: relative;
                z-index: 1;
                }

                .tm_invoice.tm_style3 {
                padding: 0;
                }

                .tm_invoice.tm_style3 .tm_invoice_head {
                padding: 60px 50px;
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                border-radius: 10px 10px 0 0;
                }

                .tm_invoice.tm_style3 .tm_head_address {
                border-left: 2px solid;
                padding: 0px 0 0px 15px;
                }

                .tm_invoice.tm_style3 .tm_invoice_left,
                .tm_invoice.tm_style3 .tm_invoice_right {
                position: relative;
                z-index: 1;
                }

                .tm_invoice.tm_style3 .tm_watermark_title {
                position: absolute;
                left: 0;
                top: 0;
                line-height: 1em;
                font-size: 165px;
                font-weight: bold;
                padding: 20px 30px 20px 30px;
                letter-spacing: 18px;
                opacity: 0.08;
                }

                .tm_invoice.tm_style3 .tm_invoice_info {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-box-align: end;
                -ms-flex-align: end;
                align-items: flex-end;
                padding: 0 50px;
                margin-top: -25px;
                padding-bottom: 40px;
                }

                .tm_invoice.tm_style3 .tm_invoice_info_left {
                padding: 20px 30px;
                position: relative;
                z-index: 2;
                }

                .tm_invoice.tm_style3 .tm_invoice_details {
                padding: 0 50px 50px 50px;
                }

                .tm_invoice.tm_style3 .tm_table.tm_style1 th {
                border-color: rgba(255, 255, 255, 0.231372549);
                }

                .tm_invoice.tm_style3 .tm_invoice_footer .tm_left_footer {
                padding: 20px 15px;
                }

                .duration {
                text-align: center;
                }

                /* table input{
                width: 50px;
                text-align: center;
                } */

                table input {
                text-align: center;
                }

                .add_btn {
                display: flex;
                justify-content: end;
                margin-bottom: 20px;
                }

                .button_1 {
                background: transparent;
                font-weight: 900;
                border: none;
                color: white;
                padding: 6px 8px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                }

                .tm-btn {
                margin-top: 10px;
                text-decoration: none;
                font-weight: 600;
                color: green !important;
                }

                .tm-btn-1 {
                font-size: 16px;
                border: 1px solid #007aff;
                padding: 5px 10px;
                margin-top: 10px;
                text-decoration: none;
                font-weight: 600;
                color: green !important;
                background-color: rgba(0, 122, 255, 0.1);
                }


                @media (min-width: 500px) {
                .tm_invoice.tm_style1.tm_type2 {
                    position: relative;
                    overflow: hidden;
                    border-radius: 0;
                }

                .tm_invoice.tm_style1.tm_type2 td {
                    padding-top: 12px;
                    padding-bottom: 12px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_pt0 {
                    padding-top: 0;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_bars {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    position: absolute;
                    top: 0px;
                    left: 50%;
                    -webkit-transform: translateX(-50%);
                    transform: translateX(-50%);
                    overflow: hidden;
                    padding: 0 15px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_bars span {
                    height: 100px;
                    width: 5px;
                    display: block;
                    margin: -15px 20px 0;
                    -webkit-transform: rotate(-40deg);
                    transform: rotate(-40deg);
                }

                .tm_invoice.tm_style1.tm_type2 .tm_bars.tm_type1 {
                    top: initial;
                    bottom: 0;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_bars.tm_type1 span {
                    margin: 0 20px 0;
                    position: relative;
                    bottom: -15px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape {
                    height: 230px;
                    width: 250px;
                    position: absolute;
                    top: 0;
                    right: 0;
                    overflow: hidden;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape .tm_shape_in {
                    position: absolute;
                    height: 350px;
                    width: 350px;
                    -webkit-transform: rotate(40deg);
                    transform: rotate(40deg);
                    top: -199px;
                    left: 67px;
                    overflow: hidden;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape.tm_type1 {
                    top: initial;
                    bottom: 0;
                    right: initial;
                    left: 0;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape.tm_type1 .tm_shape_in {
                    top: 135px;
                    left: -153px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape_2 {
                    height: 120px;
                    width: 120px;
                    border: 5px solid currentColor;
                    padding: 20px;
                    position: absolute;
                    bottom: -30px;
                    right: 77px;
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape_2 .tm_shape_2_in {
                    height: 100%;
                    width: 100%;
                    border: 20px solid currentColor;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape_2.tm_type1 {
                    left: -76px;
                    right: initial;
                    bottom: 245px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape_2.tm_type1 .tm_shape_2_in {
                    border-width: 6px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_invoice_right {
                    width: 40%;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_logo img {
                    max-height: 65px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_invoice_footer {
                    margin-bottom: 120px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_right_footer {
                    position: relative;
                    padding: 6px 0;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_right_footer table {
                    position: relative;
                    z-index: 2;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_left_footer {
                    padding: 30px 15px;
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape_3 {
                    position: absolute;
                    top: 0;
                    left: -40px;
                    height: 100%;
                    width: calc(100% + 150px);
                    -webkit-transform: skewX(35deg);
                    transform: skewX(35deg);
                }

                .tm_invoice.tm_style1.tm_type2 .tm_shape_4 {
                    position: absolute;
                    bottom: 200px;
                    left: 0;
                    height: 200px;
                    width: 200px;
                }
                }

                .tm_invoice.tm_style1.tm_type3 {
                position: relative;
                overflow: hidden;
                border-radius: 0;
                }

                .tm_invoice.tm_style1.tm_type3 .tm_shape_1 {
                position: absolute;
                top: -1px;
                left: 0;
                }

                .tm_invoice.tm_style1.tm_type3 .tm_shape_2 {
                position: absolute;
                bottom: 0;
                left: 0;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                }

                .tm_invoice.tm_style1.tm_type3 .tm_logo img {
                max-height: 60px;
                }

                .tm_invoice.tm_style1.tm_type3 .tm_invoice_head.tm_mb20 {
                margin-bottom: 65px;
                }

                .tm_invoice.tm_style1.tm_type3 .tm_invoice_info_list {
                position: relative;
                padding: 10px 0 10px 40px;
                }

                .tm_invoice.tm_style1.tm_type3 .tm_invoice_info_list_bg {
                position: absolute;
                height: 100%;
                width: calc(100% + 100px);
                top: 0;
                left: 0;
                border-radius: 20px 0 0 0px;
                -webkit-transform: skewX(-35deg);
                transform: skewX(-35deg);
                }

                .tm_invoice.tm_style2.tm_type1 {
                padding-top: 0;
                padding-bottom: 0;
                border-width: 40px 0 0;
                border-style: solid;
                position: relative;
                overflow: hidden;
                }

                .tm_invoice.tm_style2.tm_type1.tm_small_border {
                border-width: 7px 0 0;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
                position: absolute;
                height: 100%;
                width: 32%;
                -webkit-transform: skewX(-30deg);
                transform: skewX(-30deg);
                top: 0px;
                left: -100px;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_invoice_head {
                padding-top: 15px;
                border-bottom: none;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_logo {
                position: relative;
                z-index: 2;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_bottom_invoice {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                padding: 15px 50px 20px;
                border-top: 1px solid #dbdfea;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin: 30px -50px 0;
                }

                .tm_invoice_content {
                position: relative;
                z-index: 10;
                }

                .tm_invoice_wrap {
                position: relative;
                }

                .tm_note_list li:not(:last-child) {
                margin-bottom: 5px;
                }

                .tm_list.tm_style1 {
                list-style: none;
                padding: 0;
                margin: 0;
                }

                .tm_list.tm_style1 svg {
                width: 16px;
                height: initial;
                }

                .tm_list.tm_style1 .tm_list_icon {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                left: 0;
                top: 3px;
                }

                .tm_list.tm_style1 li {
                padding-left: 25px;
                position: relative;
                }

                .tm_list.tm_style1 li:not(:last-child) {
                margin-bottom: 5px;
                }

                .tm_list.tm_style1.tm_text_right li {
                padding-left: 0;
                padding-right: 25px;
                }

                .tm_list.tm_style1.tm_text_right .tm_list_icon {
                left: initial;
                right: 0;
                }

                .tm_section_heading {
                border-width: 0 0 1px 0;
                /* border-style: solid; */
                }

                .tm_heading_border {
                border-width: 0 0 1px 0;
                border-style: solid;
                }

                .tm_section_heading>span {
                display: inline-block;
                padding: 8px 15px;
                border-radius: 7px 7px 0 0;
                }

                .tm_section_heading .tm_curve_35 {
                margin-left: 12px;
                margin-right: 0;
                }

                .tm_section_heading .tm_curve_35_1 {
                margin-left: 0px;
                margin-right: 12px;
                }

                .tm_section_heading .tm_curve_35_2 {
                margin-left: -12px;
                margin-right: 12px;
                }

                .tm_section_heading .tm_curve_35 span {
                display: inline-block;
                }

                .tm_section_heading .tm_curve_35_1 span {
                display: inline-block;
                }

                .tm_section_heading .tm_curve_35_2 span {
                display: inline-block;
                }

                .tm_section_heading .tm_curve_35_1 span .select-clients {
                background: transparent;
                border: hidden;
                color: #007aff;
                font-weight: 500;
                font-size: 14px;
                }

                .tm_padd_15_20 {
                padding: 15px 20px;
                }

                .tm_padd_8_20 {
                padding: 8px 20px;
                }

                .tm_padd_20 {
                padding: 20px;
                }

                .tm_padd_15 {
                padding: 15px;
                }

                .tm_padd_10 {
                padding: 10px;
                }

                .tm_padd_5 {
                padding: 5px;
                }

                .tm_curve_35 {
                -webkit-transform: skewX(-35deg);
                transform: skewX(-35deg);
                padding: 12px 20px 12px 30px;
                margin-left: 22px;
                margin-right: 22px;
                }

                .tm_curve_35_1 {
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
                padding: 12px 20px 12px 30px;
                margin-left: 22px;
                margin-right: 22px;
                }

                .tm_curve_35_2 {
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
                padding: 12px 20px 12px 30px;
                margin-left: 22px;
                margin-right: 22px;
                }

                .tm_curve_35>* {
                -webkit-transform: skewX(35deg);
                transform: skewX(35deg);
                }

                .tm_curve_35_1>* {
                -webkit-transform: skewX(-35deg);
                transform: skewX(-35deg);
                }

                .tm_curve_35_2>* {
                -webkit-transform: skewX(-35deg);
                transform: skewX(-35deg);
                }

                .tm_dark_invoice_body {
                background-color: #18191a;
                }

                .tm_dark_invoice {
                background: #252526;
                color: rgba(255, 255, 255, 0.65);
                }

                .tm_dark_invoice .tm_primary_color {
                color: rgba(255, 255, 255, 0.9);
                }

                .tm_dark_invoice .tm_secondary_color {
                color: rgba(255, 255, 255, 0.65);
                }

                .tm_dark_invoice .tm_ternary_color {
                color: rgba(255, 255, 255, 0.4);
                }

                .tm_dark_invoice .tm_gray_bg {
                background: rgba(255, 255, 255, 0.08);
                }

                .tm_dark_invoice .tm_border_color,
                .tm_dark_invoice .tm_round_border,
                .tm_dark_invoice td,
                .tm_dark_invoice th,
                .tm_dark_invoice .tm_border_top,
                .tm_dark_invoice .tm_border_bottom {
                border-color: rgba(255, 255, 255, 0.1);
                }

                .tm_dark_invoice+.tm_invoice_btns {
                background: #252526;
                border-color: #252526;
                }

                @media (min-width: 1000px) {
                .tm_invoice_btns {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    margin-top: 0px;
                    margin-left: 20px;
                    position: absolute;
                    left: 100%;
                    top: 0;
                    -webkit-box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                    box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                    border: 3px solid #fff;
                    border-radius: 6px;
                    background-color: #fff;
                }

                .tm_invoice_btn {
                    display: -webkit-inline-box;
                    display: -ms-inline-flexbox;
                    display: inline-flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    border: none;
                    font-weight: 600;
                    cursor: pointer;
                    padding: 0;
                    background-color: transparent;
                    position: relative;
                }

                .tm_invoice_btn svg {
                    width: 24px;
                }

                .tm_invoice_btn .tm_btn_icon {
                    padding: 0;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    height: 42px;
                    width: 42px;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                }

                .tm_invoice_btn .tm_btn_text {
                    position: absolute;
                    left: 100%;
                    background-color: #111;
                    color: #fff;
                    padding: 3px 12px;
                    display: inline-block;
                    margin-left: 10px;
                    border-radius: 5px;
                    top: 50%;
                    -webkit-transform: translateY(-50%);
                    transform: translateY(-50%);
                    font-weight: 500;
                    min-height: 28px;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    opacity: 0;
                    visibility: hidden;
                }

                .tm_invoice_btn .tm_btn_text:before {
                    content: "";
                    height: 10px;
                    width: 10px;
                    position: absolute;
                    background-color: #111;
                    -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
                    left: -3px;
                    top: 50%;
                    margin-top: -6px;
                    border-radius: 2px;
                }

                .tm_invoice_btn:hover .tm_btn_text {
                    opacity: 1;
                    visibility: visible;
                }

                .tm_invoice_btn:not(:last-child) {
                    margin-bottom: 3px;
                }

                .tm_invoice_btn.tm_color1 {
                    background-color: rgba(235, 154, 154, 0.1);
                    color: #e98e8e;
                    border-radius: 0 0 5px 5px;
                }

                .tm_invoice_btn.tm_color1:hover {
                    background-color: rgba(235, 154, 154, 0.2);
                }

                .tm_invoice_btn.tm_color2 {
                    background-color: rgba(0, 122, 255, 0.1);
                    color: #007aff;
                    border-radius: 5px 5px 0 0;
                }

                .tm_invoice_btn.tm_color2:hover {
                    background-color: rgba(0, 122, 255, 0.2);
                }

                .tm_invoice_btn.tm_color3 {
                    background-color: rgba(52, 199, 89, 0.1);
                    color: #34c759;
                    border-radius: 0 0 5px 5px;
                }

                .tm_invoice_btn.tm_color3:hover {
                    background-color: rgba(52, 199, 89, 0.2);
                }
                }

                @media (max-width: 999px) {
                .tm_invoice_btns {
                    display: -webkit-inline-box;
                    display: -ms-inline-flexbox;
                    display: inline-flex;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    margin-top: 0px;
                    margin-top: 20px;
                    -webkit-box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                    box-shadow: -2px 0 24px -2px rgba(43, 55, 72, 0.05);
                    border: 3px solid #fff;
                    border-radius: 6px;
                    background-color: #fff;
                    position: relative;
                    left: 50%;
                    -webkit-transform: translateX(-50%);
                    transform: translateX(-50%);
                }

                .tm_invoice_btn {
                    display: -webkit-inline-box;
                    display: -ms-inline-flexbox;
                    display: inline-flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    border: none;
                    font-weight: 600;
                    cursor: pointer;
                    padding: 0;
                    background-color: transparent;
                    position: relative;
                    border-radius: 5px;
                    padding: 6px 15px;
                }

                .tm_invoice_btn svg {
                    width: 24px;
                }

                .tm_invoice_btn .tm_btn_icon {
                    padding: 0;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    margin-right: 8px;
                }

                .tm_invoice_btn:not(:last-child) {
                    margin-right: 3px;
                }

                .tm_invoice_btn.tm_color1 {
                    background-color: rgba(0, 122, 255, 0.1);
                    color: #007aff;
                }

                .tm_invoice_btn.tm_color1:hover {
                    background-color: rgba(0, 122, 255, 0.2);
                }

                .tm_invoice_btn.tm_color2 {
                    background-color: rgba(52, 199, 89, 0.1);
                    color: #34c759;
                }

                .tm_invoice_btn.tm_color2:hover {
                    background-color: rgba(52, 199, 89, 0.2);
                }
                }

                @media (max-width: 767px) {
                .tm_col_4 {
                    grid-template-columns: repeat(1, 1fr);
                }

                .tm_col_2_md {
                    grid-template-columns: repeat(2, 1fr);
                }

                .tm_m0_md {
                    margin: 0;
                }

                .tm_mb10_md {
                    margin-bottom: 10px;
                }

                .tm_mb15_md {
                    margin-bottom: 15px;
                }

                .tm_mb20_md {
                    margin-bottom: 20px;
                }

                .tm_mobile_hide {
                    display: none;
                }

                .tm_invoice {
                    padding: 30px 20px;
                }

                .tm_invoice .tm_right_footer {
                    width: 100%;
                }

                .tm_invoice_footer {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: reverse;
                    -ms-flex-direction: column-reverse;
                    flex-direction: column-reverse;
                }

                .tm_invoice_footer .tm_left_footer {
                    width: 100%;
                    border-top: 1px solid #dbdfea;
                    margin-top: -1px;
                    padding: 15px 0;
                }

                .tm_invoice.tm_style2 .tm_card_note {
                    margin-top: 0;
                }

                .tm_note.tm_text_center {
                    text-align: left;
                }

                .tm_note.tm_text_center p br {
                    display: none;
                }

                .tm_invoice_footer.tm_type1 {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                }

                .tm_invoice.tm_style2 .tm_invoice_head {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                }

                .tm_invoice.tm_style2 .tm_invoice_head>* {
                    width: 100%;
                }

                .tm_invoice.tm_style2 .tm_invoice_head .tm_invoice_left {
                    margin-bottom: 15px;
                }

                .tm_invoice.tm_style2 .tm_invoice_head .tm_text_right {
                    text-align: left;
                }

                .tm_invoice.tm_style2 .tm_invoice_info {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                }

                .tm_invoice.tm_style2 .tm_invoice_info>* {
                    width: 100%;
                }

                .tm_invoice.tm_style1.tm_type1 {
                    padding: 30px 20px;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
                    height: initial;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    -webkit-box-align: start;
                    -ms-flex-align: start;
                    align-items: flex-start;
                    padding-left: 15px;
                    padding-right: 15px;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                    width: 100%;
                    -webkit-transform: initial;
                    transform: initial;
                    right: 0;
                    top: 0;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_logo img {
                    max-height: 60px;
                }

                .tm_invoice.tm_style2.tm_type1 {
                    border-width: 20px 0 0;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
                    width: 250px;
                    height: 80px;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_invoice_head .tm_text_center {
                    text-align: left;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_logo {
                    top: -8px;
                    margin-bottom: 15px;
                }

                .tm_invoice.tm_style2 .tm_invoice_info_in {
                    padding: 12px 15px;
                }

                .tm_border_none_md {
                    border: none !important;
                }

                .tm_border_left_none_md {
                    border-left-width: 0;
                }

                .tm_border_right_none_md {
                    border-right-width: 0;
                }

                .tm_padd_left_15_md {
                    padding-left: 15px !important;
                }

                .tm_invoice.tm_style2 .tm_logo img {
                    max-height: 50px;
                }

                .tm_curve_35 {
                    -webkit-transform: skewX(0deg);
                    transform: skewX(0deg);
                    margin-left: 0;
                    margin-right: 0;
                }

                .tm_curve_35>* {
                    -webkit-transform: inherit;
                    transform: inherit;
                }

                .tm_curve_35_1 {
                    -webkit-transform: skewX(0deg);
                    transform: skewX(0deg);
                    margin-left: 0;
                    margin-right: 0;
                }

                .tm_curve_35_1>* {
                    -webkit-transform: inherit;
                    transform: inherit;
                }

                .tm_curve_35_2 {
                    -webkit-transform: skewX(0deg);
                    transform: skewX(0deg);
                    margin-left: 0;
                    margin-right: 0;
                }

                .tm_curve_35_2>* {
                    -webkit-transform: inherit;
                    transform: inherit;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator,
                .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
                    -webkit-transform: initial;
                    transform: initial;
                }

                .tm_section_heading .tm_curve_35 {
                    margin-left: 0;
                }

                .tm_shape_2.tm_type1 {
                    display: none;
                }

                .tm_invoice.tm_style3 .tm_invoice_info {
                    padding: 0px 20px 40px;
                }

                .tm_invoice.tm_style3 .tm_invoice_details {
                    padding: 0px 20px 50px;
                }

                .tm_invoice.tm_style3 .tm_invoice_head {
                    padding: 60px 20px;
                }

                .tm_invoice.tm_style3 .tm_watermark_title {
                    letter-spacing: 5px;
                    font-size: 20vw;
                    padding: 27px 20px;
                    top: 50%;
                    -webkit-transform: translateY(-50%);
                    transform: translateY(-50%);
                    line-height: 1em;
                }
                }

                @media (max-width: 500px) {
                .tm_border_none_sm {
                    border: none !important;
                }

                .tm_flex_column_sm {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                }

                .tm_align_start_sm {
                    -webkit-box-align: start;
                    -ms-flex-align: start;
                    align-items: flex-start;
                }

                .tm_m0_sm {
                    margin-bottom: 0;
                }

                .tm_invoice.tm_style1 .tm_logo {
                    margin-bottom: 10px;
                }

                .tm_invoice.tm_style1 .tm_invoice_head {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                }

                .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_left,
                .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right {
                    width: 100%;
                }

                .tm_invoice.tm_style1 .tm_invoice_head .tm_invoice_right {
                    text-align: left;
                }

                .tm_list.tm_style2 li {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                }

                .tm_list.tm_style2 li>* {
                    padding: 5px 20px;
                }

                .tm_col_2,
                .tm_col_3 {
                    grid-template-columns: repeat(1, 1fr);
                }

                .tm_col_2_sm {
                    grid-template-columns: repeat(2, 1fr);
                }

                .tm_table.tm_style1.tm_type1 {
                    padding: 0px 20px;
                }

                .tm_box2_wrap {
                    grid-template-columns: repeat(1, 1fr);
                }

                .tm_box.tm_style1.tm_type1 {
                    max-width: 100%;
                    width: 100%;
                }

                .tm_invoice.tm_style1 .tm_invoice_left {
                    max-width: 100%;
                }

                .tm_f50 {
                    font-size: 30px;
                }

                .tm_invoice.tm_style1 .tm_invoice_info {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: reverse;
                    -ms-flex-direction: column-reverse;
                    flex-direction: column-reverse;
                }

                .tm_invoice.tm_style1 .tm_invoice_seperator {
                    -webkit-box-flex: 0;
                    -ms-flex: none;
                    flex: none;
                    width: 100%;
                    margin-right: 0;
                    min-height: 5px;
                }

                .tm_invoice.tm_style1 .tm_invoice_info_list {
                    width: 100%;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                }

                .tm_invoice.tm_style1 .tm_invoice_seperator+.tm_invoice_info_list {
                    margin-bottom: 5px;
                }

                .tm_f30 {
                    font-size: 22px;
                }

                .tm_invoice.tm_style1 .tm_box_3 {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                }

                .tm_invoice.tm_style1 .tm_box_3 span br {
                    display: none;
                }

                .tm_invoice.tm_style1 .tm_box_3>*:not(:last-child) {
                    margin-bottom: 15px;
                }

                .tm_invoice.tm_style1 .tm_box_3 ul li {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                }

                .tm_invoice.tm_style1 .tm_box_3 ul li:not(:last-child) {
                    margin-bottom: 5px;
                }

                .tm_invoice.tm_style3 .tm_watermark_title {
                    font-size: 18.4vw;
                    padding: 10px 15px;
                    top: 0;
                    -webkit-transform: initial;
                    transform: initial;
                    line-height: 1em;
                }

                .tm_invoice.tm_style3 .tm_invoice_head,
                .tm_invoice.tm_style3 .tm_invoice_info {
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    -webkit-box-align: start;
                    -ms-flex-align: start;
                    align-items: flex-start;
                }

                .tm_invoice.tm_style3 .tm_invoice_right {
                    margin-top: 30px;
                }

                .tm_invoice.tm_style3 .tm_text_right {
                    text-align: left;
                }

                .tm_invoice.tm_style3 .tm_invoice_info_right {
                    margin-top: 20px;
                }

                .tm_invoice.tm_style3 .tm_table.tm_style1 {
                    margin-bottom: 10px;
                }
                }

                /*--------------------------------------------------------------
                Will apply only print window
                ----------------------------------------------------------------*/
                @media print {
                .tm_gray_bg {
                    background-color: #f5f6fa !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_ternary_bg {
                    background-color: #b5b5b5 !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_primary_bg {
                    background-color: #111 !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_secondary_bg {
                    background-color: #666 !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_accent_bg {
                    background-color: #007aff;
                    -webkit-print-color-adjust: exact;
                }

                .tm_accent_bg_10 {
                    background-color: rgba(0, 122, 255, 0.1) !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_accent_bg_20 {
                    background-color: rgba(0, 122, 255, 0.15) !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_white_color {
                    color: #fff !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_accent_color {
                    color: #007aff !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_ternary_color {
                    color: #b5b5b5 !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_hide_print {
                    display: none !important;
                }

                .tm_dark_invoice .tm_gray_bg {
                    background-color: #111 !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_dark_invoice {
                    background: #111 !important;
                    color: rgba(255, 255, 255, 0.65) !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_dark_invoice .tm_gray_bg {
                    background: rgba(255, 255, 255, 0.05) !important;
                    -webkit-print-color-adjust: exact;
                }

                hr {
                    background: #dbdfea !important;
                    -webkit-print-color-adjust: exact;
                }

                .tm_col_4,
                .tm_col_4.tm_col_2_md {
                    grid-template-columns: repeat(4, 1fr);
                }

                .tm_col_2_md {
                    grid-template-columns: repeat(2, 1fr);
                }

                .tm_mb1 {
                    margin-bottom: 1px;
                }

                .tm_mb2 {
                    margin-bottom: 2px;
                }

                .tm_mb3 {
                    margin-bottom: 3px;
                }

                .tm_mb4 {
                    margin-bottom: 4px;
                }

                .tm_mb5 {
                    margin-bottom: 5px;
                }

                .tm_mb6 {
                    margin-bottom: 6px;
                }

                .tm_mb7 {
                    margin-bottom: 7px;
                }

                .tm_mb8 {
                    margin-bottom: 8px;
                }

                .tm_mb9 {
                    margin-bottom: 9px;
                }

                .tm_mb10 {
                    margin-bottom: 10px;
                }

                .tm_mb11 {
                    margin-bottom: 11px;
                }

                .tm_mb12 {
                    margin-bottom: 12px;
                }

                .tm_mb13 {
                    margin-bottom: 13px;
                }

                .tm_mb14 {
                    margin-bottom: 14px;
                }

                .tm_mb15 {
                    margin-bottom: 15px;
                }

                .tm_mb16 {
                    margin-bottom: 16px;
                }

                .tm_mb17 {
                    margin-bottom: 17px;
                }

                .tm_mb18 {
                    margin-bottom: 18px;
                }

                .tm_mb19 {
                    margin-bottom: 19px;
                }

                .tm_mb20 {
                    margin-bottom: 20px;
                }

                .tm_mb21 {
                    margin-bottom: 21px;
                }

                .tm_mb22 {
                    margin-bottom: 22px;
                }

                .tm_mb23 {
                    margin-bottom: 23px;
                }

                .tm_mb24 {
                    margin-bottom: 24px;
                }

                .tm_mb25 {
                    margin-bottom: 25px;
                }

                .tm_mb26 {
                    margin-bottom: 26px;
                }

                .tm_mb27 {
                    margin-bottom: 27px;
                }

                .tm_mb28 {
                    margin-bottom: 28px;
                }

                .tm_mb29 {
                    margin-bottom: 29px;
                }

                .tm_mb30 {
                    margin-bottom: 30px;
                }

                .tm_mb40 {
                    margin-bottom: 40px;
                }

                .tm_mobile_hide {
                    display: block;
                }

                .tm_invoice {
                    padding: 10px;
                }

                .tm_invoice .tm_right_footer {
                    width: 42%;
                }

                .tm_invoice_footer {
                    -webkit-box-orient: initial;
                    -webkit-box-direction: initial;
                    -ms-flex-direction: initial;
                    flex-direction: initial;
                }

                .tm_invoice_footer .tm_left_footer {
                    width: 58%;
                    padding: 10px 15px;
                    -webkit-box-flex: 0;
                    -ms-flex: none;
                    flex: none;
                    border-top: none;
                    margin-top: 0px;
                }

                .tm_invoice.tm_style2 .tm_card_note {
                    margin-top: 5px;
                }

                .tm_note.tm_text_center {
                    text-align: center;
                }

                .tm_note.tm_text_center p br {
                    display: initial;
                }

                .tm_invoice_footer.tm_type1 {
                    -webkit-box-orient: initial;
                    -webkit-box-direction: initial;
                    -ms-flex-direction: initial;
                    flex-direction: initial;
                }

                .tm_invoice.tm_style2 .tm_invoice_head {
                    -webkit-box-orient: initial;
                    -webkit-box-direction: initial;
                    -ms-flex-direction: initial;
                    flex-direction: initial;
                }

                .tm_invoice.tm_style2 .tm_invoice_head>.tm_invoice_left {
                    width: 20%;
                }

                .tm_invoice.tm_style2 .tm_invoice_head>.tm_invoice_right {
                    width: 80%;
                }

                .tm_invoice.tm_style2 .tm_invoice_head .tm_invoice_left {
                    margin-bottom: initial;
                }

                .tm_invoice.tm_style2 .tm_invoice_head .tm_text_right {
                    text-align: right;
                }

                .tm_invoice.tm_style2 .tm_invoice_info {
                    -webkit-box-orient: initial;
                    -webkit-box-direction: initial;
                    -ms-flex-direction: initial;
                    flex-direction: initial;
                }

                .tm_invoice.tm_style2 .tm_invoice_info>.tm_invoice_info_left {
                    width: 30%;
                }

                .tm_invoice.tm_style2 .tm_invoice_info>.tm_invoice_info_right {
                    width: 70%;
                }

                .tm_invoice.tm_style1.tm_type1 {
                    padding: 0px 20px 30px;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_head {
                    height: 110px;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_info {
                    padding: 4px 0;
                    -webkit-box-orient: initial;
                    -webkit-box-direction: initial;
                    -ms-flex-direction: initial;
                    flex-direction: initial;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                    top: initial;
                    margin-right: 0;
                    border-radius: 0;
                    -webkit-transform: skewX(35deg);
                    transform: skewX(35deg);
                    position: absolute;
                    height: 100%;
                    width: 57.5%;
                    right: -60px;
                    overflow: hidden;
                    border: none;
                }

                .tm_invoice.tm_style1.tm_type1 .tm_logo img {
                    max-height: 70px;
                }

                .tm_invoice.tm_style2.tm_type1 {
                    border-width: 20px 0 0;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_shape_bg {
                    height: 100%;
                    width: 42%;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_invoice_head .tm_text_center {
                    text-align: center;
                }

                .tm_invoice.tm_style2.tm_type1 .tm_logo {
                    top: initial;
                    margin-bottom: initial;
                }

                .tm_invoice.tm_style2 .tm_invoice_info_in {
                    padding: 12px 20px;
                }

                .tm_invoice.tm_style2 .tm_logo img {
                    max-height: 60px;
                }

                .tm_curve_35 {
                    -webkit-transform: skewX(-35deg);
                    transform: skewX(-35deg);
                    margin-left: 22px;
                    margin-right: 22px;
                }

                .tm_curve_35>* {
                    -webkit-transform: skewX(35deg);
                    transform: skewX(35deg);
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator {
                    -webkit-transform: skewX(35deg);
                    transform: skewX(35deg);
                }

                .tm_invoice.tm_style1.tm_type1 .tm_invoice_seperator img {
                    -webkit-transform: skewX(-35deg) translateX(-45px);
                    transform: skewX(-35deg) translateX(-45px);
                }

                .tm_section_heading .tm_curve_35 {
                    margin-left: 12px;
                }

                .tm_round_border {
                    border-top-width: 2px;
                }

                .tm_border_left_none_md {
                    border-left-width: 1px;
                }

                .tm_border_right_none_md {
                    border-right-width: 1px;
                }

                .tm_note {
                    margin-top: 30px;
                }

                .tm_pagebreak {
                    page-break-before: always;
                }

                .tm_invoice.tm_style3 {
                    padding: 0;
                }

                .tm_invoice.tm_style3 .tm_invoice_info {
                    padding: 0px 15px 40px;
                }

                .tm_invoice.tm_style3 .tm_invoice_details {
                    padding: 0px 15px 50px;
                }

                .tm_invoice.tm_style3 .tm_invoice_head {
                    padding: 60px 15px;
                }

                .tm_invoice.tm_style3 .tm_watermark_title {
                    letter-spacing: 5px;
                    font-size: 150px;
                    padding: 27px 15px 27px 15px;
                }
        }

            /*# sourceMappingURL=style.css.map */
</style>

</head>

<body>
    <div class="tm_container" >
      <div class="" style="display: flex; justify-content: space-between; padding: 8px 0px;">
        <div class="">
          <a style="color: green; font-weight: 900; font-size: 16px;" href="{{ route('home') }}"><i class="fa-solid fa-backward"></i> Back to
            Home</a>
        </div>

      </div>

      <div class="tm_invoice_wrap" style="border: 1px solid;" id="downloadinvoice">
        <div class="tm_invoice tm_style2 tm_type1 tm_accent_border tm_radius_0 tm_small_border" >
          <div class="tm_invoice_in">
            <div class="tm_invoice_head tm_mb20 tm_m0_md">
              <div class="tm_invoice_left">
                <div class="tm_logo">
                    @php
                                                        $logo = get_setting('site_footer_logo');
                                                    @endphp
                                                    @if($logo != null)
                                                        <img src="{{ asset(get_setting('site_footer_logo')->value ?? 'null') }}" style="max-width: 200px !important;" alt="{{ env('APP_NAME') }}">
                                                    @else
                                                        <img src="{{ asset('upload/no_image.jpg') }}" alt="{{ env('APP_NAME') }}" style="max-width: 200px !important;">
                                                    @endif
                </div>
              </div>
              <div class="tm_invoice_right">
                <div class="tm_grid_row tm_col_3">
                  <div class="tm_text_center">
                    <p class="tm_accent_color tm_mb0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"
                        fill="currentColor">
                        <path
                          d="M424 80H88a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h336a56.06 56.06 0 0056-56V136a56.06 56.06 0 00-56-56zm-14.18 92.63l-144 112a16 16 0 01-19.64 0l-144-112a16 16 0 1119.64-25.26L256 251.73l134.18-104.36a16 16 0 0119.64 25.26z" />
                      </svg>
                    </p>
                    {{ get_setting('email')->value ?? ''}}
                  </div>
                  <div class="tm_text_center">
                    <p class="tm_accent_color tm_mb0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"
                        fill="currentColor">
                        <path
                          d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z" />
                      </svg>
                    </p>
                    {{ get_setting('phone')->value ?? ''}}
                  </div>
                  <div class="tm_text_center">
                    <p class="tm_accent_color tm_mb0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"
                        fill="currentColor">
                        <circle cx="256" cy="192" r="32" />
                        <path
                          d="M256 32c-88.22 0-160 68.65-160 153 0 40.17 18.31 93.59 54.42 158.78 29 52.34 62.55 99.67 80 123.22a31.75 31.75 0 0051.22 0c17.42-23.55 51-70.88 80-123.22C397.69 278.61 416 225.19 416 185c0-84.35-71.78-153-160-153zm0 224a64 64 0 1164-64 64.07 64.07 0 01-64 64z" />
                      </svg>
                    </p>
                    {{ get_setting('business_address')->value ?? ''}}                  </div>
                </div>
              </div>
              <div class="tm_shape_bg tm_accent_bg_10 tm_border tm_accent_border_20"></div>
            </div>
            <div class="tm_invoice_info tm_mb30 tm_align_center">
              <div class="tm_invoice_info_left tm_mb20_md">
                <p class="tm_mb0">
                  <b class="tm_primary_color">Invoice No: </b>{{ $order->invoice_no }}<br>
                  <b class="tm_primary_color">Invoice Date: </b>{{ \Carbon\Carbon::parse($order->date)->isoFormat('MMM Do YYYY')}}
                </p>
              </div>
              <div class="tm_invoice_info_right">
                <div class="tm_border tm_accent_border_20 tm_radius_0 tm_accent_bg_10 tm_curve_35 tm_text_center">
                  <div>
                    <b class="tm_accent_color tm_f30 tm_bold tm_body_lineheight">  {{ get_setting('business_name')->value ?? ''}}</b>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="tm_f16 tm_section_heading tm_heading_border tm_accent_border_20 tm_mb0"><span
                class="tm_accent_bg_10 tm_radius_0 tm_curve_35 tm_border tm_accent_border_20 tm_border_bottom_0 tm_accent_color"><span>Invoice
                  To</span></span></h2>

            <form action="">
              <div class="tm_table tm_style1 tm_mb30">
                <div class="tm_border  tm_accent_border_20 tm_border_top_0">
                  <div class="tm_table_responsive">
                    <table>
                      <tbody>
                        <tr>
                          <td class="tm_width_6 tm_border_top_0">
                            <b class="tm_primary_color tm_medium">Name: </b>{{ $order->name ?? '' }}
                          </td>
                          <td class="tm_width_6 tm_border_top_0 tm_border_left tm_accent_border_20">
                            <b class="tm_primary_color tm_medium">Phone: </b> {{ $order->user->phone ?? ''}}
                          </td>
                        </tr>
                        <tr>
                          <td class="tm_width_6 tm_accent_border_20">
                            <b class="tm_primary_color tm_medium">Email: </b>{{ $order->email ?? ''}}
                          </td>
                          <td class="tm_width_6 tm_border_left tm_accent_border_20">
                            <b class="tm_primary_color tm_medium">Address: </b>{{ $order->address ?? '' }}
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tm_table tm_style1">
                <div class="tm_border tm_accent_border_20">
                  <div class="tm_table_responsive">
                    <table>
                      <thead>
                        <tr>
                          <th class="tm_width_4 tm_semi_bold tm_accent_color tm_accent_bg_10">SL</th>
                          <th class="tm_width_5 tm_semi_bold tm_accent_color tm_accent_bg_10">Item</th>
                          <th class="tm_width_3 tm_semi_bold tm_accent_color tm_accent_bg_10">Price</th>
                          <th class="tm_width_1 tm_semi_bold tm_accent_color tm_accent_bg_10">Quantity</th>
                          <th class="tm_width_2 tm_semi_bold tm_accent_color tm_accent_bg_10 tm_text_right">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($order->order_details as $order_detail)
                        <tr>
                          <td class="tm_width_4 tm_accent_border_20">1.</td>
                          <td class="tm_width_5 tm_accent_border_20">{{$order_detail->product->name_en ?? ' '}}
                            <!-- <button><span><i class="fa-solid fa-xmark tm-btn-2"></i></span></button> -->
                          </td>

                          <td class="tm_width_3 tm_accent_border_20">{{$order_detail->price ?? ''}}
                          </td>
                          <td class="tm_width_1 tm_accent_border_20">{{$order_detail->qty ?? ''}}</td>
                          </td>
                          <td class="tm_width_2 tm_accent_border_20 tm_text_right">{{ ($order_detail->price * $order_detail->qty) ?? ' ' }}</td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="tm_invoice_footer tm_mb15 tm_m0_md">
                  <div class="tm_left_footer">
                    <p class="tm_mb6"><b class="tm_primary_color">Payment info:</b></p>
                    <p class="tm_m0">Payment Method: Cash On Delivery</p>
                    <p class="tm_m0">Payment Status: Unpaid</p>
                  </div>
                  <div class="tm_right_footer">
                    <table class="tm_mb15 tm_m0_md">
                      <tbody>
                        <tr>
                          <td class="tm_width_3 tm_primary_color tm_border_none tm_medium">Subtotal :</td>
                          <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_medium">৳{{ $order->sub_total ?? ' ' }}</td>
                        </tr>
                        <tr>
                          <td class="tm_width_3 tm_primary_color tm_border_none tm_pt0">Shipping Cost:</td>
                          <td class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_pt0"> ৳{{ $order->shipping_charge ?? '' }}</td>
                        </tr>
                        <tr class="tm_accent_border_20 tm_border">
                          <td class="tm_width_3 tm_bold tm_f16 tm_border_top_0 tm_accent_color tm_accent_bg_10">Grand
                            Total
                          </td>
                          <td
                            class="tm_width_3 tm_bold tm_f16 tm_border_top_0 tm_accent_color tm_text_right tm_accent_bg_10">
                            ৳{{ ($order->grand_total-$order->discount) ?? ' '}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                {{-- <div class="tm_invoice_footer tm_type1">
                  <div class="tm_left_footer"></div>
                  <div class="tm_right_footer">
                    <div class="tm_sign tm_text_center">
                      <img src="assets/img/sign.svg" alt="Sign">
                      <p class="tm_m0 tm_ternary_color">Tushar Ahamed</p>
                      <p class="tm_m0 tm_f16 tm_primary_color">Accounts Manager</p>
                    </div>
                  </div>
                </div> --}}
              </div>
            </form>
            <div class="tm_bottom_invoice tm_accent_border_20">
              <div class="tm_bottom_invoice_left">
                <p class="tm_m0 tm_f18 tm_accent_color tm_mb5">Thank you for your Shopping.</p>
              </div>
              <div class="tm_bottom_invoice_right tm_mobile_hide">
                <div class="tm_logo">
                    @php
                    $logo = get_setting('site_footer_logo');
                @endphp
                @if($logo != null)
                    <img src="{{ asset(get_setting('site_footer_logo')->value ?? 'null') }}" style="max-width: 200px !important;" alt="{{ env('APP_NAME') }}">
                @else
                    <img src="{{ asset('upload/no_image.jpg') }}" alt="{{ env('APP_NAME') }}" style="max-width: 200px !important;">
                @endif
                </div>
              </div>
            </div>
         <hr style="
         margin: 0px -50px;
     ">
          </div>
        </div>
        <div class="tm_invoice_btns tm_hide_print">
          {{-- <a href="https://mail.google.com/" class="tm_invoice_btn tm_color1">
            <span class="tm_btn_icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 128 128">
                <path
                  d="M123.25 24.192c0-.018 0-.034-.005-.052s-.007-.063-.009-.094a1.734 1.734 0 0 0-.083-.408c-.006-.018 0-.037-.011-.055s-.01-.015-.013-.023a1.734 1.734 0 0 0-.227-.407c-.021-.028-.043-.053-.066-.08a1.755 1.755 0 0 0-.31-.294c-.012-.009-.022-.02-.034-.028a1.744 1.744 0 0 0-.414-.2c-.034-.012-.068-.022-.1-.032a1.733 1.733 0 0 0-.474-.073H6.5a1.733 1.733 0 0 0-.474.073c-.035.01-.068.02-.1.032a1.744 1.744 0 0 0-.414.2c-.012.008-.022.019-.034.028a1.755 1.755 0 0 0-.31.294c-.022.027-.045.052-.066.08a1.734 1.734 0 0 0-.227.407c0 .008-.01.015-.013.023s-.005.037-.011.055a1.734 1.734 0 0 0-.083.408c0 .032-.009.063-.009.094s-.005.034-.005.052v79.615c0 .023.006.045.007.068a1.737 1.737 0 0 0 .019.188c.008.051.015.1.027.152a1.74 1.74 0 0 0 .056.179c.017.047.033.094.054.139a1.729 1.729 0 0 0 .093.172c.024.04.048.081.075.119a1.743 1.743 0 0 0 .125.152c.033.036.066.072.1.106.021.019.037.042.059.061s.036.017.052.03a1.736 1.736 0 0 0 .452.263c.035.014.071.022.107.033a1.732 1.732 0 0 0 .488.085c.012 0 .023.006.035.006H121.501c.012 0 .023-.006.034-.006a1.732 1.732 0 0 0 .489-.085c.035-.011.07-.019.1-.033a1.736 1.736 0 0 0 .453-.263c.016-.013.036-.017.052-.03s.038-.042.059-.061c.036-.034.069-.069.1-.106a1.743 1.743 0 0 0 .125-.152c.027-.038.051-.078.075-.119a1.729 1.729 0 0 0 .093-.172c.021-.045.037-.092.054-.139a1.74 1.74 0 0 0 .056-.179c.012-.05.019-.1.027-.152a1.737 1.737 0 0 0 .019-.188c0-.023.007-.045.007-.068zM45.8 60.316l17.058 14.677a1.751 1.751 0 0 0 2.283 0L82.2 60.316l35.512 41.741H10.289zM8.25 99.052V28.007l34.9 30.026zm76.6-41.019 34.9-30.026v71.045zm31.931-32.091L81.276 56.493c-.006.005-.014.008-.02.014l-.019.02L64 71.358 46.763 56.527l-.019-.02-.02-.014-35.507-30.551z" />
              </svg>
            </span>
            <span class="tm_btn_text">Email</span>
          </a> --}}

          {{-- <a href="javascript:window.print()" class="tm_invoice_btn tm_color2">
            <span class="tm_btn_icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <path
                  d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                  fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor"
                  stroke-linejoin="round" stroke-width="32" />
                <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none"
                  stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                <circle cx="392" cy="184" r="24" fill='currentColor' />
              </svg>
            </span>
            <span class="tm_btn_text">Print</span>
          </a> --}}

          <button id="downloadButton" class="tm_invoice_btn tm_color3">
            <span class="tm_btn_icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <path
                  d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03"
                  fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
              </svg>
            </span>
            <span class="tm_btn_text">Download</span>
          </button>
        </div>
      </div>
    </div>
    @include('FrontEnd.include.script')

  </body>

</html>
