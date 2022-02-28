@extends('layouts.user')
@section('content')
    <!------------------------ Start Main --------------------->
    <main>
        <!------------------------ Start Details --------------------->
        <div class="details">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 details-img">
                        <img src="{{ URL::asset('img/product') }}/{{ $products->image }}" alt="">
                    </div>
                    <div class="col-12 col-md-6 details-info">
                        <h2 class="product-name text-success">{{ $products->product_name }}</h2>
                        <p class="desc">
                            {{ $products->desc }}
                        </p>
                        <p class="price">{{ $products->price }}</p>
                        <a href="{{ route('cart.store') }}" class="btn btn-primary btn-sm"><i
                                class="fa-solid fa-cart-shopping"></i> Add To Cart</a>
                        <h3 class="category-name text-end text-secondary">{{ $products->category->category_name }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------ End Details --------------------->
    </main>
    <!------------------------ End Main --------------------->
@endsection
