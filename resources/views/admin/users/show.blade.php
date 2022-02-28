@extends('layouts.admin')
@section('title') Show Information @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-3">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">{{$users->name}} info</h3>
                    <div class="user-img">
                        @if ($users->image==null)
                        <img src="{{URL::asset('Default.jpg')}}" alt="">
                        @else
                        <img src="{{URL::asset('img/')}}/{{$users->image}}" alt="">
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="inputFirstName">User Name</label>
                                <div class="mb-3 mb-md-0">
                                    <input class="form-control" type="text" value="{{$users->name}}" readonly />
                                </div>
                            </div>
                        </div>
                        <label for="inputEmail">Email address</label>
                        <div class="mb-3">
                            <input class="form-control" type="email" value="{{$users->email}}" readonly />
                        </div>
                        <label for="inputEmail">Created at</label>
                        <div class="mb-3">
                            <input class="form-control" type="text" value="{{$users->created_at->diffForHumans()}}"
                                readonly />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
