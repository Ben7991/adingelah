<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adingelah Foundation | Admin</title>
    <link rel="shortcut icon" href="{{ asset("assets/img/logo-big.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap-icons/font/bootstrap-icons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/general.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/auth.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,600;6..12,700&family=Open+Sans:wght@300;400;600;800&display=swap">
</head>
<body>
    <main class="main">
        <div class="container mt-5 mb-5 mt-sm-0 mb-sm-0">
            <div class="row">
                <div class="col-12 col-md-6 d-none d-sm-block">
                    <div class="w-100 h-100 overflow-hidden">
                        <img src="{{ asset("assets/img/sign-in.svg") }}" alt="Sign in Image">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="px-md-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <img src="{{ asset("assets/img/logo-big.png") }}" alt="Adingelah Foundation Logo" style="width: 100px;">
                            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Admin</li>
                                </ol>
                            </nav>
                        </div>
                        <h5 class="my-4 text-center">Sign-In Admin</h5>
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="email-address" class="mb-1">Email Address</label>
                                <input type="email" name="email" id="email-address" class="form-control">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="mb-1">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between mb-4">
                                <button class="btn btn-success rounded-pill px-4 shadow" type="submit">
                                    <i class="bi bi-box-arrow-in-right"></i>&nbsp;Login
                                </button>
                                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                    href="/admin/forgot-password">
                                    forgot password?
                                  </a>
                            </div>
                        </form>
                        <hr>
                        <p class="text-center">Adingelah Foundation &copy; 2023 | All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset("assets/js/jquery.js") }}"></script>
    <script src="{{ asset("assets/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
</body>
</html>
