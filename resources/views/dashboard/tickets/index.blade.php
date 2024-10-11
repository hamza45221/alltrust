@extends('.dashboard.dashboard')

@section('content')
    <!-- Modal -->

    <div class="position-relative">
        @if(session('success'))
            <div class="alert alert-success position-absolute w-75 z-5 right-0 alert-dismissible fade show" style="top: 20px;" role="alert" id="successAlert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error')) <!-- Check for an error session -->
        <div class="alert alert-danger position-absolute w-75 z-5 right-0 alert-dismissible fade show" style="top: 20px;" role="alert" id="errorAlert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <script>
            // Function to remove alert after 6 seconds
            setTimeout(() => {
                const alertElement = document.getElementById('successAlert') || document.getElementById('errorAlert'); // Check both alerts
                if (alertElement) {
                    alertElement.classList.remove('show');
                    setTimeout(() => alertElement.remove(), 200);
                }
            }, 6000);
        </script>
    </div>

    <div class="modal fade" id="usercreate" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add Ticket</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>


                </div>

                <form action="{{route('ticket-store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" id="category" class="form-control"  >
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-4">
                                <label for="details" class="form-label">Details</label>
                                <textarea  name="details" id="details" class="form-control" placeholder="Enter Details" ></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Create Ticket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="dt-action-buttons text-end pt-6 pt-md-0">
                    <div class="dt-buttons btn-group">
                        <button class="btn btn-secondary create-new btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target="#usercreate" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New Record</span></span></button>
                    </div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tickets as $index => $ticket)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>
                                {{--                                <i class="ti ti-user ti-md text-danger me-4"></i>--}}
                                <span class="fw-medium">{{$ticket->title}}</span>
                            </td>
                            <td>{{$ticket->category}}</td>
                            <td>{{$ticket->details}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item waves-effect" data-bs-toggle="modal"
                                           data-bs-target="#useredit{{$ticket->id}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                                        <a class="dropdown-item waves-effect" href="{{ route('faq-delete', ['id' => $ticket->id]) }}"><i class="ti ti-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Update Modal -->
                        <div class="modal fade" id="useredit{{$ticket->id}}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Tickest</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('faq-update', ['id' => $ticket->id]) }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-4">
                                                    <label for="question" class="form-label">Question</label>
                                                    <input type="text" name="question" value="{{ $ticket->question }}" id="question" class="form-control" placeholder="Enter Question" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col mb-4">
                                                    <label for="answer" class="form-label">Answer</label>
                                                    <textarea  name="answer" id="answer" class="form-control" placeholder="Enter Answer" >{{ $ticket->answer}}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">Update Tickets</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="public/assets/js/tables-datatables-advanced.js"></script>
@endsection















