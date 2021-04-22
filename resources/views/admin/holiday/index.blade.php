@extends('layouts.admin.app')

@section('content')

    <h3 class="mt-4">Employee Leaves</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table" id="holiday_table">
                            <thead>
                            <tr>
                                <th>Employee #ID</th>
                                <th>Employee Name</th>
                                <th>Department</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th class="text-center py-0 align-middle">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($leaves as $leave)
                                    <tr>
                                        <td>{{ $leave->employee->id }}</td>
                                        <td>{{ $leave->employee->first_name }}</td>
                                        <td>{{ $leave->employee->department->name }}</td>
                                        <td>{{ $leave->date_of_leave }}</td>
                                        <td>{{ ucfirst(($leave->status ? $leave->status : 'Pending')) }}</td>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('admin.leaveView', $leave->id)}}" class="btn btn-info ml-2 mr-2">View</a>
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
    </div>
    <script>
        $(document).ready(function() {
            $('#holiday_table').DataTable();
        });
    </script>
@endsection
