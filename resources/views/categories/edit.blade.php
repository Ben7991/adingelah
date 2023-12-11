<x-layout.admin>
    <x-slot name="title">Categories</x-slot>

    <x-go-back path="/admin/categories" title="Categories"></x-go-back>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Edit Category</h5>
                    <form action="{{ route("categories.update", $category) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group mb-3">
                            <label for="name" class="mb-1">Name</label>
                            <input type="text" value="{{$category->name}}" name="name" id="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="status" class="mb-1">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="">Select your preferred value</option>
                                <option value="visible">Visible</option>
                                <option value="hidden">Hidden</option>
                            </select>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-main px-4 rounded-pill">
                            <i class="bi bi-save"></i>&nbsp;Save changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout.admin>
