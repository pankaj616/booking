@extends('layouts.admin.app')

@section('content')
    <h3 class="mt-4 ml-2">My Leave</h3>
    <div class="row ml-2">
        <div class="col-12 mt-2 border-right">
            <div class="">
                <div class="form-group row">
                    <label for="" class="col-5 col-form-label">Employee Name</label>
                    <div class="col-7">
                        <span> {{ $leave->employee->first_name .' '. $leave->employee->last_name }} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-5 col-form-label">Department</label>
                    <div class="col-7">
                        <span> {{ $leave->employee->department->name }} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-5 col-form-label">Role</label>
                    <div class="col-7">
                        <span> {{ $leave->employee->role->name }} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-5 col-form-label">Date of Leave</label>
                    <div class="col-7">
                        <span> {{ $leave->date_of_leave }} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-5 col-form-label">Reason</label>
                    <div class="col-7">
                        <span> {{$leave->reason}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-5 col-form-label">Status</label>
                    <div class="col-7">
                        <span> {{ ucfirst(($leave->status ? $leave->status : 'Pending')) }} </span>
                    </div>
                </div>
                
                @if($leave->reject_reason)
                    <div class="form-group row">
                        <label for="" class="col-5 col-form-label">Reject Reason</label>
                        <div class="col-7">
                            <span> {{$leave->reject_reason}} </span>
                        </div>
                    </div>
                @endif

            </div>
        </div>
        @if(isset($priority))
        
            <div class="col-6 mb-2">
            <hr>
                @foreach($messages as $message)
                    <p> {{ $message}} </p>
                @endforeach
                <form method="post" action="{{ route('admin.leaveStatus')}}" >
                @csrf
                    <div class="form-group">
                        <label for="status">Select Status</label>
                        <select class="form-control" id="selected_status" name="status" required onchange="selectStatus()">
                            <option value="accept">Accept</option>
                            <option value="reject">Reject</option>
                        </select>
                    </div>
                    <input type="hidden" name="leave_id" value="{{ @$leave->id }}" id="">
                    <div class="form-group" id="status_update_form">

                    </div>
                    <button type="submit" class="btn btn-primary"> Update </button>
                </form>
            <div>
        @else
            @if(!$leave->status)
                <a href="{{route('admin.checkLeavePriority', $leave->id)}}" class="btn btn-secondary"> Check Priority</a>
            @endif
        @endif
    </div>
    <hr>

    <script>

        function selectStatus (){
           let status =  $("#selected_status").children("option:selected").val();

           if(status == "reject"){
               $("#status_update_form").html(` 
                    <label for="reason">Reason:</label>
                    <textarea name="reason" class="form-control" id="" cols="20" required rows="6" placeholde="leave reason"></textarea>
                `);
           }else{
            $("#status_update_form").html(" ");
           }
        }

    </script>
@endsection
