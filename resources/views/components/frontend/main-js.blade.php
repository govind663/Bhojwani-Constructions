<script src="{{ asset('frontend/assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('frontend/assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<!-- template js -->
<script src="{{ asset('frontend/assets/js/wallpi.js') }}"></script>

<!-- Enquire Now Modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".main-header__btn").addEventListener("click", function(event) {
            event.preventDefault();
            var enquiryModal = new bootstrap.Modal(document.getElementById("enquiryModal"));
            enquiryModal.show();
        });
    });
</script>

<!-- Contact Us Modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".wallpi-btn--request").addEventListener("click", function(event) {
            event.preventDefault();
            var myModal = new bootstrap.Modal(document.getElementById("myModal"));
            myModal.show();
        });
    });
</script>

<!-- Toaster JS -->
<script>
    $(document).ready(function () {
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.warning("{{ session('warning') }}");
        @endif
    });
</script>
