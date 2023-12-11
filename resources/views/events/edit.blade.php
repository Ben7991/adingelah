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
                <div class="text-center overflow-hidden image-holder rounded" id="bannerWrapper">
                    <div id="loader">
                        <img src="{{ asset("assets/img/ajax-loader.gif") }}" alt="image">
                    </div>

                    <img src="{{ asset(\App\Constant\ImagePath::$events . $event->flier) }}" id="postBannerPreviewer" class="image-holder__img" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Edit Event</h5>
                    <form id="eventForm" action="{{ route("events.update", $event) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group mb-3">
                            <label for="title" class="mb-1">Title</label>
                            <input type="text" value="{{ $event->title }}" name="title" id="title" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="flier" class="mb-1">Flier</label>
                            <input type="file" name="flier" id="flier" class="form-control">
                            @error('flier')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="event_date" class="mb-1">Date & Time</label>
                            <input type="datetime-local" value="{{ $event->event_date }}" name="event_date" id="event_date" class="form-control">
                            @error('event_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="venue" class="mb-1">Venue</label>
                            <input type="text" value="{{ $event->venue }}" name="venue" id="venue" class="form-control">
                            @error('venue')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="description" class="mb-1">Description</label>
                            <!-- Create the editor container -->
                            <div id="editor"></div>
                            <input type="hidden" name="description" id="description">
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


            hideLoader();


            $("#flier").on("change", function (e) {
                const fileReader = new FileReader();

                showLoader();

                fileReader.onload = function () {
                    hideLoader();
                    $("#postBannerPreviewer").attr("src", this.result);
                };

                fileReader.readAsDataURL(e.target.files[0])
            });



            document.querySelector("#eventForm").addEventListener("submit", (e) => {
                e.target.description.value = document.querySelector(".ql-editor").innerHTML;
            });


          </script>
    @endpush

</x-layout.admin>
