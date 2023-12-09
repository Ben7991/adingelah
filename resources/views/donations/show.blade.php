<x-layout.admin>
    <x-slot name="title">Donations</x-slot>

    <x-go-back path="/admin/donations" title="Donations"></x-go-back>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Donation Details</h5>
                    <form>
                        <div class="form-group mb-3">
                            <label for="date-donated" class="mb-1">Date Donated</label>
                            <input type="text" id="date-donated" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="mb-1">Email</label>
                            <input type="text" id="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="mb-1">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="country" class="mb-1">Country</label>
                            <input type="text" id="country" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="amount" class="mb-1">Amount</label>
                            <input type="text" id="amount" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout.admin>
