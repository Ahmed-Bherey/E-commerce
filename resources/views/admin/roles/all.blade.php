@extends('layouts.admin')
@section('title') All Roles @endsection
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">All Roles</h1>
        <a href="{{route('role.create')}}" class="btn btn-primary mb-4"><i class="fa-solid fa-user-plus"></i> Create Role</a>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Role</th>
                    <th scope="col">Controll</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td class="d-flex justify-content-center">
                        @if (Auth::user()->role_id==1)
                        <a href="{{route('role.show' , $role->id)}}" class="btn btn-info"><i class="fa-solid fa-eye"></i> Show</a>
                        <a href="{{route('role.edit' , $role->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                        <form method="POST" action="{{route('role.destroy' , $role->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        @else
                        <a href="{{route('role.show' , $role->id)}}" class="btn btn-info">Show</a>
                        @endif
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
