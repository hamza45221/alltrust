@extends('dashboard.dashboard')

@section('content')
    <!-- Modal -->

    <div class="position-relative">
        @if(session('success'))
            <div class="alert alert-success position-absolute w-75 z-5 right-0 alert-dismissible fade show"
                 style="top: 20px;" role="alert" id="successAlert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error'))
            <!-- Check for an error session -->
            <div class="alert alert-danger position-absolute w-75 z-5 right-0 alert-dismissible fade show"
                 style="top: 20px;" role="alert" id="errorAlert">
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



    <div class="row">
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="dt-action-buttons text-end pt-6 pt-md-0">
                    <div class="dt-buttons btn-group">
                        <button href="{{ route('') }}"
                                class="btn btn-secondary create-new btn-primary waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target="#usercreate" type="button">
                            <span><i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New Record</span></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="dt-responsive table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--                    @foreach($faqs as $index => $faq)--}}
                    {{--                        <tr>--}}
                    {{--                            <td>{{ $index + 1 }}</td>--}}
                    {{--                            <td><span class="fw-medium">{{ $faq->question }}</span></td>--}}
                    {{--                            <td>{{ $faq->answer }}</td>--}}
                    {{--                            <td>--}}
                    {{--                                <div class="dropdown">--}}
                    {{--                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">--}}
                    {{--                                        <i class="ti ti-dots-vertical"></i>--}}
                    {{--                                    </button>--}}
                    {{--                                    <div class="dropdown-menu">--}}
                    {{--                                        <a class="dropdown-item waves-effect" data-bs-toggle="modal" data-bs-target="#useredit{{ $faq->id }}"><i class="ti ti-pencil me-1"></i> Edit</a>--}}
                    {{--                                        <a class="dropdown-item waves-effect" href="{{ route('faq-delete', ['id' => $faq->id]) }}" onclick="return confirm('Are you sure you want to delete this FAQ?');"><i class="ti ti-trash me-1"></i> Delete</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </td>--}}
                    {{--                        </tr>--}}
                    <!-- Update Modal -->
                    {{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="public/assets/js/tables-datatables-advanced.js"></script>
@endsection
