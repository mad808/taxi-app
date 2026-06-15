<!-- Start: Footer Dark -->
<footer class="footer-dark">
    <div class="container">
        <div class="row">
            <!-- Start: Services -->
            <div class="col-sm-6 col-md-3 item">
                <h3>{{ __('messages.services') }}</h3>
                <ul>
                    <li><a href="/booking">{{ __('messages.book_ride') }}</a></li>
                    <li><a href="/register">{{ __('messages.become_driver') }}</a></li>
                    <li><a href="/login">{{ __('messages.driver_login') }}</a></li>
                    <li><a href="/admin">{{ __('messages.admin_page') }}</a></li>
                </ul>
            </div>
            <!-- End: Services -->

            <!-- Start: About -->
            <div class="col-sm-6 col-md-3 item">
                <h3>{{ __('messages.about') }}</h3>
                <ul>
                    <li><a href="/about">{{ __('messages.company_name') }}</a></li>
                    <li></li>
                    <li><a href="/register">{{ __('messages.careers') }}</a></li>
                </ul>
            </div>
            <!-- End: About -->

            <!-- Start: Footer Text -->
            <div class="col-md-6 item text">
                <h3><i class="fa fa-taxi" style="color: rgb(254,209,54);"></i>&nbsp;{{ __('messages.company_name') }}</h3>
                <p>{{ __('messages.tagline') }}</p>
                <p>{{ __('messages.slogan') }}</p>
            </div>
            <!-- End: Footer Text -->

            <!-- Start: Social Icons -->
            <div class="col item social"><a href="https://github.com/mad808" target="_blank"><i
                        class="icon ion-social-github"></i></a></div><!-- End: Social Icons -->
        </div>
        <!-- Start: Copyright -->
        <p class="copyright">{{ __('messages.copyright') }} <i class="fas fa-heart"></i></p>
        <p class="copyright">V1.4</p>
        <!-- End: Copyright -->
    </div>
</footer>
<!-- End: Footer Dark -->