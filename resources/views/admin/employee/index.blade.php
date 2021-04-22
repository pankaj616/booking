@extends('layouts.admin.app')

@section('content')

    <h3 class="mt-4">Employees</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table" id="employee_table">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Role</th>
                                <th class="text-center py-0 align-middle">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->first_name }}</td>
                                        <td>{{ $employee->department->name }}</td>
                                        <td>{{ $employee->role->name }}</td>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('admin.employeeView', $employee->id)}}" class="btn btn-info ml-2 mr-2">View</a>
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
            $('#employee_table').DataTable();
        });
    </script>
@endsection
