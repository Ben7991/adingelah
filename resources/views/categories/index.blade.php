<x-layout.admin>
    <x-slot name="title">Categories</x-slot>

    <div class="container-fluid mb-4 p-0">
        <div class="row">
            <div class="col-6 col-lg-5 col-xl-4 col-xxl-3">
                <div class="border bg-white p-3 rounded d-flex justify-content-between shadow-sm">
                    <i class="bi bi-bookmarks fs-3 text-main"></i>
                    <div class="text-end">
                        <p class="m-0 mb-1">All Categories</p>
<<<<<<< Updated upstream
                        <h3 class="m-0 text-main">20</h3>
=======
                        <h3 class="m-0 text-main">{{ $total_categories }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-5 col-xl-4 col-xxl-3">
                <div class="border bg-white p-3 rounded d-flex justify-content-between shadow-sm">
                    <i class="bi bi-eye-slash fs-3 text-main"></i>
                    <div class="text-end">
                        <p class="m-0 mb-1">Hidden Category</p>
                        <h3 class="m-0 text-main">{{ $hidden_categories }}</h3>
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mb-4">
        <div class="card border shadow-sm">
            <div class="card-header bg-white d-flex align-items-center justify-content-between py-3 border-bottom">
                <h5 class="m-0">Categories</h5>
                <a href="/admin/categories/create" class="btn btn-main px-3 rounded-pill">
                    <i class="bi bi-plus"></i>&nbsp;Add Category
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover display" id="categories-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
<<<<<<< Updated upstream
                        <tbody></tbody>
=======
                        <tbody>
                        @if(count($categories))
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    @if ($category->status === "visible")
                                        <i class="bi bi-check-circle-fill text-success"></i>
                                    @else
                                        <i class="bi bi-eye-slash text-danger"></i>
                                    @endif
                                </td>
                                <td class="d-flex align-items-center">
                                    <a class="action-btn text-secondary" href="{{ route("categories.edit", $category->id) }}"
                                        title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form method="post" action="{{ route("categories.destroy", $category->id) }}" onsubmit="changeCategoryStatus(event)">
                                        @method("delete")
                                        @csrf

                                        <button class="action-btn text-danger" title="Change visibility">
                                            @if ($category->status === "visible")
                                                <i class="bi bi-eye-slash text-danger"></i>
                                            @else
                                                <i class="bi bi-check-lg text-success"></i>
                                            @endif
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
>>>>>>> Stashed changes
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push("scripts")
        <script>
            $(document).ready(function() {
                $("#categories-table").DataTable();
            });

            window.changeCategoryStatus = function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "Change Category Status",
                    text: "Are you sure, you want to change category status!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1b998b",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes change it!"
                }).then((result) => {
                    if (result.isConfirmed) { e.target.submit();}
                });
            };
        </script>
    @endpush
</x-layout.admin>
