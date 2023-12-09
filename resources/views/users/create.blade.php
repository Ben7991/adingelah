<x-layout.admin>
    <x-slot name="title">Users</x-slot>

    <x-go-back path="/admin/users" title="Users"></x-go-back>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Add User</h5>
                    <form action="/admin/users" method="post">
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="mb-1">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <button class="btn btn-main px-4 rounded-pill">
                            <i class="bi bi-save"></i>&nbsp;Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout.admin>
