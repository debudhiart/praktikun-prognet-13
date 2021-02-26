@extends('user_layouts.user_master')
@section('content')

<div class="container-fluid block bg-grey-lightness">
    <div class="row">
        <div class="container">
            
            <div class="row hidden-xs">
                <div class="col-xs-12 img-on-bg">
                    <img src="{{ asset('pengguna/html/images/blocks/parallax-bg-popular-on-shop.png') }}" alt="">
                </div>
            </div>
            
            <div class="row">
                
                <!-- Asside -->
                <div class="col-md-4 col-lg-3 asside">
                    <!-- Asside nav -->
                    <div class="asside-nav bg-white hidden-xs">
                        <div class="header text-uppercase text-white bg-blue">
                            Category
                        </div>

                        <ul class="nav-vrt bg-white">
                            <li class="active">
                                <a href="/user_layouts/user_kategori" class="btn-material">Peralatan Dapur</a>
                            </li>

                            <li>
                                <a href="/user_layouts/user_kategori" class="btn-material">Peralatan Kamar Mandi</a>
                            </li>

                            <li>
                                <a href="/user_layouts/user_kategori" class="btn-material">Peralatan Kebun</a>
                            </li>

                            <li>
                                <a href="/user_layouts/user_kategori" class="btn-material">Peralatan Tukang</a>
                            </li>

                            <li>
                                <a href="/user_layouts/user_kategori" class="btn-material">Electronik dapur</a>
                            </li>
                        </ul>

                    </div><!-- / Asside nav -->
                    
                    <!-- List categories for mobile -->
                    <div class="inblock padding-none visible-xs">
                        <div class="mobile-category nav-close">
                            
                            <!-- Header -->
                            <div class="header bg-blue">
                                <span class="head">Category</span>

                                <span class="btn-swither" >
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>

                            <ul class="nav-vrt bg-white">
                                <li class="active">
                                    <a href="#" class="btn-material">Man line
                                        <i class="nav-icon-open icofont icofont-plus"></i>
                                        <i class="nav-icon-close icofont icofont-minus"></i>
                                    </a>

                                    <div class="sub-nav bg-grey-light">
                                        <ul class="sub">
                                            <li>
                                                <a href="#" class="btn-material">Shirts</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Pants</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Footwear</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Belts</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Bags</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Perfume</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Jewerly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="#" class="btn-material">Woman
                                        <i class="nav-icon-open icofont icofont-plus"></i>
                                        <i class="nav-icon-close icofont icofont-minus"></i>
                                    </a>

                                    <div class="sub-nav bg-grey-light">
                                        <ul class="sub">
                                            <li>
                                                <a href="#" class="btn-material">Shirts</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Pants</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Footwear</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Belts</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Bags</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Perfume</a>
                                            </li>
                                            <li>
                                                <a href="#" class="btn-material">Jewerly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="#" class="btn-material">Jewerly</a>
                                </li>

                                <li>
                                    <a href="#" class="btn-material">Electronics</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div><!-- ./ Asside -->
                
                <!-- Item list -->
                <div class="col-md-8 col-lg-9 shop-items-set shop-items-full">
                    
                    <!-- Paginations -->
                    <div class="row pagination-block hidden-xs">
                        <div class="col-xs-12">
                            
                            <div class="wrap">
                                
                                <!-- Pagination -->
                                <ul class="pagination">

                                    <li>
                                        <a href="#">
                                            <span><i class="icofont icofont-rounded-left"></i></span>
                                        </a>
                                    </li>

                                    <li><a href="#">01</a></li>
                                    <li class="active"><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>

                                    <li>
                                        <a href="#">
                                            <span><i class="icofont icofont-rounded-right"></i></span>
                                        </a>
                                    </li>

                                </ul>

                                <!-- Switch style on shop item -->
                                <ul class="swither">
                                    <li class="rows active">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- Item list -->
                    <div class="row item-wrapper">
                        
                        <!-- Shop item 1 / timer -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer"
                                data-timer-date="2018, 2, 5, 0, 0, 0">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        T-shirt
                                        <span>
                                            fake Brand
                                        </span>

                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                24 members rate it
                                            </div>
                                        </div>

                                        <!-- Badge -->
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span>
                                    </div>

                                    <!-- Image -->
                                    <div class="image">
                                        <img class="hover" src="{{ asset('pengguna/html/images/shop/img-01-1.jpg') }}" alt="">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-01.jpg') }}" alt="">
                                    </div>

                                    <!-- Caption -->
                                    <div class="caption">
                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                24 members
                                                <span>like it</span>
                                            </div>
                                        </div>

                                        <!-- Timer -->
                                        <div class="timer-body">
                                            <span class="sale text-red">Sale</span>
                                            <span class="tdtimer-d"></span>d 
                                            <span class="tdtimer-h"></span>h 
                                            <span class="tdtimer-m"></span>m 
                                            <span class="tdtimer-s"></span>s 
                                        </div>

                                        <!-- Features list -->
                                        <ul class="features">
                                            <li>
                                                <i class="icofont icofont-shield"></i>
                                                <span>24 days. Money Back Guarantee</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-ship"></i>
                                                <span>Free shipping</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-hand"></i>
                                                <span>Free help and setup</span>
                                            </li>
                                        </ul>

                                        <!-- Text -->
                                        <p class="text">
                                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        </p>
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="/user_layouts/user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">
                                            {{-- <!-- Sale price -->
                                            <span class="sale">
                                                <span>234<small>.00</small></span>
                                            </span> --}}

                                            <!-- Price -->
                                            <span class="price">
                                                RP. 175.500
                                            </span>
                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>

                                    <!-- Favorite added -->
                                    <a href="#" class="favorite-link active">
                                        <i class="icofont icofont-star"></i>
                                        to favorite
                                    </a>

                                    <!-- More link -->
                                    <a href="#" class="more-link">More info</a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 2 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Jacket
                                        <span>
                                            fake Brand
                                        </span>

                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                124 members rate it
                                            </div>
                                        </div>

                                        <!-- Badge -->
                                        <!--span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span-->
                                    </div>

                                    <!-- Image -->
                                    <div class="image">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-02.jpg') }}" alt="">
                                    </div>

                                    <!-- Caption -->
                                    <div class="caption">
                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                124 members
                                                <span>like it</span>
                                            </div>
                                        </div>

                                        <!-- Timer -->
                                        <div class="timer-body">
                                            <span class="sale text-red">Sale</span>
                                            <span class="tdtimer-d"></span>d 
                                            <span class="tdtimer-h"></span>h 
                                            <span class="tdtimer-m"></span>m 
                                            <span class="tdtimer-s"></span>s 
                                        </div>

                                        <!-- Features list -->
                                        <ul class="features">
                                            <li>
                                                <i class="icofont icofont-shield"></i>
                                                <span>24 days. Money Back Guarantee</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-ship"></i>
                                                <span>Free shipping</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-hand"></i>
                                                <span>Free help and setup</span>
                                            </li>
                                        </ul>

                                        <!-- Text -->
                                        <p class="text">
                                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        </p>
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="/user_layouts/user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">
                                            {{-- <!-- Sale price -->
                                            <span class="sale">
                                                <span>234<small>.00</small></span>
                                            </span> --}}

                                            <!-- Price -->
                                            <span class="price">
                                                RP. 175.500
                                            </span>
                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>

                                    <!-- Favorite added -->
                                    <a href="#" class="favorite-link">
                                        <i class="icofont icofont-star"></i>
                                        to favorite
                                    </a>

                                    <!-- More link -->
                                    <a href="#" class="more-link">More info</a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 3 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Grey shoes
                                        <span>
                                            fake Brand
                                        </span>

                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                24 members rate it
                                            </div>
                                        </div>

                                        <!-- Badge
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span> -->
                                    </div>

                                    <!-- Image -->
                                    <div class="image">
                                        <img class="hover" src="{{ asset('pengguna/html/images/shop/img-08-1.jpg') }}" alt="">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-08.jpg') }}" alt="">
                                    </div>

                                    <!-- Caption -->
                                    <div class="caption">
                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                24 members
                                                <span>like it</span>
                                            </div>
                                        </div>

                                        <!-- Timer -->
                                        <div class="timer-body">
                                            <span class="sale text-red">Sale</span>
                                            <span class="tdtimer-d"></span>d 
                                            <span class="tdtimer-h"></span>h 
                                            <span class="tdtimer-m"></span>m 
                                            <span class="tdtimer-s"></span>s 
                                        </div>

                                        <!-- Features list -->
                                        <ul class="features">
                                            <li>
                                                <i class="icofont icofont-shield"></i>
                                                <span>24 days. Money Back Guarantee</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-ship"></i>
                                                <span>Free shipping</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-hand"></i>
                                                <span>Free help and setup</span>
                                            </li>
                                        </ul>

                                        <!-- Text -->
                                        <p class="text">
                                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        </p>
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="/user_layouts/user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">
                                            {{-- <!-- Sale price -->
                                            <span class="sale">
                                                <span>234<small>.00</small></span>
                                            </span> --}}

                                            <!-- Price -->
                                            <span class="price">
                                                RP. 175.500
                                            </span>
                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>

                                    <!-- Favorite added -->
                                    <a href="#" class="favorite-link">
                                        <i class="icofont icofont-star"></i>
                                        to favorite
                                    </a>

                                    <!-- More link -->
                                    <a href="#" class="more-link">More info</a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 4 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Food President
                                        <span>
                                            fake Brand
                                        </span>

                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                24 members rate it
                                            </div>
                                        </div>

                                        <!-- Badge
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span> -->
                                    </div>

                                    <!-- Image -->
                                    <div class="image">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-09.jpg') }}" alt="">
                                    </div>

                                    <!-- Caption -->
                                    <div class="caption">
                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                24 members
                                                <span>like it</span>
                                            </div>
                                        </div>

                                        <!-- Timer -->
                                        <div class="timer-body">
                                            <span class="sale text-red">Sale</span>
                                            <span class="tdtimer-d"></span>d 
                                            <span class="tdtimer-h"></span>h 
                                            <span class="tdtimer-m"></span>m 
                                            <span class="tdtimer-s"></span>s 
                                        </div>

                                        <!-- Features list -->
                                        <ul class="features">
                                            <li>
                                                <i class="icofont icofont-shield"></i>
                                                <span>24 days. Money Back Guarantee</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-ship"></i>
                                                <span>Free shipping</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-hand"></i>
                                                <span>Free help and setup</span>
                                            </li>
                                        </ul>

                                        <!-- Text -->
                                        <p class="text">
                                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        </p>
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="/user_layouts/user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">
                                            {{-- <!-- Sale price -->
                                            <span class="sale">
                                                <span>234<small>.00</small></span>
                                            </span> --}}

                                            <!-- Price -->
                                            <span class="price">
                                                RP. 175.500
                                            </span>
                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>

                                    <!-- Favorite added -->
                                    <a href="#" class="favorite-link">
                                        <i class="icofont icofont-star"></i>
                                        to favorite
                                    </a>

                                    <!-- More link -->
                                    <a href="#" class="more-link">More info</a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 5 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Shoes for walking
                                        <span>
                                            fake Brand
                                        </span>

                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                24 members rate it
                                            </div>
                                        </div>

                                        <!-- Badge
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span> -->
                                    </div>

                                    <!-- Image -->
                                    <div class="image">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-10.jpg') }}" alt="">
                                    </div>

                                    <!-- Caption -->
                                    <div class="caption">
                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li class="active">
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                24 members
                                                <span>like it</span>
                                            </div>
                                        </div>

                                        <!-- Timer -->
                                        <div class="timer-body">
                                            <span class="sale text-red">Sale</span>
                                            <span class="tdtimer-d"></span>d 
                                            <span class="tdtimer-h"></span>h 
                                            <span class="tdtimer-m"></span>m 
                                            <span class="tdtimer-s"></span>s 
                                        </div>

                                        <!-- Features list -->
                                        <ul class="features">
                                            <li>
                                                <i class="icofont icofont-shield"></i>
                                                <span>24 days. Money Back Guarantee</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-ship"></i>
                                                <span>Free shipping</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-hand"></i>
                                                <span>Free help and setup</span>
                                            </li>
                                        </ul>

                                        <!-- Text -->
                                        <p class="text">
                                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        </p>
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="/user_layouts/user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">
                                            {{-- <!-- Sale price -->
                                            <span class="sale">
                                                <span>234<small>.00</small></span>
                                            </span> --}}

                                            <!-- Price -->
                                            <span class="price">
                                                RP. 175.500
                                            </span>
                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>

                                    <!-- Favorite added -->
                                    <a href="#" class="favorite-link active">
                                        <i class="icofont icofont-star"></i>
                                        to favorite
                                    </a>

                                    <!-- More link -->
                                    <a href="#" class="more-link">More info</a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 6 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Men's shorts
                                        <span>
                                            fake Brand
                                        </span>

                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                not yet rated
                                            </div>
                                        </div>

                                        <!-- Badge
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span> -->
                                    </div>

                                    <!-- Image -->
                                    <div class="image">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-11.jpg') }}" alt="">
                                    </div>

                                    <!-- Caption -->
                                    <div class="caption">
                                        <!-- Rate -->
                                        <div class="rate">

                                            <ul class="stars">
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-star"></i>
                                                </li>
                                            </ul>

                                            <div class="rate-info">
                                                not yet rated
                                            </div>
                                        </div>

                                        <!-- Timer -->
                                        <div class="timer-body">
                                            <span class="sale text-red">Sale</span>
                                            <span class="tdtimer-d"></span>d 
                                            <span class="tdtimer-h"></span>h 
                                            <span class="tdtimer-m"></span>m 
                                            <span class="tdtimer-s"></span>s 
                                        </div>

                                        <!-- Features list -->
                                        <ul class="features">
                                            <li>
                                                <i class="icofont icofont-shield"></i>
                                                <span>24 days. Money Back Guarantee</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-ship"></i>
                                                <span>Free shipping</span>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-hand"></i>
                                                <span>Free help and setup</span>
                                            </li>
                                        </ul>

                                        <!-- Text -->
                                        <p class="text">
                                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                        </p>
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="/user_layouts/user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">
                                            {{-- <!-- Sale price -->
                                            <span class="sale">
                                                <span>234<small>.00</small></span>
                                            </span> --}}

                                            <!-- Price -->
                                            <span class="price">
                                                RP. 175.500
                                            </span>
                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>

                                    <!-- Favorite added -->
                                    <a href="#" class="favorite-link">
                                        <i class="icofont icofont-star"></i>
                                        to favorite
                                    </a>

                                    <!-- More link -->
                                    <a href="#" class="more-link">More info</a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->
                    </div>
                    
                    <!-- Paginations -->
                    <div class="row pagination-block bottom">
                        <div class="col-xs-12">
                            
                            <div class="wrap">
                                
                                <!-- Pagination -->
                                <ul class="pagination">

                                    <li>
                                        <a href="#">
                                            <span><i class="icofont icofont-rounded-left"></i></span>
                                        </a>
                                    </li>

                                    <li><a href="#">01</a></li>
                                    <li class="active"><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>

                                    <li>
                                        <a href="#">
                                            <span><i class="icofont icofont-rounded-right"></i></span>
                                        </a>
                                    </li>

                                </ul>

                                <!-- Switch style on shop item -->
                                <ul class="swither">
                                    <li class="rows active">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Item list -->
            </div>
        </div>
    </div><!-- / Parallax wrapper -->
</div>

<!-- 
BLOCK PARALLAX
=============================================== -->
<div class="container-fluid">
    
    <div class="row parallax-wrap">

        <div class="container block">
            
        </div>
        
        <!-- Parallax block -->
        <div class="parallax bg-grey-light opc-7"
                data-parallax-image="{{ asset('pengguna/html/images/blocks/bg-02.jpg') }}"
                data-speed-direction="-.2"></div><!-- / Parallax block -->
    </div><!-- / Parallax wrapper -->
</div>
<!-- END: BLOCK PARALLAX -->

@endsection