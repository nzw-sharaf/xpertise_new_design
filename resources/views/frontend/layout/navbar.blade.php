<header>
    {{-- Desktop Nav  --}}
    <nav class="navbar navMain bg-transparent py-5">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="@if ($logo) {{ $logo }} @else {{ asset('frontend/assets/images/logo.png') }} @endif"
                    alt="Xpertise Creative Studio" class="img-fluid" width="80px">
            </a>
            <button class="bg-transparent d-flex border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="my-auto text-white fs-5">menu &nbsp;</span>
                <img src="{{ asset('frontend/assets/images/icons/menu.png') }}" alt="Xpertise Creative Studio"
                    class="img-fluid" width="40px">
            </button>
            <div class="offcanvas offcanvas-end offCanvasMenuBg w-100" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="background-image: url('')">

                <div class="offcanvas-body py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-4 col-lg-3 my-auto">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    <img src="@if ($logo) {{ $logo }} @else {{ asset('frontend/assets/images/logo.png') }} @endif"
                                        alt="Xpertise Creative Studio" class="img-fluid" width="80px">
                                </a>
                            </div>
                            <div class="col-6 col-lg-8 my-auto">
                                <div class="float-end">
                                    <div class="text-red  fs-3 text-uppercase">
                                        <span class="line-red align-middle"></span> Menu
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-lg-1 my-auto  text-end">
                                <button type="button" class="bg-transparent border-0 text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close"><i
                                        class="bi bi-x-lg text-white fs-1"></i></button>
                            </div>
                            <div class="col-10 col-lg-11 my-auto">
                                <div class="float-end">
                                    <div>
                                        <ul class="navMenu list-unstyled text-end">
                                            <li class="active"><a href="" class="text-decoration-none"  data-image="{{ asset('frontend/assets/images/menu/home.webp') }}">Home</a>
                                            </li>
                                            <li class=""><a href="" class="text-decoration-none"  data-image="{{ asset('frontend/assets/images/menu/agency.webp') }}">Agency</a>
                                            </li>
                                            <li class=""><a href=""
                                                    class="text-decoration-none"  data-image="{{ asset('frontend/assets/images/menu/service.webp') }}">Services</a></li>
                                            <li class=""><a href="" class="text-decoration-none"  data-image="{{ asset('frontend/assets/images/menu/case.webp') }}">Case
                                                    Studies</a></li>
                                            <li class=""><a href=""
                                                    class="text-decoration-none"  data-image="{{ asset('frontend/assets/images/menu/solution.webp') }}">Solutions</a></li>
                                            <li class=""><a href=""
                                                    class="text-decoration-none"  data-image="{{ asset('frontend/assets/images/menu/article.webp') }}">Articles</a></li>
                                            <li class=""><a href="" class="text-decoration-none"  data-image="{{ asset('frontend/assets/images/menu/team.webp') }}">Join the
                                                    team</a></li>
                                            <li class=""><a href=""
                                                    class="text-decoration-none"  data-image="{{ asset('frontend/assets/images/menu/contact.webp') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <div class="float-end border-top">
                                            <ul class="list-unstyled socialLinkNav mt-4">
                                                <li>
                                                    <a href="" class="text-decoration-none">
                                                        <span class="iconRound text-white"><i
                                                                class="fa fa-facebook-square"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="text-decoration-none">
                                                        <span class="iconRound text-white"><i
                                                                class="fa fa-instagram"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="text-decoration-none">
                                                        <span class="iconRound text-white"><i
                                                                class="fa fa-linkedin"></i></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="text-decoration-none">
                                                        <span class="iconRound text-white"><i
                                                                class="bi bi-tiktok"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
