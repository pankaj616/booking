@extends('layouts.admin.app')

@section('content')

    <h3 class="mt-4">Departments</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table" id="departments_table">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th class="text-center py-0 align-middle">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($departments as $department)
                                    <tr>
                                        <td>{{ $department->id }}</td>
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $department->created_at }}</td>
                                        <td class="text-center py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('admin.departmentView', $department->id)}}" class="btn btn-info ml-2 mr-2">View</a>
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
            $('#departments_table').DataTable();
        });
    </script>
@endsection
