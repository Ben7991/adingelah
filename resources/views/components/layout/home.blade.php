<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adingelah Foundation</title>
    <link rel="shortcut icon" href="{{ asset("assets/img/logo-big.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/general.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/home.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,600;6..12,700&family=Open+Sans:wght@300;400;600;800&display=swap">
</head>
<body>
    {{-- Navigation --}}
    <div class="back-drop"></div>
    <nav class="navigation shadow-sm py-3">
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
                        <a href="/" class="navigation__link navigation__link-active">Home</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/about-us" class="navigation__link">About Us</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/gallery" class="navigation__link">Gallery</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/upcoming-events" class="navigation__link">Upcoming Events</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/programs-initiatives" class="navigation__link">Programs & Initiative</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/donations" class="navigation__link">Donations</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/contact-us" class="navigation__link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}

    {{-- Footer --}}
    <footer class="footer">

    </footer>

    <script src="{{ asset("assets/bootstrap/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/home.js") }}"></script>
</body>
</html>
