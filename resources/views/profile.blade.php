@extends('layouts.employee.app')

@section('content')
    <h3 class="mt-4">My Profile</h3>
    <div class="row">
        <div class="col-12 mt-2 border-right">
            <div class="ml-2">
                <div class="form-group row p-0">
                    <label for="id" class="col-5 col-form-label">Employee Id</label>
                    <div class="col-7">
                        <span> {{ $employee->id }} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">First Name</label>
                    <div class="col-7">
                        <span> {{$employee->first_name}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">First Name</label>
                    <div class="col-7">
                        <span> {{$employee->last_name}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Email</label>
                    <div class="col-7">
                        <span> {{$employee->email}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Mobile</label>
                    <div class="col-7">
                        <span> {{$employee->mobile}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Department</label>
                    <div class="col-7">
                        <span> {{@$employee->department->name}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Role</label>
                    <div class="col-7">
                        <span> {{@$employee->role->name}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Joining Date</label>
                    <div class="col-7">
                        <span> {{$employee->joining_date}} </span>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Address Line 1</label>
                    <div class="col-7">
                        <span> {{$employee->address->address_line_1}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Address Line 2</label>
                    <div class="col-7">
                        <span> {{$employee->address->address_line_2}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Zip</label>
                    <div class="col-7">
                        <span> {{$employee->address->zip}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">city</label>
                    <div class="col-7">
                        <span> {{$employee->address->city}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">state</label>
                    <div class="col-7">
                        <span> {{$employee->address->state}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Address Line 1</label>
                    <div class="col-7">
                        <span> {{$employee->address->country}} </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr>
@endsection
