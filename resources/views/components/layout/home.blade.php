<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adingelah Foundation</title>
    <link rel="shortcut icon" href="{{ asset("assets/img/logo-big.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset("assets/css/general.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/home.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,600;6..12,700&family=Open+Sans:wght@300;400;600;800&display=swap">
</head>
<body>
    {{-- Navigation --}}
    <div class="back-drop"></div>
    <nav class="navigation py-3">
        <div class="container">
            <a href="/" class="navigation__brand">
                <img src="{{ asset("assets/img/logo-big.png") }}" alt="Adingelah Foundation Logo" class="navigation__brand-logo">
            </a>
            <button class="navigation__hamburger">
                <span class="navigation__bar"></span>
                <span class="navigation__bar"></span>
                <span class="navigation__bar"></span>
            </button>
            <div class="navigation__collapse">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="/" class="navigation__link {{$page == 'Home' ? 'navigation__link-active' : ''}}">Home</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/about-us" class="navigation__link {{$page == 'About' ? 'navigation__link-active' : ''}}">About Us</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/gallery" class="navigation__link {{$page == 'Gallery' ? 'navigation__link-active' : ''}}">Gallery</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/upcoming-events" class="navigation__link {{$page == 'Event' ? 'navigation__link-active' : ''}}">Upcoming Events</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/programs-initiative" class="navigation__link {{$page == 'Program' ? 'navigation__link-active' : ''}}">Programs & Initiative</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/donations" class="navigation__link {{$page == 'Donations' ? 'navigation__link-active' : ''}}">Donations</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/blog" class="navigation__link {{$page == 'Blog' ? 'navigation__link-active' : ''}}">Blog</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/contact-us" class="navigation__link {{$page == 'Contact' ? 'navigation__link-active' : ''}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="footer__top pt-3 pt-md-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-2 col-xl-2 mb-3 mb-xl-0">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="/" class="footer__link">Home</a>
                            </li>
                            <li class="footer__item">
                                <a href="/about-us" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="/gallery" class="footer__link">Gallery</a>
                            </li>
                            <li class="footer__item">
                                <a href="/gallery" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 col-xl-2 mb-3 mb-xl-0">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="/upcoming-events" class="footer__link">Upcoming Events</a>
                            </li>
                            <li class="footer__item">
                                <a href="/programs-initiative" class="footer__link">Progams & Initiative</a>
                            </li>
                            <li class="footer__item">
                                <a href="/donations" class="footer__link">Donations</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 col-xl-3 mb-3 mb-xl-0">
                        <h6 class="mb-3">Call Us</h6>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="tel: +233555855363" class="footer__link">(+233) 55 585 5363</a>
                            </li>
                            <li class="footer__item">
                                <a href="tel: +233206204007" class="footer__link">(+233) 20 620 4007</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 col-xl-3 mb-3 mb-xl-0">
                        <h6 class="mb-3">Send us a mail</h6>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="mailto: info@adingelahfoundation.ngo" class="footer__link">info@adingelahfoundation.ngo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 col-xl-2 mb-3 mb-xl-0">
                        <h6 class="mb-3">Socials</h6>
                        <div class="d-flex gap-3 align-items-center">
                            <a href="#" class="footer__social footer__social--facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="footer__social footer__social--instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="footer__social footer__social--twitter">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="footer__bottom pt-2 pb-4">
            <p class="text-center m-0">
                <span class="footer__copy-right">&copy; Adingelah Foundation 2023 | Powered By</span>
                <a href="#" class="footer__link">Bernard Teye</a>
            </p>
        </div>
    </footer>

    <script src="{{ asset("assets/bootstrap/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/home.js") }}"></script>
</body>
</html>
