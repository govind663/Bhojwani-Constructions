{{-- Required meta tags --}}
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

{{-- SEO --}}
<meta name="description" content="Bhojwani Construction">
<meta name="keywords" content="Bhojwani Construction, Bhojwani, Bhojwani-Construction">
<meta name="author" content="Bhojwani Construction, Bhojwani, Bhojwani-Construction">

{{-- CSRF Token --}}
<meta name="csrf-token" content="content">
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

{{-- Title --}}
<title>@yield('title')</title>

<!-- favicons Icons -->
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/favicon-32x32.png') }}" />

{{-- Google Font --}}
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/animate/animate.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/fontawesome/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-ui/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jarallax/jarallax.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/nouislider/nouislider.pips.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/tiny-slider/tiny-slider.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/wallpi-icons/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />

{{-- Main Style --}}
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

{{-- Toaster Message --}}
<script src="{{ asset('toaster/js/jquery.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('toaster/css/toastr.min.css') }}" />
<script src="{{ asset('toaster/js/toastr.min.js') }}"></script>
