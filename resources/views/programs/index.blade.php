<x-layout.admin>
    <x-slot name="title">Programs & Initiatives</x-slot>

    <div class="container-fluid mb-4 p-0">
        <div class="row">
            <div class="col-6 col-lg-5 col-xl-4 col-xxl-3">
                <div class="border bg-white p-3 rounded d-flex justify-content-between shadow-sm">
                    <i class="bi bi-arrow-clockwise fs-3 text-main"></i>
                    <div class="text-end">
                        <p class="m-0 mb-1">All Programs</p>
                        <h3 class="m-0 text-main">{{ count($programs) }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mb-4">
        <div class="card border shadow-sm">
            <div class="card-header bg-white d-flex align-items-center justify-content-between py-3 border-bottom">
                <h5 class="m-0">Programs</h5>
                <a href="{{ route("program-initiative.create") }}" class="btn btn-main px-3 rounded-pill">
                    <i class="bi bi-plus"></i>&nbsp;Add Program
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover display" id="program-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Days</th>
                                <th>Time</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($programs))
                            @foreach($programs as $program)
                                <tr>
                                    <td>{{ $program->id }}</td>
                                    <td class="days-td">{{ $program->days }}</td>
                                    <td>{{ date('h:i A', strtotime($program->time)) }}</td>
                                    <td>{{ $program->title }}</td>
                                    <td class="d-flex align-items-center">
                                        <a class="btn btn-main px-4 rounded-pill text-decoration-none text-white" href="{{ route("program-initiative.edit", $program->id) }}">Edit</a>

                                        <form method="post" action="{{ route("program-initiative.destroy", $program->id) }}" onsubmit="formDeleteConfirmationModal(event)">
                                            @method("delete")
                                            @csrf
                                            <button class="btn btn-main px-4 rounded-pill btn-delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push("scripts")
        <script>
            $(document).ready(function() {
                $("#program-table").DataTable();
            });


            $(".days-td").map((_,item) => {
                const programDaysContainer = item;
                const content = (programDaysContainer.innerText);
                programDaysContainer.innerHTML = content.replaceAll('"', " ");
            })

        </script>
    @endpush
</x-layout.admin>
