@extends('layouts.admin')
@section('title') Show Information @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-3">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">{{$categories->category_name}} info</h3>
                    <div class="user-img"><img src="{{URL::asset('img/category')}}/{{$categories->image}}" alt=""></div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <div class="col-md-12">
                                <label for="inputFirstName">Category Name</label>
                                <div class="mb-3 mb-md-0">
                                    <input class="form-control" type="text" value="{{$categories->category_name}}" readonly />
                                </div>
                            </div>
                        </div>
                        <label for="inputEmail">Created by</label>
                        <div class="mb-3">
                            <input class="form-control" type="text" value="{{$categories->created_by}}"
                                readonly />
                        </div>
                        <label for="inputEmail">Created at</label>
                        <div class="mb-3">
                            <input class="form-control" type="text" value="{{$categories->created_at->diffForHumans()}}"
                                readonly />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
