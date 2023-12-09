<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adingelah Foundation | Admin</title>
    <link rel="shortcut icon" href="{{ asset("assets/img/logo.jpg") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap-icons/font/bootstrap-icons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/general.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/admin.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,600;6..12,700&family=Open+Sans:wght@300;400;600;800&display=swap">
    <script src="{{ asset("assets/bootstrap/js/popper.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
</head>
<body>

    <div class="backdrop"></div>
    <main class="main">
        <aside class="main__drawer">

            <a href="/admin/dashboard" class="main__link {{ $title == "Dashboard" ? "main__link--active" : "" }}">
                <i class="bi bi-graph-up"></i>&nbsp;Dashboard
            </a>
            <a href="/admin/donations" class="main__link {{ $title == "Donations" ? "main__link--active" : "" }}">
                <i class="bi bi-basket"></i>&nbsp;Donations
            </a>
            <a href="/admin/categories" class="main__link {{ $title == "Categories" ? "main__link--active" : "" }}">
                <i class="bi bi-bookmarks"></i>&nbsp;Categories
            </a>
            <a href="/admin/blog" class="main__link {{ $title == "Blog Posts" ? "main__link--active" : "" }}">
                <i class="bi bi-substack"></i>&nbsp;Blog Posts
            </a>
            <a href="/admin/event" class="main__link {{ $title == "Upcoming Events" ? "main__link--active" : "" }}">
                <i class="bi bi-calendar-event"></i>&nbsp;Upcoming Events
            </a>
            <a href="/admin/program-initiative" class="main__link {{ $title == "Programs & Initiatives" ? "main__link--active" : "" }}">
                <i class="bi bi-arrow-clockwise"></i>&nbsp;Programs & Initiatives
            </a>
            <a href="/admin/program-initiative" class="main__link {{ $title == "Users" ? "main__link--active" : "" }}">
                <i class="bi bi-people"></i>&nbsp;Users
            </a>
        </aside>
        <section class="main__content">
            <header class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center">
                    <button class="btn px-2 pt-1 pb-0 fs-3 btn-outline-secondary d-block d-md-none rounded-circle">
                        <i class="bi bi-list"></i>
                    </button>
                    <img src="{{ asset("assets/img/logo-big.png") }}" alt="" class="main__logo">
                </div>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        BT
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item text-secondary">
                                <i class="bi bi-person"></i>&nbsp;Profile
                            </a>
                        </li>
                        <li>
                            <button class="dropdown-item text-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-box-arrow-right"></i>&nbsp;Logout out
                            </button>
                        </li>
                    </ul>
                </div>
            </header>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to logout out?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="/sign-out" method="post">
                                @csrf
                                <button type="button" class="btn btn-success">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{ $slot }}
        </section>
    </main>

    {{-- <script src="{{ asset("assets/js/jquery.js") }}"></script> --}}
</body>
</html>
