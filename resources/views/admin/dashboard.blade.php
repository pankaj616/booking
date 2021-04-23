@extends('layouts.admin.app')

@section('content')

<div class="container">
    <div class="row  mt-4">
        <div class="col-md-8">
            <form action="{{ route('admin.checkLeaves') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="date"> Select Date and department to check Employees Status </label>
                    <input type="date" class="form-control" @if(isset($data)) value="{{$data['date']}}" @endif id="date" required name="date">
                </div>
                <div class="form-group">
                    <select name="department" class="form-control"  required id="department">
                    <option value="">Select a department</option>
                    @forelse($departments as $department)
                    <option value="{{$department->id}}" @if(isset($data) && $data['department'] == $department->id ) selected @endif  >{{$department->name}}</option>
                    @empty
                    @endforelse
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3 mb-3">Check</button>
                @if(isset($data))
                    <p> Total Employees in this department: {{ $data['total_employees'] }}
                    <p> Employees on Leave: {{ $data['employees_on_leave'] }}
                @endif                
            </form>
        </div>
        
    </div>
</div>
@endsection
