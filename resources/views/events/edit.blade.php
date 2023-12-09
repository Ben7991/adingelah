<x-layout.admin>
    <x-slot name="title">Upcoming Events</x-slot>
    @push("styles")
        <!-- Include stylesheet -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    @endpush

    <x-go-back path="/admin/events" title="Events"></x-go-back>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="text-center overflow-hidden image-holder rounded">
                    <p class="my-5 mx-2">Event banner will show here when you upload the file</p>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Edit Event</h5>
                    <form action="/admin/events" method="post">
                        <div class="form-group mb-3">
                            <label for="title" class="mb-1">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="flier" class="mb-1">Flier</label>
                            <input type="file" name="flier" id="flier" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="event_date" class="mb-1">Date & Time</label>
                            <input type="datetime-local" name="event_date" id="event_date" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="venue" class="mb-1">Venue</label>
                            <input type="text" name="venue" id="venue" class="form-control">
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
        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

        <script>
            var quill = new Quill('#editor', {
              theme: 'snow',
              placeholder: "Type event description here, if none available you can leave the input empty"
            });
          </script>
    @endpush

</x-layout.admin>
