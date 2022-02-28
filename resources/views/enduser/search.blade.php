
        @extends('layouts.user')
        @section('content')
        <div class="featured">
            <div class="container">
                <div class="row">
                    <!-- Start Featured Box 1 -->
                    @foreach ($products as $product )
                    <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                        <div class="box-banner">
                            <div class="box-img">
                                <img src="{{URL::asset('img/product')}}/{{$product->image}}" alt="">
                            </div>
                            <p class="price">{{$product->price}}</p>
                            <div class="overflew">
                                <a href="{{route('show.show' , $product->id)}}"><div class="eye-icon"><i class="fa-solid fa-eye"></i></div></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="product-name">{{$product->product_name}}</h3>
                            <!-- Start Stars -->
                            <div class="stars d-flex mb-3">
                                <i class="fa-solid fa-star active-star"></i>
                                <i class="fa-solid fa-star active-star"></i>
                                <i class="fa-solid fa-star active-star"></i>
                                <i class="fa-solid fa-star active-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <!-- End Stars -->
                            <!-- Start interaction -->
                            <div class="interaction d-flex">
                                <div class="me-3"><i class="fa-solid fa-heart"></i></div>
                                {{-- <div class="me-3"> --}}
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->product_name }}" name="product_name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <input type="hidden" value="{{ $product->image }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="me-3" style="border: none"><i class="fa-solid fa-cart-shopping shopping"></i></button>                                    
                                    </form>
                                {{-- </div> --}}
                                <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                            </div>
                            <!-- End interaction -->
                        </div>
                    </div>
                    @endforeach
                    <!-- End Featured Box 1 -->
                </div>
            </div>
        </div>
        @endsection