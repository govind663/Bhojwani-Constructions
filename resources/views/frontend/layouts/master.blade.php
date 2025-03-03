<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Head Start -->
    <x-frontend.head />

    @stack('styles')
</head>

<body class="custom-cursor">
    {{-- Pre Loader Start --}}
    <x-frontend.pre-loader />
    {{-- Pre Loader End --}}

    {{-- Page Wrapper --}}
    <div class="page-wrapper">
        
        <!-- Header Start -->
        <x-frontend.header />
        <!-- Header End -->

        <!-- Start Main Content  -->
        @yield('content')
        <!-- End Main Content  -->

        <!-- Footer Start -->
        <x-frontend.footer />
        <!-- Footer End -->
    </div>
    <!-- Page Wrapper End -->

    <!-- back to top area start -->
    <x-frontend.back-to-top />
    <!-- back to top area end -->

    <!-- Start Main JS  -->
    <x-frontend.main-js />
    <!-- End Main JS  -->

    {{-- Custom Js --}}
    @stack('scripts')
</body>

</html>
