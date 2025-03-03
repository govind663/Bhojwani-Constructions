<header class="main-header main-header--two sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <a href="{{ route('frontend.home') }}">
                    <img src="{{ asset('frontend/assets/images/Bhojwani-logo.png') }}" alt="Bhojwani Logo">
                </a>
            </div>

            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">

                    <li>
                        <a href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>


                    <li class="dropdown">
                        <a href="#">Our Projects</a>
                        <ul>
                            <li><a href="#">Project Name</a></li>
                            <li><a href="#">Project Name</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Careers</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <a href="#" class="search-toggler d-flex align-items-center">
                    <div class="main-header__search">
                        <i class="icon-search-1" aria-hidden="true"></i>
                        <span class="sr-only">Search</span>
                    </div>
                </a>

                <a href="javascript:void(0);" class="wallpi-btn main-header__btn" data-toggle="modal" data-target="#enquiryModal">
                    <span>Enquire Now</span>
                </a>
            </div>
        </div>
    </div>
</header>