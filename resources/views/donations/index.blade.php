<x-layout.admin>
    <x-slot name="title">Donations</x-slot>

    <div class="container-fluid mb-4 p-0">
        <div class="row">
            <div class="col-6 col-lg-5 col-xl-4 col-xxl-3">
                <div class="border bg-white p-3 rounded d-flex justify-content-between shadow-sm">
                    <i class="bi bi-basket fs-3 text-main"></i>
                    <div class="text-end">
                        <p class="m-0 mb-1">All Donations</p>
                        <h3 class="m-0 text-main">20</h3>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-5 col-xl-4 col-xxl-3">
                <div class="border bg-white p-3 rounded d-flex justify-content-between shadow-sm">
                    <i class="bi bi-cash-stack fs-3 text-main"></i>
                    <div class="text-end">
                        <p class="m-0 mb-1">Total Amount</p>
                        <h3 class="m-0 text-main">&#8373;20</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mb-4">
        <div class="card border shadow-sm">
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="m-0">Donations</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover display" id="categories-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
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
        </script>
    @endpush
</x-layout.admin>
