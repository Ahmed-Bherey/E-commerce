@extends('layouts.admin')
@section('title')Main @endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 users"><i class="fa-solid fa-users"></i> Users ({{$users}})</div>
            <div class="col-12 col-md-6 col-lg-4 products"><i class="fa-solid fa-cart-shopping"></i> Products ({{$products}})</div>
            <div class="col-12 col-md-6 col-lg-4 category"><i class="fa-solid fa-table-cells"></i> Categories ({{$category}})</div>
        </div>
    </div>
</main>
@endsection
