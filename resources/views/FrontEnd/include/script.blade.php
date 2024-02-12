
<!-- Jquery -->
<script src="{{ asset('FrontEnd') }}/assect/js/jquery-3.7.1.js"></script>

<!-- Owl Carousel -->
<script src="{{ asset('FrontEnd') }}/assect/js/owl.carousel.min.js"></script>
<script src="{{ asset('FrontEnd') }}/assets/js/select2.min.js"></script>
 <!-- Count down-->
 <script src="{{ asset('FrontEnd') }}/assets/js/counterup.js"></script>
 <script src="{{ asset('FrontEnd') }}/assets/js/jquery.countdown.min.js"></script>
 <!-- Count down--><script src="{{ asset('FrontEnd') }}/assets/js/jquery.elevatezoom.js"></script>
<!-- Custom Js -->
<script src="{{ asset('FrontEnd') }}/assect/js/custom.js"></script>
<script src="{{ asset('FrontEnd') }}/assect/js/sweetalert2@11.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Hide the "up" button initially
            $('.back-to-top').hide();

            // Show or hide the "up" button based on scroll position
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) { // You can adjust the scroll position threshold as needed
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });

            // Scroll to top when the button is clicked
            $('.back-to-top').click(function() {
                $('html, body').animate({scrollTop : 0}, 800);
                return false;
            });
        });
        </script>
        <script>
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
        </script>

