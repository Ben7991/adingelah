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
    <link rel="stylesheet" href="{{ asset("assets/sweet_alert/sweetalert2.min.css") }}">
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
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <div class="px-md-3 w-100">
                        {{ $slot }}
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
    <script src="{{ asset("assets/sweet_alert/sweetalert2.all.min.js") }}"></script>
    <script src="{{ asset("assets/js/global.js") }}"></script>


    @stack("scripts")
    {{-- show error messges --}}
    <script>
        @if($message = \Illuminate\Support\Facades\Session::get(\App\Constant\SubmitOutcome::$FAILED))
            displayOperationFailedMessageAlert("{{ $message }}");
        @endif

        @if($message = \Illuminate\Support\Facades\Session::get(\App\Constant\SubmitOutcome::$SUCCESS))
            displayOperationSuccessMessageAlert("{{ $message }}");
        @endif
    </script>

</body>
</html>
