@extends('layouts.user')
@section('content')
<main>
        <!------------------------------ Start Fashion ----------------------->
        <section class="fashion-slider">
            <div class="swiper mySwiper mySwiper6">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Start slider content -->
                        <div class="slide1">
                            <div class="msg">
                                <p class="small">S O M T H I N G IS B E T T E R</p>
                                <h3 class="large">FASHION LORREM</h3>
                            </div>
                        </div>
                    </div>
                    <!-- End slider content -->
                    <div class="swiper-slide">
                        <div class="slide1">
                            <div class="msg">
                                <p class="small">S O M T H I N G IS B E T T E R</p>
                                <h3 class="large">FASHION LORREM</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide1">
                            <div class="msg">
                                <p class="small">S O M T H I N G IS B E T T E R</p>
                                <h3 class="large">FASHION LORREM</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!------------------------------- End Fashion -------------------->

        <!------------------------------ Start Collection ---------------------->
        <section class="collection">
            <div class="container">
                <div class="row">
                    <!-- Start Left Collection -->
                    <div class="col-12 col-md-6 collection-para">
                        <div class="col-img"></div>
                        <div class="img-text">
                            <p class="mainB"><span>H o t </span><span> C o l l e c t i o n</span></p>
                            <h3 class="title">New Trend For Women</h3>
                            <p class="para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis blanditiis, dolorum odio exercitationem explicabo veniam voluptatum repudiandae optio rerum quasi.</p>
                            <a href="#" class="btn btn-outline-dark">Shop Now</a>
                        </div>
                    </div>
                    <!-- End Left Collection -->
                    <!-- Start Right Collection -->
                    <div class="col-12 col-md-6 collection-view">
                        <div class="view-info">
                            <a href="#">VIEW COLLECTION</a>
                        </div>
                        <div class="view-img"></div>
                        <!-- End Right Collection -->
                    </div>
                </div>
            </div>
        </section>
        <!-------------------------- End Collection ------------------------>

        <!------------------------- Start Featured --------------------->
        <section class="featured">
            <h3 class="text-center mb-4">Featured items</h3>
            <!-- Start Featured NavBar -->
            <nav class="text-center">
                <ul>
                    <li><a href="#" class="nav_item">All</a></li>
                    <li><a href="#" class="nav_item">Men</a></li>
                    <li><a href="#" class="nav_item active">Women</a></li>
                    <li><a href="#" class="nav_item">Kides</a></li>
                </ul>
            </nav>
            <!-- End Featured NavBar -->
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
        </section>

        <!------------------------- Start Offer --------------------->
        <section class="offer">
            <div class="row">
                <!-- Start Left Banner -->
                <div class="col-12 col-md-6 left-panner">
                    <div class="left-panner-content">
                        <p class="price">70 % <span>OFF</span></p>
                        <p class="para">Tao Kinben Na?</p>
                    </div>
                </div>
                <!-- End Left Banner -->

                <!-- Start Right Banner -->
                <div class="col-12 col-md-6 right-panner">
                    <div class="right-panner-content">
                        <p>AMR CHEHARA KHARAP NA</p>
                        <h3><span>Chehara</span> Dia Ki hoy</h3>
                    </div>
                </div>
                <!-- End Right Banner -->
            </div>
        </section>
        <!------------------------- End Offer --------------------->

        <!------------------------- Start Trending --------------------->
        <section class="trending">
            <section class="featured">
                <h3 class="text-center mb-4">Trending item</h3>
                <div class="container">
                    <div class="row">
                        <!-- Start Trending Box 1 -->
                        <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                            <div class="box-banner">
                                <div class="box-img">
                                    <img src="img/f6.jpg " alt="">
                                </div>
                                <p class="price">150 $</p>
                                <!-- Start Overflew -->
                                <div class="overflew">
                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                </div>
                                <!-- End Overflew -->
                            </div>
                            <div class="box-content">
                                <h3 class="product-name">Suspendisse et.</h3>
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
                                    <div class="me-3"><i class="fa-solid fa-cart-shopping"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <!-- End interaction -->
                            </div>
                        </div>
                        <!-- End Trending Box 1 -->
                        <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                            <div class="box-banner">
                                <div class="box-img">
                                    <img src="img/f6.jpg " alt="">
                                </div>
                                <p class="price">150 $</p>
                                <div class="overflew">
                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="box-content">
                                <h3 class="product-name">Suspendisse et.</h3>
                                <div class="stars d-flex mb-3">
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="interaction d-flex">
                                    <div class="me-3"><i class="fa-solid fa-heart"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-cart-shopping"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                            <div class="box-banner">
                                <div class="box-img">
                                    <img src="img/f6.jpg " alt="">
                                </div>
                                <p class="price">150 $</p>
                                <div class="overflew">
                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="box-content">
                                <h3 class="product-name">Suspendisse et.</h3>
                                <div class="stars d-flex mb-3">
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="interaction d-flex">
                                    <div class="me-3"><i class="fa-solid fa-heart"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-cart-shopping"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                            <div class="box-banner">
                                <div class="box-img">
                                    <img src="img/f6.jpg " alt="">
                                </div>
                                <p class="price">150 $</p>
                                <div class="overflew">
                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="box-content">
                                <h3 class="product-name">Suspendisse et.</h3>
                                <div class="stars d-flex mb-3">
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="interaction d-flex">
                                    <div class="me-3"><i class="fa-solid fa-heart"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-cart-shopping"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                            <div class="box-banner">
                                <div class="box-img">
                                    <img src="img/f6.jpg " alt="">
                                </div>
                                <p class="price">150 $</p>
                                <div class="overflew">
                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="box-content">
                                <h3 class="product-name">Suspendisse et.</h3>
                                <div class="stars d-flex mb-3">
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="interaction d-flex">
                                    <div class="me-3"><i class="fa-solid fa-heart"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-cart-shopping"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                            <div class="box-banner">
                                <div class="box-img">
                                    <img src="img/f6.jpg " alt="">
                                </div>
                                <p class="price">150 $</p>
                                <div class="overflew">
                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="box-content">
                                <h3 class="product-name">Suspendisse et.</h3>
                                <div class="stars d-flex mb-3">
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="interaction d-flex">
                                    <div class="me-3"><i class="fa-solid fa-heart"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-cart-shopping"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                            <div class="box-banner">
                                <div class="box-img">
                                    <img src="img/f6.jpg " alt="">
                                </div>
                                <p class="price">150 $</p>
                                <div class="overflew">
                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="box-content">
                                <h3 class="product-name">Suspendisse et.</h3>
                                <div class="stars d-flex mb-3">
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="interaction d-flex">
                                    <div class="me-3"><i class="fa-solid fa-heart"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-cart-shopping"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 com-lg-4 col-xl-3 box">
                            <div class="box-banner">
                                <div class="box-img">
                                    <img src="img/f6.jpg " alt="">
                                </div>
                                <p class="price">150 $</p>
                                <div class="overflew">
                                    <div class="eye-icon"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="box-content">
                                <h3 class="product-name">Suspendisse et.</h3>
                                <div class="stars d-flex mb-3">
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star active-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="interaction d-flex">
                                    <div class="me-3"><i class="fa-solid fa-heart"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-cart-shopping"></i></div>
                                    <div class="me-3"><i class="fa-solid fa-plus"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!------------------------- End Trending --------------------->

        <!------------------------- Start Comment --------------------->
        <section class="comment">
            <div class="container">
                <div class="swiper mySwiper mySwiper3">
                    <div class="swiper-wrapper">
                        <!-- Start Slide Comment -->
                        <div class="swiper-slide">
                            <div class="comment-content">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <!-- Start User Comment -->
                                <p class="comment-con">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid adipisci aliquam.
                                </p>
                                <!-- End User Comment -->
                                <!-- Start Profile inf -->
                                <div class="profile-info">
                                    <img src="img/face5.jpg" alt="" class="profile-img">
                                    <p class="profile-name">Lorem ipsum dolor sit.</p>
                                </div>
                                <!-- End Profile inf -->
                            </div>
                        </div>
                        <!-- End Slide Comment -->
                        <div class="swiper-slide">
                            <div class="comment-content">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <p class="comment-con">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid adipisci aliquam.
                                </p>
                                <div class="profile-info">
                                    <img src="img/face5.jpg" alt="" class="profile-img">
                                    <p class="profile-name">Lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="comment-content">
                                <span><i class="fa-solid fa-quote-left"></i></span>
                                <p class="comment-con">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid adipisci aliquam.
                                </p>
                                <div class="profile-info">
                                    <img src="img/face5.jpg" alt="" class="profile-img">
                                    <p class="profile-name">Lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------- End Comment --------------------->

        <!------------------------- Start Leatest --------------------->
        <section class="leatest">
            <div class="container">
                <div class="swiper mySwiper mySwiper2">
                    <div class="swiper-wrapper">
                        <!-- Start Leatest Slide -->
                        @foreach ($products as $product )
                        <div class="swiper-slide">
                            <div class="row">
                                <!-- Start Leatest Box 1 -->
                                <div class="">
                                    <div class="leatest-box">
                                        <img src="{{URL::asset('img/product')}}/{{$product->image}}" alt="">
                                        <h3>{{$product->product_name}}</h3>
                                        <p>{{$product->desc}}</p>
                                        <a href="#" class="btn btn-outline-dark">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        <!-- End Leatest Slide -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!------------------------- End Leatest --------------------->

        <!------------------------- Start Brand --------------------->
        <section class="brand">
            <div class="container">
                <h2 class="text-center mb-5">Shop By Brand</h2>
                <div class="row">
                    <!-- Start Brand Content -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 shop-icon d-flex justify-content-center">
                        <i class="fa-solid fa-tv"></i>
                        <p>Themeforest</p>
                    </div>
                    <!-- End Brand Content -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 shop-icon d-flex justify-content-center">
                        <i class="fa-solid fa-tv"></i>
                        <p>Themeforest</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 shop-icon d-flex justify-content-center">
                        <i class="fa-solid fa-tv"></i>
                        <p>Themeforest</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 shop-icon d-flex justify-content-center">
                        <i class="fa-solid fa-tv"></i>
                        <p>Themeforest</p>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------- End Brand --------------------->
    </main>
    <!------------------------- End Main --------------------->
@endsection