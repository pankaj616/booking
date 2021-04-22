@extends('layouts.employee.app')

@section('content')
    <div class="mt-2">
    <button type="button" class="float-right btn btn-primary" data-toggle="modal" data-target="#leaveModal">Request for Leave </button>
    </div>
    <h1 class="mt-4">My Leaves</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table" id="holiday_table">
                            <thead>
                            <tr>
                                <th>#SR</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th class="text-center py-0 align-middle">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($leaves as $leave)
                                    <tr>
                                        <td>{{ $leave->id }}</td>
                                        <td>{{ $leave->date_of_leave }}</td>
                                        <td>{{ ($leave->status ? $leave->status : 'Pending') }}</td>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('user.leave', $leave->id) }}" class="btn btn-info ml-2 mr-2">View</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="leaveModal">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Leave Request</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('user.leaveRequest') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" min="{{ date('Y-m-d') }}" id="date" required name="date">
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason:</label>
                            <textarea name="reason" class="form-control" id="" cols="20" required rows="6" placeholde="leave reason"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                
            </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#holiday_table').DataTable();
        });
    </script>
@endsection
