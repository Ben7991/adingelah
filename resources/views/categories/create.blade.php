<x-layout.admin>
    <x-slot name="title">Categories</x-slot>

    <x-go-back path="/admin/categories" title="Categories"></x-go-back>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Add Category</h5>
                    <form action="{{ route("categories.store") }}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="name" class="mb-1">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
