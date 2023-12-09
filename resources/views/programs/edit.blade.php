<x-layout.admin>
    <x-slot name="title">Programs & Initiatives</x-slot>
    @push("styles")
        <!-- Include stylesheet -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    @endpush

    <x-go-back path="/admin/program-initiative" title="Programs"></x-go-back>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-8 col-xl-7 col-xxl-6">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Edit Program</h5>
                    <form action="/admin/programs" method="post">
                        <div class="form-group mb-3">
                            <label for="title" class="mb-1">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="days" class="mb-1">Days</label>
                            <select name="days" id="days" class="form-control" multiple>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="time" class="mb-1">Time of program</label>
                            <input type="time" name="time" id="time" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="description" class="mb-1">Description</label>
                            <!-- Create the editor container -->
                            <div id="editor"></div>
                        </div>
                        <button class="btn btn-main px-4 rounded-pill">
                            <i class="bi bi-save"></i>&nbsp;Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push("scripts")
        <!-- Main Quill library -->
        {{-- <script src="//cdn.quilljs.com/1.3.6/quill.js"></script> --}}
        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
        <script>
            var quill = new Quill('#editor', {
              theme: 'snow',
              placeholder: "Type program description here"
            });
          </script>
    @endpush

</x-layout.admin>
