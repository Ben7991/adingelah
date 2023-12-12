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
                    <form id="programForm" action="{{ route("program-initiative.update", $program->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group mb-3">
                            <label for="title" class="mb-1">Title</label>
                            <input type="text" value="{{ $program->title }}" name="title" id="title" class="form-control">
                            @error("title")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="days" class="mb-1">Days (<small style="color: #1b998b">click to select or remove</small>)</label>
                            <select id="days" class="form-control" multiple>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>

                            <div class="form-control my-3">
                                <label for="#">Selected Days</label>
                                <ul id="selectedDayWrapper"></ul>
                                <input type="hidden" name="days" id="selectedDays">
                                <input type="hidden" id="previousSelectedDays" value="{{ $program->days }}">

                                @error("days")
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="time" class="mb-1">Time of program</label>
                            <input type="time" name="time" value="{{ $program->time }}" id="time" class="form-control">
                            @error("time")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="description" class="mb-1">Description</label>
                            <!-- Create the editor container -->
                            <div id="editor">{{ $program->description }}</div>
                            <span class="text-danger" id="descriptionErr"></span>
                            <input type="hidden" name="description">
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


            document.querySelector("#programForm").addEventListener("submit", (e) => {
                e.target.selectedDays.value = getAllSelectedDaysInJsonFormat();

                const editor = $("#editor");
                e.target.description.value = editor.text();

                if(editor.text().trim() === "")
                {
                    e.preventDefault();
                    $("#descriptionErr").text("The Description field is required")
                }

            });


            {
                $("option").on("click", (e) => {
                    const option = e.target;


                    if(checkIfDayAlreadyExistInSelectedDayList(option) === false)
                    {
                        $("#selectedDayWrapper").append(`<li>${option.innerText}</li>`);
                    }
                    else
                    {
                        removeDayFromSelectedList(option);
                    }

                })

            }


            function checkIfDayAlreadyExistInSelectedDayList(option)
            {
                let alreadyExist = false;
                const selectedDaysContainer = $("#selectedDayWrapper");
                const list = selectedDaysContainer.children();

                for(let i = 0; i < list.length; i++)
                {
                    if(list[i].innerText.toLowerCase() === option.innerText.toLowerCase())
                    {
                        alreadyExist = true;
                        break;
                    }
                }

                return alreadyExist
            }


            function removeDayFromSelectedList(option)
            {
                const selectedDaysContainer = $("#selectedDayWrapper");
                const list = selectedDaysContainer.children();
                for(let i = 0; i < list.length; i++) {
                    const itemContent = list[i].innerText.toLowerCase();
                    if(itemContent === option.innerText.toLowerCase()) list[i].remove();
                }
            }


            function getAllSelectedDaysInJsonFormat() {
                const selectedDaysContainer = $("#selectedDayWrapper");
                const list = selectedDaysContainer.children();
                const records = [];
                for(let i = 0; i < list.length; i++) records.push(list[i].innerText);
                return (records.length > 0) ? JSON.stringify(records) : null;
            }


            function populateUserSelectedDays() {
                const previousSelectedDays = JSON.parse($("#previousSelectedDays").val());

                previousSelectedDays.map(item => {
                    $("#selectedDayWrapper").append(`<li>${item}</li>`)
                })
            }

            populateUserSelectedDays();


        </script>
    @endpush

</x-layout.admin>

