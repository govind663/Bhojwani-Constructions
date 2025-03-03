<section class="quick-support quick-support--two">
    <div class="container">
        <div class="quick-support__wrapper">
            <div class="row quick-support__row">
                <div class="quick-support__call">
                    <div class="quick-support__wrap d-flex align-items-center">
                        <i class="fab fa-whatsapp quick-support__icon"></i>
                        <div class="quick-support__help">
                            <p class="quick-support__help__text">Helpline and Support</p>
                            <a class="quick-support__help__number" href="tel:020-47159423">+91 20 47159423</a>
                        </div>
                    </div>
                </div>

                <div class="quick-support__reauest d-flex align-items-center justify-content-between">
                    <h3 class="quick-support__title">Connect with us for more information.
                    </h3>
                    {{-- <a href="#" class="wallpi-btn wallpi-btn--request" data-bs-toggle="modal" data-bs-target="#myModal"><span>Contact Now</span></a> --}}
                    <a href="javascript:void(0);" class="wallpi-btn wallpi-btn--request" data-toggle="modal" data-target="#myModal">
                        <span>Contact Now</span>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</section>

<footer class="main-footer background-black-3">
    <div class="main-footer__bg background-black-3" style="background-image: url({{ asset('frontend/assets/images/about-us/bg.webp') }});"></div>
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="footer-widget__col footer-widget__col--about">
                    <div class="footer-widget__col__content">
                        <a href="{{ route('frontend.home') }}" class="footer-widget__col__content__logo">
                            <img src="{{ asset('frontend/assets/images/Bhojwani-logo.png') }}" width="170" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="footer-widget__col footer-widget__col--post">
                    <div class="footer-widget__col__content">
                        <h5 class="footer-widget__col__content__title">Contact Us</h5>
                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Office No. 1 & 2
                                The Westford
                                Pimple Saudagar
                                Pune - 411027
                                Maharashtra, India
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:connect@bhojwaniconstructions.com">connect@bhojwaniconstructions.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone-alt"></i>
                                <a href="tel:020-47159423">+91 20 47159423</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-widget__col footer-widget__col--links">
                    <div class="footer-widget__col__content">
                        <h5 class="footer-widget__col__content__title">Links</h5>
                        <ul class="list-unstyled footer-widget__col__content__links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Projects</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-widget__col footer-widget__col--news">
                    <div class="footer-widget__col__content">
                        <h5 class="footer-widget__col__content__title">Newsletter</h5>
                        <p class="footer-widget__col__subscribe">Subscribe our newsletter to get our latest update & news</p>
                    </div>
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__col__content__newsletter mc-form">
                        <div class="footer-widget__col__content__inpfield">
                            <input type="email" name="email" placeholder="Email Address">
                        </div>
                        <button type="submit">Subscribe</button>
                    </form>
                    <div class="mc-form__response"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner d-flex align-items-center justify-content-between">
                <p class="main-footer__copyright"> Copyright &copy; <span class="dynamic-year"></span> Bhojwani Construction. All rights reserved. Designed By <a target="_blank" href="https://www.matrixbricks.com/">Matrix Bricks</a>
                </p>
                <div class="main-footer__social">
                    <span class="main-footer__socialtext">Social</span>
                    <a href="https://facebook.com/">
                        <i class="fab fa-facebook" target="_blank" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://instagram.com/">
                        <i class="fab fa-instagram" target="_blank" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
