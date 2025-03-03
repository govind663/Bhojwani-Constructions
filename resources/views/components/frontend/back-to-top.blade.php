{{-- Mobile Nav Bar --}}
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="{{ route('frontend.home') }}" aria-label="logo image">
                <img src="{{ asset('frontend/assets/images/Bhojwani-logo.png') }}" width="155" alt="" />
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:Support@wallpi.com">connect@bhojwaniconstructions.com</a>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:020-47159423">+91 20 47159423</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="https://facebook.com/">
                <i class="fab fa-facebook" target="_blank" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://instagram.com/">
                <i class="fab fa-instagram" target="_blank" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>

{{-- Search --}}
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="wallpi-btn wallpi-btn--base">
                <span><i class="icon-search-1"></i></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

{{-- Enquiry Model Form --}}
<div class="modal fade" id="enquiryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="consultation-one__contentwrap">
                <div class="consultation-one__contentwrap__bg" style="background-image: url({{ asset('frontend/assets/images/backgrounds/consultation-bg1-1.png') }});"></div>
                <div class="consultation-one__contentwrap__content">
                    <h2 class="sec-title__title">Get A Free Consultation</h2><!-- /.sec-title__title -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    <form class="contact__form contact-form-validated" action="#" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="Full Name" name="name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="Phone No" name="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="Country" name="Country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="City" name="City">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="consultation-one__contentwrap__content__input-box text-message-box">
                                    <textarea name="message" placeholder="Message Details"></textarea>
                                </div>

                                <div class="consultation-one__contentwrap__content__btn-box">
                                    <button type="submit" class="wallpi-btn wallpi-btn--submit"><span>Send Request</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Contact Us Model Form  --}}
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="consultation-one__contentwrap">
                <div class="consultation-one__contentwrap__bg" style="background-image: url({{ asset('frontend/assets/images/backgrounds/consultation-bg1-1.png') }});"></div>
                <div class="consultation-one__contentwrap__content">
                    <h2 class="sec-title__title">Get A Free Consultation</h2><!-- /.sec-title__title -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    <form class="contact__form contact-form-validated" action="#" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="Full Name" name="name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="Phone No" name="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="Country" name="Country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="consultation-one__contentwrap__content__input-box">
                                    <input type="text" placeholder="City" name="City">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="consultation-one__contentwrap__content__input-box text-message-box">
                                    <textarea name="message" placeholder="Message Details"></textarea>
                                </div>

                                <div class="consultation-one__contentwrap__content__btn-box">
                                    <button type="submit" class="wallpi-btn wallpi-btn--submit"><span>Send Request</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Scroll To Top --}}
<a href="javascript:void(0);" class="scroll-to-target scroll-to-top" id="scroll-to-top" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>
