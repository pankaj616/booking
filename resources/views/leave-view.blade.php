@extends('layouts.employee.app')

@section('content')
    <h3 class="mt-4">My Leave</h3>
    <div class="row">
        <div class="col-12 mt-2 border-right">
            <div class="ml-2">
                <div class="form-group row">
                    <label for="" class="col-5 col-form-label">Date</label>
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
                        <span> {{ ($leave->status ? $leave->status : 'Pending') }} </span>
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
    </div>
    <hr>
@endsection
