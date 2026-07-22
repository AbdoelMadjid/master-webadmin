<nav class="js-mega-menu navbar navbar-expand-lg g-px-0 g-py-5 g-py-0--lg">
    <!-- Logo -->
    <a class="navbar-brand g-max-width-170 g-max-width-200--lg" href="{{ route('education.home') }}">
        <img class="img-fluid g-hidden-lg-down" src="assets/img/logo/logo.png" alt="Logo">
        <img class="img-fluid g-width-80 g-hidden-md-down g-hidden-xl-up" src="assets/img/logo/logo-mini.png"
            alt="Logo">
        <img class="img-fluid g-hidden-lg-up" src="assets/img/logo/logo.png" alt="Logo">
    </a>
    <!-- End Logo -->

    <!-- Responsive Toggle Button -->
    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0" type="button"
        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse"
        data-target="#navBar">
        <span class="hamburger hamburger--slider g-px-0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </span>
    </button>
    <!-- End Responsive Toggle Button -->

    <!-- Navigation -->
    <div id="navBar" class="collapse navbar-collapse">
        <ul class="navbar-nav align-items-lg-center g-py-30 g-py-0--lg ml-auto">
            <!-- Pages - Mega Menu -->
            <li class="nav-item hs-has-mega-menu" data-animation-in="fadeIn" data-animation-out="fadeOut"
                data-position="left">
                <a id="mega-menu-label-1"
                    class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                    href="#" aria-haspopup="true" aria-expanded="false">
                    {{ __('education.pages') }}
                    <i class="hs-icon hs-icon-arrow-bottom g-font-size-11 g-ml-7"></i>
                </a>

                <!-- Mega Menu -->
                <div class="w-100 hs-mega-menu u-shadow-v39 g-brd-around g-brd-7 g-brd-white g-bg-secondary g-text-transform-none g-pa-30 g-pa-50--lg g-my-20 g-my-0--lg"
                    aria-labelledby="mega-menu-label-1">
                    <span
                        class="d-block h1 g-brd-bottom g-brd-2 g-brd-main pb-2 mb-5">{{ __('education.pages') }}</span>

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <!-- Links -->
                            <ul class="list-unstyled g-pr-30 mb-0">
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.programs') }}">
                                        {{ __('education.programs') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.future-students') }}">
                                        {{ __('education.future_students') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.current-students') }}">
                                        {{ __('education.current_students') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <!-- Links -->
                            <ul class="list-unstyled g-pr-30 mb-0">
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.faculty-and-staff') }}">
                                        {{ __('education.faculty_and_staff') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.events') }}">
                                        {{ __('education.events') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.alumni') }}">
                                        {{ __('education.alumni') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <!-- Links -->
                            <ul class="list-unstyled g-pr-30 mb-0">
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.campus-life') }}">
                                        {{ __('education.campus_life') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.research') }}">
                                        {{ __('education.research') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.apply-all-intake') }}">
                                        {{ __('education.apply') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <!-- Links -->
                            <ul class="list-unstyled g-pr-30 mb-0">
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.contacts') }}">
                                        {{ __('education.contacts') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.help') }}">
                                        {{ __('education.help') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                                {{--  <li class="py-2">
                                    <a class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5"
                                        href="{{ route('education.signin') }}">
                                        Signin
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li> --}}
                                @if (Route::has('login'))
                                    <li class="py-2">
                                        @auth
                                            <a href="{{ route('homepage') }}"
                                                class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5">
                                                {{ __('education.dashboard') }}
                                                <i
                                                    class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="d-flex g-color-main g-color-primary--hover g-text-underline--none--hover g-py-5">
                                                {{ __('education.sign_in') }}
                                                <i
                                                    class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                            </a>
                                        @endauth
                                    </li>
                                @endif
                                <li class="py-2">
                                    <a class="d-flex g-brd-top g-brd-primary g-color-main g-color-primary--hover g-text-underline--none--hover g-pt-15 g-pb-5"
                                        href="{{ route('home') }}">
                                        {{ __('education.main') }}
                                        <i
                                            class="g-color-primary g-font-size-15 g-pos-rel g-top-5 ml-auto material-icons">arrow_forward</i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Links -->
                        </div>
                    </div>
                </div>
                <!-- End Mega Menu -->
            </li>
            <!-- End Pages - Mega Menu -->

            <li class="nav-item">
                <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                    href="{{ route('education.programs') }}">
                    {{ __('education.programs') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                    href="{{ route('education.future-students') }}">
                    {{ __('education.future_students') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                    href="{{ route('education.current-students') }}">
                    {{ __('education.current_students') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                    href="{{ route('education.faculty-and-staff') }}">
                    {{ __('education.faculty_and_staff') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg"
                    href="{{ route('education.events') }}">
                    {{ __('education.events') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-pl-15--lg g-pr-0--lg g-py-10 g-py-30--lg"
                    href="{{ route('education.alumni') }}">
                    {{ __('education.alumni') }}
                </a>
            </li>
        </ul>
    </div>
    <!-- End Navigation -->
</nav>
