@extends('layouts.admin')
@section('title') All Products @endsection
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">All Products</h1>
        <a href="{{route('product.create')}}" class="btn btn-primary mb-4"><i class="fa-solid fa-user-plus"></i> Create Peoduct</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Products Name</th>
                    <th scope="col">desc</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Craeted_by</th>
                    <th scope="col">Controll</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row"><img src="{{URL::asset('img/product')}}/{{$product->image}}" alt="" height="50vh"></th>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->desc}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category->category_name}}</td>
                    <td>{{$product->created_by}}</td>
                    <td class="d-flex justify-content-center">
                        @if (Auth::user()->role_id==1)
                        <a href="{{route('product.show' , $product->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i> Show</a>
                        <a href="{{route('product.edit' , $product->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                        <form method="POST" action="{{route('product.destroy' , $product->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        @else
                        <a href="{{route('product.show' , $product->id)}}" class="btn btn-info">Show</a>
                        @endif
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links('pagination::bootstrap-5')}}
    </div>
@endsection
