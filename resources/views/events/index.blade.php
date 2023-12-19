<x-layout.admin>
    <x-slot name="title">Upcoming Events</x-slot>

    <div class="container-fluid mb-4 p-0">
        <div class="row">
            <div class="col-6 col-lg-5 col-xl-4 col-xxl-3">
                <div class="border bg-white p-3 rounded d-flex justify-content-between shadow-sm">
                    <i class="bi bi-calendar-event fs-3 text-main"></i>
                    <div class="text-end">
                        <p class="m-0 mb-1">All Events</p>
                        <h3 class="m-0 text-main">{{ count($events) }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mb-4">
        <div class="card border shadow-sm">
            <div class="card-header bg-white d-flex align-items-center justify-content-between py-3 border-bottom">
                <h5 class="m-0">Events</h5>
                <a href="{{ route("events.create") }}" class="btn btn-main px-3 rounded-pill">
                    <i class="bi bi-plus"></i>&nbsp;Add Event
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover display" id="events-table">
                        <thead>
                            <tr>
                                <th>Date of Event</th>
                                <th>Flier</th>
                                <th>Title</th>
                                <th>Venue</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($events) > 0)
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{ $event->event_date }}</td>
                                        <td><img class="post-img__small" src="{{ asset(\App\Constant\ImagePath::$events . $event->flier) }}" alt="image"></td>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->venue }}</td>

                                        <td class="d-flex align-items-center">
                                            <a class="action-btn text-secondary" href="{{ route("events.edit", $event->id) }}" title='Edit'>
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <form method="post" action="{{ route("events.destroy", $event->id) }}" onsubmit="formDeleteConfirmationModal(event)">
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
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push("scripts")
        <script>
            $(document).ready(function() {
                $("#events-table").DataTable();
            });
        </script>
    @endpush
</x-layout.admin>
