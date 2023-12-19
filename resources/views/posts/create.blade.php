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
                        <img src="{{ asset("assets/img/ajax-loader.gif") }}" alt="">
                    </div>
                    <p id="bannerDescription" class="my-5 mx-2">Post banner will show here when you upload the file</p>
                    <img id="postBannerPreviewer" class="image-holder__img" alt="">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="border rounded bg-white shadow-sm p-3">
                    <h5 class="mt-0 mb-3">Add Post</h5>
                    <form action="{{ route("posts.store") }}" method="post" id="postForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title" class="mb-1">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="category_id" class="mb-1">Category</label>
                            @if(count($categories) === 0)
                                <p class="m-0">No category found, click here to add categories</p>
                            @else
                                <select name="category_id" id="category_id" class="form-select">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            @endif
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
                            <div id="editor"></div>
                            <input type="hidden" id="description" name="description">
                            <span class="text-danger" id="descriptionErr"></span>
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
{{--        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>--}}

            <script src="{{ asset("assets/quill_editor/quill.min.js") }}"></script>

        {{-- <!-- Theme included stylesheets -->
        <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

        <!-- Core build with no theme, formatting, non-essential modules -->
        <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
        <script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script> --}}

        <script>
            var quill = new Quill('#editor', {
              theme: 'snow',
              placeholder: "Type blog message here"
            });


            {
                $("#postBannerPreviewer").hide();
                hideLoader();
            }


            $("#banner").on("change", function (e) {
                const fileReader = new FileReader();

                $("#postBannerPreviewer").show();
                $("#bannerDescription").hide();

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
