@extends('layouts.admin')
@section('title') All Users @endsection
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">All User</h1>
        <a href="{{route('user.create')}}" class="btn btn-primary mb-4"><i class="fa-solid fa-user-plus"></i> Create Users</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Craeted_at</th>
                    <th scope="col">Controll</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">1</th>
                    @if ($user->image==null)
                    <th scope="row"><img src="{{URL::asset('Default.jpg')}}" alt="" height="50vh"></th>
                    @else
                    <th scope="row"><img src="{{URL::asset('img/')}}/{{$user->image}}" alt="" height="50vh"></th>
                    @endif
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td class="d-flex justify-content-center">
                        @if (Auth::user()->role_id==1)
                        <a href="{{route('user.show' , $user->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i> Show</a>
                        <a href="{{route('user.edit' , $user->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                        <form method="POST" action="{{route('user.destroy' , $user->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        @else
                        <a href="{{route('user.show' , $user->id)}}" class="btn btn-info">Show</a>
                        @endif
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links('pagination::bootstrap-5')}}
    </div>
@endsection
