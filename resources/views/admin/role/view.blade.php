@extends('layouts.admin.app')

@section('content')
    <h3 class="mt-4">Role View</h3>
    <div class="row">
        <div class="col-12 mt-2 border-right">
            <div class="ml-2">
                <div class="form-group row p-0">
                    <label for="id" class="col-5 col-form-label">Role Id</label>
                    <div class="col-7">
                        <span> {{ $role->id }} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Name</label>
                    <div class="col-7">
                        <span> {{$role->name}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Slug</label>
                    <div class="col-7">
                        <span> {{$role->slug}} </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="created_at" class="col-5 col-form-label">Created At</label>
                    <div class="col-7">
                        <span> {{$role->created_at}} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
