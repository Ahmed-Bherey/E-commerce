@extends('layouts.user')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-3">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Edit {{$userprofile->name}} info</h3>
                    <div class="user-img text-center"><img src="{{URL::asset('img/')}}/{{$userprofile->image}}"  alt="" style="max-width: 50%; border-radius: 50%"></div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('profile.update' , $userprofile->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="inputFirstName">User Name</label>
                                <div class="mb-3 mb-md-0">
                                    <input class="form-control" type="text" value="{{$userprofile->name}}" name="username" />
                                </div>
                            </div>
                        </div>
                        <label for="inputEmail">Email address</label>
                        <div class="mb-3">
                            <input class="form-control" type="email" value="{{$userprofile->email}}" name="email" />
                        </div>
                        <label for="inputEmail">Created at</label>
                        <div class="mb-3">
                            <input class="form-control" type="text" value="{{$userprofile->created_at->diffForHumans()}}" />
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input type="submit" value="Update Account" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection