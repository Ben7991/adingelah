<x-layout.admin>
    <x-slot name="title">Users</x-slot>


    <div class="container-fluid mb-4 p-0">
        <div class="row">
            <div class="col-6 col-lg-5 col-xl-4 col-xxl-3">
                <div class="border bg-white p-3 rounded d-flex justify-content-between shadow-sm">
                    <i class="bi bi-people fs-3 text-main"></i>
                    <div class="text-end">
                        <p class="m-0 mb-1">All Users</p>
                        <h3 class="m-0 text-main">{{ count($users) }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mb-4">
        <div class="card border shadow-sm">
            <div class="card-header bg-white d-flex align-items-center justify-content-between py-3 border-bottom">
                <h5 class="m-0">Users</h5>
                <a href="{{ route("users.create") }}" class="btn btn-main px-3 rounded-pill">
                    <i class="bi bi-plus"></i>&nbsp;Add User
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover display" id="users-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($users))
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <form method="post" action="{{ route("users.destroy", $user->id) }}" onsubmit="formDeleteConfirmationModal(event)">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-main px-4 rounded-pill btn-delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push("scripts")
        <script>
            $(document).ready(function() {
                $("#users-table").DataTable();
            });
        </script>
    @endpush
</x-layout.admin>
