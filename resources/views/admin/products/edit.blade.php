@extends('layouts.admin')
@section('title') Edit Products @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-3">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Edit {{$products->product_name}} info</h3>
                    <div class="user-img">
                        @if ($products->image==null)
                        <img src="{{URL::asset('Default.jpg')}}" alt="">
                        @else
                        <img src="{{URL::asset('img/product')}}/{{$products->image}}" alt="">
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('product.update' , $products->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="inputFirstName">Product Name</label>
                                <div class="mb-3 mb-md-0">
                                    <input class="form-control" type="text" value="{{$products->product_name}}" name="product_name" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 mb-md-0">
                                <div>
                                    <textarea class="form-control"
                                        name="desc">{{$products->desc}}</textarea>
                                </div>
                            </div>
                        </div>
                        <label for="inputEmail">Price</label>
                        <div class="mb-3">
                            <input class="form-control" type="text" value="{{$products->price}}" name="price" />
                        </div>
                        <label for="inputEmail">Created at</label>
                        <div class="mb-3">
                            <input class="form-control" type="text" value="{{$products->created_at->diffForHumans()}}" />
                        </div>
                        <label for="inputEmail">Edit img</label>
                        <div class="mb-3">
                            <input class="form-control" type="file" name="pro_img" title="upload image" />
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <input type="submit" value="Update Product" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
