<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('end-user/css/swipex.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link id="skin-icon" rel="stylesheet" href="{{ URL::asset('end-user/css/main.css') }}">
    <title>E-commerce</title>
</head>

<body>
    <!------------------------ Start Header --------------------->
    <header>
        <!-- Start User info -->
        <div class="user-info">
            <div class="container d-flex justify-content-between align-items-center">
                <p>Free Shopping on All orders Over 75$</p>
                <nav>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Currency:Usd</a></li>
                        <li>
                            <a href="{{ route('cart.list') }}" class="flex items-center">
                                <i class="fa-solid fa-cart-shopping shopping"></i>
                                {{ Cart::getTotalQuantity()}}
                             </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End User info -->

        <!-- Start Search Bar -->
        <div class="container">
            <div class="search">
            <form type="get" action="{{url('/search')}}">
                <input type="text" name="query" placeholder=" Search Here What You Need">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
            </form>
            </div>
        </div>
        <!-- End Search Bar -->

        <!-- Start Header NavBar -->
        <nav class="header-items">
            <div class="container d-flex justify-content-between">
                <a href="/" class="text-decoration-none">
                    <h3>Fashion</h3>
                </a>
                <ul>
                    <li><a href="#" class="nav_item active">Home</a></li>
                    <li><a href="#" class="nav_item">Women</a></li>
                    <li><a href="#" class="nav_item">Men</a></li>
                    <li><a href="#" class="nav_item">Footwear</a></li>
                    <li><a href="#" class="nav_item">Accessories</a></li>
                    <li><a href="#" class="nav_item">Sales</a></li>
                    <li><a href="#" class="nav_item">Blog</a></li>
                    <li class="dark-mood" title="Dark Mood"><i class="fa-solid fa-moon"></i></li>
                    <li class="light-mood" title="Light Mood"><i class="fa-solid fa-sun"></i></li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                
                                        <a class="dropdown-item text-black" href="{{route('profile.edit' , Auth::user()->id)}}">
                                            {{ __('Profile') }}
                                        </a>
                
                                        <a class="dropdown-item text-black" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                    {{-- <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('products.list')}}">Shop</a> --}}
                    <div class="mobile-btn">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
            </div>
        </nav>
        <!-- End Header NavBar -->

        <!-- Start Header Sticky NavBar -->
        <nav class="header-items sticky-navbar">
            <div class="container d-flex justify-content-between">
                <h3>Fashion</h3>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Footwear</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="dark-mood" title="Dark Mood"><i class="fa-solid fa-moon"></i></li>
                    <li class="light-mood" title="Light Mood"><i class="fa-solid fa-sun"></i></li>
                </ul>
                <div class="mobile-btn">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </nav>
        <!-- End Header Sticky NavBar -->
    </header>
    <!------------------------ End Header --------------------->
