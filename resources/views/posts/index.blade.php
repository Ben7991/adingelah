<x-layout.admin>
    <x-slot name="title">Posts</x-slot>

    <div class="container-fluid mb-4 p-0">
        <div class="row">
            <div class="col-6 col-lg-5 col-xl-4 col-xxl-3">
                <div class="border bg-white p-3 rounded d-flex justify-content-between shadow-sm">
                    <i class="bi bi-bookmarks fs-3 text-main"></i>
                    <div class="text-end">
                        <p class="m-0 mb-1">All Posts</p>
                        <h3 class="m-0 text-main">20</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mb-4">
        <div class="card border shadow-sm">
            <div class="card-header bg-white d-flex align-items-center justify-content-between py-3 border-bottom">
                <h5 class="m-0">Posts</h5>
                <a href="/admin/posts/create" class="btn btn-main px-3 rounded-pill">
                    <i class="bi bi-plus"></i>&nbsp;Add Post
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover display" id="posts-table">
                        <thead>
                            <tr>
                                <th>Date Created</th>
                                <th>Banner</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
<<<<<<< Updated upstream
                        <tbody></tbody>
=======
                        <tbody>
                        @if(count($posts))
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <img class="post-img__small" src="{{ asset(\App\Constant\ImagePath::$post . $post->banner) }}" alt="image">
                                    </td>
                                    <td>{{ Str::length($post->title) > 10 ? substr($post->title, 10)."..." : $post->title}}</td>
                                    <td>{{ $post->category->name}}</td>
                                    <td class="d-flex align-items-center">
                                        <a class="action-btn text-secondary" href="{{ route("posts.edit", $post->id) }}"
                                            title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <form method="post" action="{{ route("posts.destroy", $post->id) }}" onsubmit="formDeleteConfirmationModal(event)">
                                            @method("delete")
                                            @csrf
                                            <button class="action-btn text-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
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
                $("#posts-table").DataTable();
            });
        </script>
    @endpush
</x-layout.admin>
