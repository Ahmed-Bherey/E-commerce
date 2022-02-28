@extends('layouts.admin')
@section('title')
    create product
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="mb-3 mb-md-0">
                                    <label for="inputEmail">Product Name</label>
                                    <input class="form-control" type="text" name="product_name"/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 mb-md-0">
                                    <div>
                                        <textarea class="form-control" placeholder="Leave a Desc here"
                                            name="desc"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 mb-md-0">
                                    <label for="inputEmail">Products Price</label>
                                    <input class="form-control" type="text" name="price"/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 mb-md-0">
                                    <label for="inputEmail">Upload img</label>
                                    <input class="form-control" type="file" name="pro_img"/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 mb-md-0">
                                    <label for="inputEmail">Created by</label>
                                    <input class="form-control" type="text" name="created_by" value="{{Auth::user()->name}}" readonly />
                                </div>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" name="category_id">
                                    <option selected>Open this select menu</option>
                                    @foreach ($categories as $category )
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="Add Product" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
