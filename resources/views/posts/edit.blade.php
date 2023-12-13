<x-layout.admin>
    <x-slot name="title">Posts</x-slot>
    @push("styles")
        <!-- Include stylesheet -->
{{--        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">--}}
        <link rel="stylesheet" href="{{ asset("assets/quill_editor/quill.min.css") }}">
        @endpush

    <x-go-back path="/admin/posts" title="Posts"></x-go-back>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="text-center overflow-hidden image-holder rounded" id="bannerWrapper">
                    <div id="loader">
                        <img src="{{ asset("assets/img/ajax-loader.gif") }}" alt="image">
                    </div>

                    <img src="{{ asset(\App\Constant\ImagePath::$post . $post->banner) }}" id="postBannerPreviewer" class="image-holder__img" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Edit Post</h5>
                    <form id="postForm" action="{{ route("posts.update", $post) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group mb-3">
                            <label for="title" class="mb-1">Title</label>
                            <input type="text" value="{{ $post->title }}" name="title" id="title" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="banner" class="mb-1">Banner</label>
                            <input type="file" name="banner" id="banner" class="form-control">
                            @error('banner')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="description" class="mb-1">Description</label>
                            <!-- Create the editor container -->
                            <div id="editor">{{ $post->description }}</div>
                            <input type="hidden" id="description" name="description">
                            <span class="text-danger" id="descriptionErr"></span>
                        </div>
                        <button class="btn btn-main px-4 rounded-pill">
                            <i class="bi bi-save"></i>&nbsp;Save changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push("scripts")
        <!-- Main Quill library -->
{{--        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>--}}

        <script src="{{ asset("assets/quill_editor/quill.min.js") }}"></script>


            <script>
            var quill = new Quill('#editor', {
              theme: 'snow',
              placeholder: "Type blog message here"
            });


            hideLoader();


            $("#banner").on("change", function (e) {
                const fileReader = new FileReader();

                showLoader();

                fileReader.onload = function () {
                    hideLoader();
                    $("#postBannerPreviewer").attr("src", this.result);
                };

                fileReader.readAsDataURL(e.target.files[0])
            });



            document.querySelector("#postForm").addEventListener("submit", (e) => {
                e.target.description.value = document.querySelector(".ql-editor").innerHTML;

                const editor = $("#editor");

                if(editor.text().trim() === "")
                {
                    e.preventDefault();
                    $("#descriptionErr").html("The description field is required.")
                }
            });

          </script>
    @endpush
</x-layout.admin>
