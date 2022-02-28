@extends('layouts.admin')
@section('title')Edit Role @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-4">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Edit Role</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('role.update', $roles->id) }}">
                            @csrf
                                <div class="mb-3 col-md-12">
                                    <label for="inputFirstName">Role Name</label>
                                    <div class="mb-3 mb-md-0">
                                        <input class="form-control" type="text" name="role_name" value="{{$roles->name}}" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="inputFirstName">Created_by</label>
                                    <div class="mb-3 mb-md-0">
                                        <input class="form-control" type="text" name="created_by" value="{{Auth::user()->name}}" readonly/>
                                    </div>
                                </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="Add Role" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
