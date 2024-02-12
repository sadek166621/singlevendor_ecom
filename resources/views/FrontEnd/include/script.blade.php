
<!-- Jquery -->
<script src="{{ asset('FrontEnd') }}/assect/js/jquery-3.7.1.js"></script>

<!-- Owl Carousel -->
<script src="{{ asset('FrontEnd') }}/assect/js/owl.carousel.min.js"></script>
<script src="{{ asset('FrontEnd') }}/assets/js/vendors/select2.min.js"></script>
 <!-- Count down-->
 <script src="{{ asset('FrontEnd') }}/assets/js/vendors/counterup.js"></script>
 <script src="{{ asset('FrontEnd') }}/assets/js/vendors/jquery.countdown.min.js"></script>
 <!-- Count down--><script src="{{ asset('FrontEnd') }}/assets/js/vendors/jquery.elevatezoom.js"></script>
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

