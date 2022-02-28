@extends('layouts.admin')
@section('title')
    Show Information
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center mt-4">All {{$roles->name}}</h1>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles_users as $role)
                <tr>
                    @if ($role->image==null)
                    <th scope="row"><img src="{{URL::asset('Default.jpg')}}" alt="" height="50vh"></th>
                    @else
                    <th scope="row"><img src="{{URL::asset('img/')}}/{{$role->image}}" alt="" height="50vh"></th>
                    @endif
                    <td>{{$role->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
