<x-layout.admin>
    <x-slot name="title">Profile</x-slot>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Profile Information</h5>
                    <form action="/admin/categories" method="post">
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="name" class="mb-1">Email</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <button class="btn btn-main px-4 rounded-pill">
                            <i class="bi bi-save"></i>&nbsp;Save
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Change Password</h5>
                    <form action="/admin/categories" method="post">
                        <div class="form-group mb-4">
                            <label for="current_password" class="mb-1">Current Password</label>
                            <input type="password" name="current_password" id="current_password" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="new_password" class="mb-1">New Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="confirm_password" class="mb-1">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        </div>
                        <button class="btn btn-main px-4 rounded-pill">
                            <i class="bi bi-save"></i>&nbsp;Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="text-center mb-4">
        <form action="" method="POST">
            <button class="btn btn-danger px-4 rounded-pill">
                <i class="bi bi-trash"></i>&nbsp;Delete Account
            </button>
        </form>
    </div>

</x-layout.admin>
