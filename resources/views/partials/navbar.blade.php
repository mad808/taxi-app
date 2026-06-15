<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/"><i class="fa fa-taxi"></i>&nbsp;{{ __('messages.brand') }}</a>
        <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="{{ __('navbar.toggle_navigation') }}">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item"><a class="nav-link" href="/">{{ __('messages.home') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">{{ __('messages.about') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="/#about">{{ __('messages.services') }}</a></li>


                <!-- Dil Değiştirme Dropdown Menüsü -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-globe"></i> {{ __('messages.language') }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-dark p-2" aria-labelledby="navbarDropdownLang">
                        <li><a href="{{ route('lang.switch', 'en') }}">English</a></li>
                        <li><a href="{{ route('lang.switch', 'ru') }}">Русский</a></li>
                        <li><a href="{{ route('lang.switch', 'tk') }}">Türkmençe</a></li>
                    </ul>
                </li>
                <!-- Dil Değiştirme Bitiş -->

                
                <li class="nav-item" style="margin-top: 10px;">
                    <a class="btn btn-primary" role="button" style="background: rgba(10,9,8,0.27);" href="/booking">{{ __('messages.book_ride') }}</a>
                </li>
                <li class="nav-item" style="margin-top: 10px;">
                    <a class="btn btn-primary btn-book" role="button" href="/register">{{ __('messages.become_driver') }}</a>
                </li>                 

                <li class="nav-item" style="margin-top: 10px;">
                    <a class="btn btn-primary btn-login" role="button" href="/login" style="background: rgb(99,168,231);">{{ __('messages.login') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>