<x-layout.auth>
    <div class="d-md-flex align-items-center justify-content-between">
        <img src="{{ asset("assets/img/logo-big.png") }}" alt="Adingelah Foundation Logo" style="width: 100px;" class="mb-3 mb-md-0 d-inline-block">
        <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/admin">Login</a></li>
              <li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
            </ol>
        </nav>
    </div>
    <h5 class="my-4 text-center">Sign-In Admin</h5>
    <form action="{{ route("reset-password") }}" method="POST">
        @csrf
        <div class="form-group mb-4">
            <label for="email-address" class="mb-1">Email Address</label>
            <input type="email" name="email" id="email-address" class="form-control">
            @error("email")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-100 d-flex align-items-center justify-content-between mb-4">
            <button class="btn btn-success rounded-pill px-4 shadow" type="submit">
                <i class="bi bi-send"></i>&nbsp;Submit
            </button>
        </div>
    </form>
</x-layout.auth>
