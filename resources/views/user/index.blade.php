@extends('cdn.index')
@section('main')
          <!-- header area start -->
          <header>
            <div id="header-sticky" class="header__area box-25">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
                            <div class="logo">
                                <a href="{{route('user.home')}}"><img src="{{asset('cdn/assets/img/logo/logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-2 col-sm-1 col-2">
                            <div class="header__right p-relative">
                                <div class="main-menu main-menu-2 d-none d-lg-block text-center">
                                    <nav>
                                        <ul>
                                            <li class="active has-dropdown"><a href="index-3.html">Home</a>
                                                <ul class="submenu transition-3">
                                                    <li><a href="index.html">Home Style 1</a></li>
                                                    <li><a href="index-2.html">Home Style 2</a></li>
                                                    <li><a href="index-3.html">Home Style 3</a></li>
                                                    <li><a href="index-4.html">Home Style 4</a></li>
                                                    <li><a href="index-5.html">Home Style 5</a></li>
                                                    <li><a href="index-6.html">Home Style 6</a></li>
                                                    <li><a href="index-7.html">Home Style 7</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu has-dropdown"><a href="shop.html">Shop</a>
                                                <ul class="submenu transition-3" data-background="{{asset('cdn/assets/img/bg/mega-menu-bg.jpg')}}">
                                                    <li class="has-dropdown">
                                                        <a href="shop.html">Shop Pages</a>
                                                        <ul>
                                                            <li><a href="shop.html">Standard Shop Page</a></li>
                                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                            <li><a href="shop-4-col.html">Shop 4 Column</a></li>
                                                            <li><a href="shop-3-col.html">Shop 3 Column</a></li>
                                                            <li><a href="shop.html">Shop Page</a></li>
                                                            <li><a href="shop.html">Shop Page </a></li>
                                                            <li><a href="shop.html">Shop Infinity</a></li>
                                                        </ul>
                                                    </li>
                                                    <li  class="has-dropdown">
                                                        <a href="shop.html">Products Pages</a>
                                                        <ul>
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="product-details.html">Product Page V2</a></li>
                                                            <li><a href="product-details.html">Product Page V3</a></li>
                                                            <li><a href="product-details.html">Product Page V4</a></li>
                                                            <li><a href="product-details.html">Simple Product</a></li>
                                                            <li><a href="product-details.html">Variable Product</a></li>
                                                            <li><a href="product-details.html">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li  class="has-dropdown">
                                                        <a href="shop.html">Other Shop Pages</a>
                                                        <ul>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="cart.html">Shopping Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="register.html">Register</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="blog.html">Blog</a>
                                                <ul class="submenu transition-3">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                                    <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                                                    <li><a href="blog-2-col-mas.html">BLog 2 Col Masonary</a></li>
                                                    <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="shop.html">Pages</a>
                                                <ul class="submenu transition-3">
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="account.html">My Account</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="error.html">Error 404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu-btn text-center d-lg-none">
                                    <a href="javascript:void(0);" class="mobile-menu-toggle"><i class="fas fa-bars"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-7 col-10">
                            <div class="header__action header__action-2 f-right">
                                <ul>
                                    <li><a href="#" class="search-toggle"><i class="ion-ios-search-strong"></i> Search</a></li>
                                    <li><a href="javascript:void(0);" class="cart"><i class="ion-bag"></i> Cart <span>(01)</span></a>
                                        <div class="mini-cart">
                                            <div class="mini-cart-inner">
                                                <ul class="mini-cart-list">
                                                    <li>
                                                        <div class="cart-img f-left">
                                                            <a href="product-details.html">
                                                                <img src="{{asset('cdn/assets/img/shop/product/cart-sm/16.jpg')}}" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="cart-content f-left text-left">
                                                            <h5>
                                                                <a href="product-details.html">Consectetur adi </a>
                                                            </h5>
                                                            <div class="cart-price">
                                                                <span class="ammount">1 <i class="fal fa-times"></i></span>
                                                                <span class="price">$ 400</span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon f-right mt-30">
                                                            <a href="#">
                                                                <i class="fal fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-img f-left">
                                                            <a href="product-details.html">
                                                                <img src="{{asset('cdn/assets/img/shop/product/cart-sm/17.jpg')}}" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="cart-content f-left text-left">
                                                            <h5>
                                                                <a href="product-details.html">Wooden container Bowl </a>
                                                            </h5>
                                                            <div class="cart-price">
                                                                <span class="ammount">1 <i class="fal fa-times"></i></span>
                                                                <span class="price">$ 400</span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon f-right mt-30">
                                                            <a href="#">
                                                                <i class="fal fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-img f-left">
                                                            <a href="product-details.html">
                                                                <img src="{{asset('cdn/assets/img/shop/product/cart-sm/18.jpg')}}" alt="" />
                                                            </a>
                                                        </div>
                                                        <div class="cart-content f-left text-left">
                                                            <h5>
                                                                <a href="product-details.html">Black White Towel </a>
                                                            </h5>
                                                            <div class="cart-price">
                                                                <span class="ammount">1 <i class="fal fa-times"></i></span>
                                                                <span class="price">$ 400</span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon f-right mt-30">
                                                            <a href="#">
                                                                <i class="fal fa-times"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="total-price d-flex justify-content-between mb-30">
                                                    <span>Subtotal:</span>
                                                    <span>$400.0</span>
                                                </div>
                                                <div class="checkout-link">
                                                    <a href="cart.html" class="os-btn">view Cart</a>
                                                    <a class="os-btn os-btn-black" href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <a href="javascript:void(0);"><i class="far fa-bars"></i></a>
                                        <ul class="extra-info">
                                            <li>
                                                <div class="my-account">
                                                    <div class="extra-title">
                                                        <h5>My Account</h5>
                                                    </div>
                                                    <ul>
                                                       <li><a href="account.html">My Account</a></li>
                                                        <li><a href="{{route('login')}}">Login</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="register.html">Create Account</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="lang">
                                                    <div class="extra-title">
                                                        <h5>Language</h5>
                                                    </div>
                                                    <ul>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">France</a></li>
                                                        <li><a href="#">Germany</a></li>
                                                        <li><a href="#">Bangla</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="currency">
                                                    <div class="extra-title">
                                                        <h5>currency</h5>
                                                    </div>
                                                    <ul>
                                                        <li><a href="#">USD - US Dollar</a></li>
                                                        <li><a href="#">EUR - Ruro</a></li>
                                                        <li><a href="#">GBP - Britis Pound</a></li>
                                                        <li><a href="#">INR - Indian Rupee</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->

        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- scroll up area end -->

        <!-- search area start -->
        <section class="header__search white-bg transition-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header__search-inner text-center">
                            <form action="#">
                                <div class="header__search-btn">
                                    <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                                </div>
                                <div class="header__search-header">
                                    <h3>Search</h3>
                                </div>
                                <div class="header__search-categories">
                                    <ul class="search-category">
                                        <li><a href="shop.html">All Categories</a></li>
                                        <li><a href="shop.html">Accessories</a></li>
                                        <li><a href="shop.html">Chair</a></li>
                                        <li><a href="shop.html">Tablet</a></li>
                                        <li><a href="shop.html">Men</a></li>
                                        <li><a href="shop.html">Women</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="header__search-input p-relative">
                                    <input type="text" placeholder="Search for products... ">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- search area end -->

        <!-- extra info area start -->
        <section class="extra__info transition-3">
            <div class="extra__info-inner">
                <div class="extra__info-close text-right">
                    <a href="javascript:void(0);" class="extra__info-close-btn"><i class="fal fa-times"></i></a>
                </div>
                <!-- side-mobile-menu start -->
                <nav class="side-mobile-menu d-block d-lg-none">
                    <ul id="mobile-menu-active">
                        <li class="active has-dropdown"><a href="index-3.html">Home</a>
                            <ul class="submenu transition-3">
                                <li><a href="index.html">Home Style 1</a></li>
                                <li><a href="index-2.html">Home Style 2</a></li>
                                <li><a href="index-3.html">Home Style 3</a></li>
                                <li><a href="index-4.html">Home Style 4</a></li>
                                <li><a href="index-5.html">Home Style 5</a></li>
                                <li><a href="index-6.html">Home Style 6</a></li>
                            </ul>
                        </li>
                        <li class="mega-menu has-dropdown"><a href="shop.html">Shop</a>
                            <ul class="submenu transition-3" data-background="{{asset('cdn/assets/img/bg/mega-menu-bg.jpg')}}">
                                <li class="has-dropdown">
                                    <a href="shop.html">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop.html">Standard Shop Page</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="shop-4-col.html">Shop 4 Column</a></li>
                                        <li><a href="shop-3-col.html">Shop 3 Column</a></li>
                                        <li><a href="shop.html">Shop Page</a></li>
                                        <li><a href="shop.html">Shop Page </a></li>
                                        <li><a href="shop.html">Shop Infinity</a></li>
                                    </ul>
                                </li>
                                <li  class="has-dropdown">
                                    <a href="shop.html">Products Pages</a>
                                    <ul>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="product-details.html">Product Page V2</a></li>
                                        <li><a href="product-details.html">Product Page V3</a></li>
                                        <li><a href="product-details.html">Product Page V4</a></li>
                                        <li><a href="product-details.html">Simple Product</a></li>
                                        <li><a href="product-details.html">Variable Product</a></li>
                                        <li><a href="product-details.html">External Product</a></li>
                                    </ul>
                                </li>
                                <li  class="has-dropdown">
                                    <a href="shop.html">Other Shop Pages</a>
                                    <ul>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="blog.html">Blog</a>
                            <ul class="submenu transition-3">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                <li><a href="blog-2-col.html">Blog 2 Column</a></li>
                                <li><a href="blog-2-col-mas.html">BLog 2 Col Masonary</a></li>
                                <li><a href="blog-3-col.html">Blog 3 Column</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="shop.html">Pages</a>
                            <ul class="submenu transition-3">
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="error.html">Error 404</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- side-mobile-menu end -->
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- extra info area end -->

        <main>

            <div class="box-25">

                <!-- slider area start -->
                <section class="slider__area slider__area-2 p-relative pl-15 pr-15">
                    <div class="slider-active">
                        <div class="single-slider single-slider-2 slider__height-2 d-flex align-items-center" data-background="{{asset('cdn/assets/img/slider/03/slider-01.jpg')}} ">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10 col-12">
                                        <div class="slider__content slider__content-black slider__content-3 pl-250">
                                            <h2 data-animation="fadeInUp" data-delay=".2s">Lighting <br> Creative Furniture</h2>
                                            <p data-animation="fadeInUp" data-delay=".4s">From luxury watches and chronographs to wall clocks and weather stations, Henning Koppel's.</p>
                                            <a href="#" class="os-btn os-btn-white" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider single-slider-2 slider__height-2 d-flex align-items-center" data-background="{{asset('cdn/assets/img/slider/03/slider-02.jpg')}}">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10 col-12">
                                        <div class="slider__content slider__content-3 pl-250">
                                            <h2 data-animation="fadeInUp" data-delay=".2s">Clock <br> Creative Furniture  </h2>
                                            <p data-animation="fadeInUp" data-delay=".4s">From luxury watches and chronographs to wall clocks and weather stations, Henning Koppel's.</p>
                                            <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider single-slider-2 slider__height-2 d-flex align-items-center" data-background="{{asset('cdn/assets/img/slider/03/slider-03.jpg')}}">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10 col-12">
                                        <div class="slider__content slider__content-3 pl-250">
                                            <h2 data-animation="fadeInUp" data-delay=".2s">Drop Chair <br>
                                                The Black Leather Edition</h2>
                                            <p data-animation="fadeInUp" data-delay=".4s">The Drop™ chair was designed by Arne Jacobsen in 1958 as part of his masterpiece, the legendary Radisson Blu Royal Hotel in Copenhagen.</p>
                                            <a href="#" class="os-btn os-btn-2" data-animation="fadeInUp" data-delay=".6s">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- slider area end -->
    
                <!-- banner area start -->
                <div class="banner__area pt-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="banner__item mb-30 p-relative">
                                    <div class="banner__thumb fix">
                                        <a href="product-details.html" class="w-img"><img src="{{asset('cdn/assets/img/shop/banner/banner-sm-1.jpg')}}" alt="banner"></a>
                                    </div>
                                    <div class="banner__content p-absolute transition-3">
                                        <h5><a href="product-details.html">Sunflower Clock <br> Quartz Hands</a></h5>
                                        <a href="product-details.html" class="link-btn">Discover now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="banner__item mb-30 p-relative">
                                    <div class="banner__thumb fix">
                                        <a href="product-details.html" class="w-img"><img src="{{asset('cdn/assets/img/shop/banner/banner-sm-2.jpg')}}" alt="banner"></a>
                                    </div>
                                    <div class="banner__content p-absolute transition-3">
                                        <h5><a href="product-details.html">Chair Kimi No Isu <br> Project</a></h5>
                                        <a href="product-details.html" class="link-btn">Discover now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="banner__item mb-30 p-relative">
                                    <div class="banner__thumb fix">
                                        <a href="product-details.html" class="w-img"><img src="{{asset('cdn/assets/img/shop/banner/banner-sm-3.jpg')}}" alt="banner"></a>
                                    </div>
                                    <div class="banner__content p-absolute transition-3">
                                        <h5><a href="product-details.html">Sweeper and Dustpan <br> by Jan Kochanski </a></h5>
                                        <a href="product-details.html" class="link-btn">Discover now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner area end -->
    
                <!-- product area start -->
                <section class="product__area pt-60 pb-65">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center mb-55">
                                    <div class="section__title mb-10">
                                        <h2>Trending Products</h2>
                                    </div>
                                    <div class="section__sub-title">
                                        <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="product__slider-3 owl-carousel">
                                    <div class="product__item">
                                        <div class="product__wrapper mb-80">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-1.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-10.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-80">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-2.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-9.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                                <div class="product__sale">
                                                    <span class="new">new</span>
                                                    <span class="percent">-16%</span>
                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__banner  mb-30">
                                    <a href="product-details.html" class="w-img"><img src="{{asset('cdn/assets/img/shop/product/product-big-3.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="product__banner w-img pb-25 mb-30">
                                    <a href="product-details.html" class="w-img"><img src="{{asset('cdn/assets/img/shop/product/product-big-2.jpg')}}" alt=""></a>
                                </div>
                                <div class="product__slider-3 owl-carousel">
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-1.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-10.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-2.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-9.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>
    
                                                </div>
                                                <div class="product__sale">
                                                    <span class="new">new</span>
                                                    <span class="percent">-16%</span>
                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- product area end -->
    
                <!-- banner area start -->
                <div class="banner__area-2 pb-60">
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__item-2 banner-right p-relative mb-30 pr-15">
                                    <div class="banner__thumb fix">
                                        <a href="product-details.html" class="w-img"><img src="{{asset('cdn/assets/img/shop/banner/banner-big-1.jpg')}}" alt="banner"></a>
                                    </div>
                                    <div class="banner__content-2 p-absolute transition-3">
                                        <span>Products Essentials</span>
                                        <h4><a href="product-details.html">Bottle With Wooden Cork</a></h4>
                                        <p>Mirum est notare quam littera gothica, quam nunc putamus <br> parum claram, anteposuerit litterarum formas.</p>
                                        <a href="product-details.html" class="os-btn os-btn-2">buy now / <span>$59.25</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class=" banner__item-2 banner-left p-relative mb-30 pl-15">
                                    <div class="banner__thumb fix">
                                        <a href="product-details.html" class="w-img"><img src="{{asset('cdn/assets/img/shop/banner/banner-big-2.jpg')}}" alt="banner"></a>
                                    </div>
                                    <div class="banner__content-2 banner__content-2-right p-absolute transition-3">
                                        <span>Products Furniture</span>
                                        <h4><a href="product-details.html">Hauteville Plywood Chair</a></h4>
                                        <p>Mirum est notare quam littera gothica, quam nunc putamus <br> parum claram, anteposuerit litterarum formas.</p>
                                        <a href="product-details.html" class="os-btn os-btn-2">buy now / <span>$396.99</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner area end -->
    
                <!-- sale off area start -->
                <section class="sale__area pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center mb-55">
                                    <div class="section__title mb-10">
                                        <h2>Sale Off</h2>
                                    </div>
                                    <div class="section__sub-title">
                                        <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="sale__area-slider owl-carousel">
                                    <div class="sale__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-1.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-10.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>

                                                </div>
                                                <div class="product__sale">
                                                    <span class="new">new</span>
                                                    <span class="percent">-16%</span>
                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-2.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-9.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-3.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-8.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-4.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-11.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>

                                                </div>
                                                <div class="product__sale">
                                                    <span class="new">new</span>
                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-5.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-12.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>

                                                </div>
                                                <div class="product__sale">
                                                    <span class="new">new</span>
                                                    <span class="percent">-25%</span>
                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale__item">
                                        <div class="product__wrapper mb-60">
                                            <div class="product__thumb">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="{{asset('cdn/assets/img/shop/product/product-6.jpg')}}" alt="product-img">
                                                    <img class="product__thumb-2" src="{{asset('cdn/assets/img/shop/product/product-2.jpg')}}" alt="product-img">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                        <i class="fal fa-sliders-h"></i>
                                                    </a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                                        <i class="fal fa-search"></i>
                                                    </a>

                                                </div>
                                                <div class="product__sale">
                                                    <span class="new">new</span>
                                                </div>
                                            </div>
                                            <div class="product__content p-relative">
                                                <div class="product__content-inner">
                                                    <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                    <div class="product__price transition-3">
                                                        <span>$96.00</span>
                                                        <span class="old-price">$96.00</span>
                                                    </div>
                                                </div>
                                                <div class="add-cart p-absolute transition-3">
                                                    <a href="#">+ Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- sale off area end -->
    
                <!-- testimonial area start -->
                <section class="testimonial__area box-m-15 pt-100 pb-140" data-background="{{asset('cdn/assets/img/testimonial/testimonial-bg.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                                <div class="testimonial__nav">
                                    <div class="testimonial__nav-thumb item-1">
                                        <img src="{{asset('cdn/assets/img/testimonial/person-1.jpg')}}" alt="person">
                                    </div>
                                    <div class="testimonial__nav-thumb item-2">
                                        <img src="{{asset('cdn/assets/img/testimonial/person-2.jpg')}}" alt="person">
                                    </div>
                                    <div class="testimonial__nav-thumb item-3">
                                        <img src="{{asset('cdn/assets/img/testimonial/person-3.jpg')}}" alt="person">
                                    </div>
                                    <div class="testimonial__nav-thumb item-4">
                                        <img src="{{asset('cdn/assets/img/testimonial/person-4.jpg')}}" alt="person">
                                    </div>
                                </div>
                                <div class="testimonial__wrapper mt-40">
                                    <div class="testimonial__item item-1">
                                        <div class="avater__info mb-15">
                                            <h6>Mason Robinson</h6>
                                            <span>UX - Designer</span>
                                        </div>
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius consuetudium lectorum.</p>
                                    </div>
                                    <div class="testimonial__item item-2">
                                        <div class="avater__info mb-15">
                                            <h6>David Cruso</h6>
                                            <span>Web Developer</span>
                                        </div>
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius consuetudium lectorum.</p>
                                    </div>
                                    <div class="testimonial__item item-3">
                                        <div class="avater__info mb-15">
                                            <h6>Shahnewaz Sakil</h6>
                                            <span>Web Designer</span>
                                        </div>
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius consuetudium lectorum.</p>
                                    </div>
                                    <div class="testimonial__item item-4">
                                        <div class="avater__info mb-15">
                                            <h6>Salim Rana</h6>
                                            <span>WP Expart</span>
                                        </div>
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius consuetudium lectorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- testimonial area end -->

                <!-- product offer area start -->
                <section class="product__offer pt-115 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__offer-inner mb-30">
                                    <div class="product__title mb-60">
                                        <h4>Top Seller Products</h4>
                                    </div>
                                    <div class="product__offer-slider owl-carousel">
                                        <div class="product__offer-wrapper">
                                            <div class="sidebar__widget-content">
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-1.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$98</span>
                                                            <span class="price-old">$128</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-2.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$50</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-3.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$60</span>
                                                            <span class="price-old">$70</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__offer-wrapper">
                                            <div class="sidebar__widget-content">
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-4.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$200</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-5.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$80</span>
                                                            <span class="price-old">$120</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-6.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$150</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__offer-inner mb-30">
                                    <div class="product__title mb-60">
                                        <h4>On Sale Products</h4>
                                    </div>
                                    <div class="product__offer-slider owl-carousel">
                                        <div class="product__offer-wrapper">
                                            <div class="sidebar__widget-content">
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-4.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$30</span>
                                                            <span class="price-old">$45</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-5.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$102</span>
                                                            <span class="price-old">$122</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-6.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$60</span>
                                                            <span class="price-old">$88</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__offer-wrapper">
                                            <div class="sidebar__widget-content">
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-3.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$140</span>
                                                            <span class="price-old">$150</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-2.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$40</span>
                                                            <span class="price-old">$50</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-1.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="price">
                                                            <span>$300</span>
                                                            <span class="price-old">$350</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="product__offer-inner mb-30">
                                    <div class="product__title mb-60">
                                        <h4>Top Rated Products</h4>
                                    </div>
                                    <div class="product__offer-slider owl-carousel">
                                        <div class="product__offer-wrapper">
                                            <div class="sidebar__widget-content">
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-7.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="rating rating-shop mb-5">
                                                            <ul>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fal fa-star"></i></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price">
                                                            <span>$20</span>
                                                            <span class="price-old">$40</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-8.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="rating rating-shop mb-5">
                                                            <ul>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fal fa-star"></i></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price">
                                                            <span>$35</span>
                                                            <span class="price-old">$40</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-9.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="rating rating-shop mb-5">
                                                            <ul>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fal fa-star"></i></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price">
                                                            <span>$65</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__offer-wrapper">
                                            <div class="sidebar__widget-content">
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-3.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="rating rating-shop mb-5">
                                                            <ul>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fal fa-star"></i></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price">
                                                            <span>$98</span>
                                                            <span class="price-old">$128</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-2.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="rating rating-shop mb-5">
                                                            <ul>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fal fa-star"></i></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price">
                                                            <span>$98</span>
                                                            <span class="price-old">$128</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="features__product-wrapper d-flex mb-20">
                                                    <div class="features__product-thumb mr-15">
                                                        <a href="product-details.html"><img src="{{asset('cdn/assets/img/shop/product/sm/pro-sm-1.jpg')}}" alt="pro-sm-1"></a>
                                                    </div>
                                                    <div class="features__product-content">
                                                        <h5><a href="product-details.html">Wooden container Bowl</a></h5>
                                                        <div class="rating rating-shop mb-5">
                                                            <ul>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fas fa-star"></i></span></li>
                                                                <li><span><i class="fal fa-star"></i></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price">
                                                            <span>$98</span>
                                                            <span class="price-old">$128</span>
                                                            <div class="add-cart p-absolute transition-3">
                                                                <a href="#">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- product offer area end -->

                <!-- client slider area start -->
                <section class="client__area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="client__slider pt-80 pb-80 border-top-1 owl-carousel text-center">
                                    <div class="client__thumb">
                                        <a href="#"><img src="{{asset('cdn/assets/img/client/client-1.jpg')}}" alt="client"></a>
                                    </div>
                                    <div class="client__thumb">
                                        <a href="#"><img src="{{asset('cdn/assets/img/client/client-2.jpg')}}" alt="client"></a>
                                    </div>
                                    <div class="client__thumb">
                                        <a href="#"><img src="{{asset('cdn/assets/img/client/client-3.jpg')}}" alt="client"></a>
                                    </div>
                                    <div class="client__thumb">
                                        <a href="#"><img src="{{asset('cdn/assets/img/client/client-4.jpg')}}" alt="client"></a>
                                    </div>
                                    <div class="client__thumb">
                                        <a href="#"><img src="{{asset('cdn/assets/img/client/client-5.jp')}}g" alt="client"></a>
                                    </div>
                                    <div class="client__thumb">
                                        <a href="#"><img src="{{asset('cdn/assets/img/client/client-4.jpg')}}" alt="client"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- client slider area end -->

                <!-- subscribe area start -->
                <section class="subscribe__area pb-100 grey-bg box-m-15">
                    <div class="container">
                        <div class="subscribe__inner subscribe__inner-2 pt-120">
                            <div class="row">
                                <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                                    <div class="subscribe__content text-center">
                                        <h2>Get Discount Info</h2>
                                        <p>Subscribe to the Outstock mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                                        <div class="subscribe__form">
                                            <form action="#">
                                                <input type="email" placeholder="Subscribe to our newsletter...">
                                                <button class="os-btn os-btn-2 os-btn-3">subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- subscribe area end -->

                <!-- blog area start -->
                <section class="blog__area pt-90 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__title-wrapper text-center mb-55">
                                    <div class="section__title mb-10">
                                        <h2>Our Blog Posts</h2>
                                    </div>
                                    <div class="section__sub-title">
                                        <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="blog__slider owl-carousel">
                                    <div class="blog__item mb-30">
                                        <div class="blog__thumb fix">
                                            <a href="blog-details.html" class="w-img"><img src="{{asset('cdn/assets/img/blog/blog-1.jpg')}}" alt="blog"></a>
                                        </div>
                                        <div class="blog__content">
                                            <h4><a href="blog-details.html">Anteposuerit litterarum formas.</a></h4>
                                            <div class="blog__meta">
                                                <span>By <a href="#">Shahnewaz Sakil</a></span>
                                                <span>/ September 14, 2017</span>
                                            </div>
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                            <a href="blog-details.html" class="os-btn">read more</a>
                                        </div>
                                    </div>
                                    <div class="blog__item mb-30">
                                        <div class="blog__thumb fix">
                                            <a href="blog-details.html" class="w-img"><img src="{{asset('cdn/assets/img/blog/blog-2.jpg')}}" alt="blog"></a>
                                        </div>
                                        <div class="blog__content">
                                            <h4><a href="blog-details.html">Hanging fruit to identify</a></h4>
                                            <div class="blog__meta">
                                                <span>By <a href="#">Shahnewaz Sakil</a></span>
                                                <span>/ September 14, 2017</span>
                                            </div>
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                            <a href="blog-details.html" class="os-btn">read more</a>
                                        </div>
                                    </div>
                                    <div class="blog__item mb-30">
                                        <div class="blog__thumb fix">
                                            <a href="blog-details.html" class="w-img"><img src="{{asset('cdn/assets/img/blog/blog-3.jpg')}}" alt="blog"></a>
                                        </div>
                                        <div class="blog__content">
                                            <h4><a href="blog-details.html">The information highway will</a></h4>
                                            <div class="blog__meta">
                                                <span>By <a href="#">Shahnewaz Sakil</a></span>
                                                <span>/ September 14, 2017</span>
                                            </div>
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                            <a href="blog-details.html" class="os-btn">read more</a>
                                        </div>
                                    </div>
                                    <div class="blog__item mb-30">
                                        <div class="blog__thumb fix">
                                            <a href="blog-details.html" class="w-img"><img src="{{asset('cdn/assets/img/blog/blog-2.jpg')}}" alt="blog"></a>
                                        </div>
                                        <div class="blog__content">
                                            <h4><a href="blog-details.html">Additional clickthroughs from</a></h4>
                                            <div class="blog__meta">
                                                <span>By <a href="#">Shahnewaz Sakil</a></span>
                                                <span>/ September 14, 2017</span>
                                            </div>
                                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                            <a href="blog-details.html" class="os-btn">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- blog area end -->
    
                <!-- shop modal start -->
                <!-- Modal -->
                <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered product-modal" role="document">
                        <div class="modal-content">
                            <div class="product__modal-wrapper p-relative">
                                <div class="product__modal-close p-absolute">
                                    <button   data-dismiss="modal"><i class="fal fa-times"></i></button>
                                </div>
                                <div class="product__modal-inner">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                                            <div class="product__modal-box">
                                                <div class="tab-content mb-20" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                        <div class="product__modal-img w-img">
                                                            <img src="{{asset('cdn/assets/img/shop/product/quick-view/quick-big-1.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                        <div class="product__modal-img w-img">
                                                            <img src="{{asset('cdn/assets/img/shop/product/quick-view/quick-big-2.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                        <div class="product__modal-img w-img">
                                                            <img src="{{asset('cdn/assets/img/shop/product/quick-view/quick-big-3.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <nav>
                                                    <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                                        <div class="product__nav-img w-img">
                                                            <img src="{{asset('cdn/assets/img/shop/product/quick-view/quick-sm-1.jpg')}}" alt="">
                                                        </div>
                                                        </a>
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                        <div class="product__nav-img w-img">
                                                            <img src="{{asset('cdn/assets/img/shop/product/quick-view/quick-sm-2.jpg')}}" alt="">
                                                        </div>
                                                        </a>
                                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                                        <div class="product__nav-img w-img">
                                                            <img src="{{asset('cdn/assets/img/shop/product/quick-view/quick-sm-3.jpg')}}" alt="">
                                                        </div>
                                                        </a>
                                                    </div>
                                                    </nav>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                                            <div class="product__modal-content">
                                                <h4><a href="product-details.html">Wooden container Bowl</a></h4>
                                                <div class="rating rating-shop mb-15">
                                                    <ul>
                                                        <li><span><i class="fas fa-star"></i></span></li>
                                                        <li><span><i class="fas fa-star"></i></span></li>
                                                        <li><span><i class="fas fa-star"></i></span></li>
                                                        <li><span><i class="fas fa-star"></i></span></li>
                                                        <li><span><i class="fal fa-star"></i></span></li>
                                                    </ul>
                                                    <span class="rating-no ml-10">
                                                        3 rating(s)
                                                    </span>
                                                </div>
                                                <div class="product__price-2 mb-25">
                                                    <span>$96.00</span>
                                                    <span class="old-price">$96.00</span>
                                                </div>
                                                <div class="product__modal-des mb-30">
                                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                                </div>
                                                <div class="product__modal-form">
                                                    <form action="#">
                                                        <div class="product__modal-input size mb-20">
                                                            <label>Size <i class="fas fa-star-of-life"></i></label>
                                                            <select>
                                                                <option>- Please select -</option>
                                                                <option> S</option>
                                                                <option> M</option>
                                                                <option> L</option>
                                                                <option> XL</option>
                                                                <option> XXL</option>
                                                            </select>
                                                        </div>
                                                        <div class="product__modal-input color mb-20">
                                                            <label>Color <i class="fas fa-star-of-life"></i></label>
                                                            <select>
                                                                <option>- Please select -</option>
                                                                <option> Black</option>
                                                                <option> Yellow</option>
                                                                <option> Blue</option>
                                                                <option> White</option>
                                                                <option> Ocean Blue</option>
                                                            </select>
                                                        </div>
                                                        <div class="product__modal-required mb-5">
                                                            <span >Repuired Fiields *</span>
                                                        </div>
                                                        <div class="pro-quan-area d-lg-flex align-items-center">
                                                            <div class="product-quantity-title">
                                                                <label>Quantity</label>
                                                            </div>
                                                            <div class="product-quantity">
                                                                <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                                            </div>
                                                            <div class="pro-cart-btn ml-20">
                                                                <a href="#" class="os-btn os-btn-black os-btn-3 mr-10">+ Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop modal end -->
            </div>
        </main>

        <!-- footer area start -->
        <div class="box-25 box-m-15 box-pb-40">
            <section class="footer__area footer-bg">
                <div class="footer__top pt-100 pb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="footer__widget mb-30">
                                    <div class="footer__widget-title mb-25">
                                        <a href="index.html"><img src="{{asset('cdn/assets/img/logo/logo-2.png')}}" alt="logo"></a>
                                    </div>
                                    <div class="footer__widget-content">
                                        <p>Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                                        <div class="footer__contact">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fal fa-map-marker-alt"></i>
                                                    </div>
                                                    <div class="text">
                                                        <span>Add: 1234 Heaven Stress, Beverly Hill, Melbourne, USA.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fal fa-envelope-open-text"></i>
                                                    </div>
                                                    <div class="text">
                                                        <span>Email: <a href="https://wphix.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d4e6263796c6e794d6f6c7e646e7965686068236e6260">[email&#160;protected]</a></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fal fa-phone-alt"></i>
                                                    </div>
                                                    <div class="text">
                                                        <span>Phone Number: (800) 123 456 789</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                <div class="footer__widget mb-30">
                                    <div class="footer__widget-title">
                                        <h5>information</h5>
                                    </div>
                                    <div class="footer__widget-content">
                                        <div class="footer__links">
                                            <ul>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="#">Delivery Inforamtion</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms & Condition</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                <div class="footer__widget mb-30">
                                    <div class="footer__widget-title mb-25">
                                        <h5>Customer Service</h5>
                                    </div>
                                    <div class="footer__widget-content">
                                        <div class="footer__links">
                                            <ul>
                                                <li><a href="#">Shipping Policy</a></li>
                                                <li><a href="#">Help & Contact Us</a></li>
                                                <li><a href="#">Returns & Refunds</a></li>
                                                <li><a href="#">Online Stores</a></li>
                                                <li><a href="#">Terms & Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7">
                                <div class="footer__copyright">
                                    <p>Developed by <a href="http://mahfuz.test/" target="blank">Mahfuzul Islam</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                                <div class="footer__social f-right">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- footer area end -->
@endsection