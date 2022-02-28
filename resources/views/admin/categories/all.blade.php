@extends('layouts.admin')
@section('title') All categories @endsection
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">All Categories</h1>
        <a href="{{route('category.create')}}" class="btn btn-primary mb-4"><i class="fa-solid fa-plus"></i> Create Category</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Craeted_at</th>
                    <th scope="col">Craeted_by</th>
                    <th scope="col">Controll</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">1</th>
                    <th scope="row"><img src="{{URL::asset('img/category/')}}/{{$category->image}}" alt="" height="50vh"></th>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
                    <td>{{$category->created_by}}</td>
                    <td class="d-flex justify-content-center">
                        @if (Auth::user()->role_id==1)
                        <a href="{{route('category.show' , $category->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i> Show</a>
                        <a href="{{route('category.edit' , $category->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                        <form method="POST" action="{{route('category.destroy' , $category->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        @else
                        <a href="{{route('category.show' , $category->id)}}" class="btn btn-info">Show</a>
                        @endif
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $categories->links() }} --}}
    </div>
@endsection
