
<!-- Jquery -->
<script src="{{ asset('FrontEnd') }}/assect/js/jquery-3.7.1.js"></script>

<!-- Owl Carousel -->
<script src="{{ asset('FrontEnd') }}/assect/js/owl.carousel.min.js"></script>
<script src="{{ asset('FrontEnd') }}/assets/js/select2.min.js"></script>
 <!-- Count down-->
 <script src="{{ asset('FrontEnd') }}/assets/js/counterup.js"></script>
 <script src="{{ asset('FrontEnd') }}/assets/js/jquery.countdown.min.js"></script>
 <!-- Count down--><script src="{{ asset('FrontEnd') }}/assect/js/jquery.elevatezoom.js"></script>
<!-- Custom Js -->
<script src="{{ asset('FrontEnd') }}/assect/js/custom.js"></script>
<script src="{{ asset('FrontEnd') }}/assect/js/sweetalert2@11.js"></script>
<script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

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
            function buyNow(id, qty=0) {
    addToCartDirect(id, true, qty);
}
    function addToCartDirect(id, redirectToCheckout, qty=null) {
    var product_name = $('#' + id + '-product_pname').val();
    var quantity = 1;
    if(qty > 1){
        quantity = qty;
    }

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

            if ($.isEmptyObject(data.error)) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1200
                });
                Toast.fire({
                    type: 'success',
                    title: data.success
                });

                if (redirectToCheckout) {
                    // Redirect to the checkout page
                    window.location.href = '/checkout';
                }
            } else {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 1200
                });
                Toast.fire({
                    type: 'error',
                    title: data.error
                });
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
        </script>
<script>
    function search_result_hide(){
        $(".searchProducts").slideUp();
    }

    function search_result_show(){
        $(".searchProducts").slideDown();
    }

    $("body").on("keyup", ".search", function(){
        // alert('ok');
        let text = $(".search").val();
        if(text.length == 0){
            text = $('#mobile_search').val();
        }
        console.log(text);
        let category_id = $("#searchCategory").val();
        // alert(category_id);
        // console.log(text);

        if(text.length > 0){
            $.ajax({
                data: {search: text,},
                url : "/search-product",
                method : 'get',
                beforSend : function(request){
                    return request.setReuestHeader('X-CSRF-Token',("meta[name='csrf-token']"))

                },
                success:function(result){
                    // console.log(result);
                    $(".searchProducts").html(result);
                }

            }); // end ajax
        } // end if
        if (text.length < 1 ) $(".searchProducts").html("");
    }); // end function
</script>
<script>
    document.getElementById('downloadButton').addEventListener('click', function () {
      // Get the HTML content of your invoice
      var invoiceContent = document.getElementById('downloadinvoice').innerHTML;

      // Convert HTML to PDF
      html2pdf(invoiceContent, {
        margin: 10,
        filename: 'invoice.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
      });
    });
  </script>
