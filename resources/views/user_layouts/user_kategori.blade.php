@extends('user_layouts.user_master')
@section('content')

<div class="container-fluid block bg-grey-lightness">
    <div class="row">
        <div class="container">
            
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
                                <a href="kategori" class="btn-material">Peralatan Dapur</a>
                            </li>

                            <li>
                                <a href="kategori" class="btn-material">Peralatan Kamar Mandi</a>
                            </li>

                            <li>
                                <a href="kategori" class="btn-material">Peralatan Kebun</a>
                            </li>

                            <li>
                                <a href="kategori" class="btn-material">Peralatan Tukang</a>
                            </li>

                            <li>
                                <a href="kategori" class="btn-material">Electronik dapur</a>
                            </li>
                        </ul>

                    </div><!-- / Asside nav -->
                    
                    <!-- List categories for mobile -->
                    <div class="inblock padding-none visible-xs">
                        <div class="mobile-category nav-close">
                            
                            <!-- Header -->
                            <div class="header bg-blue">
                                <span class="head">Category</span>
                            </div>
                            <ul class="nav-vrt bg-white">
                                <li class="active">
                                    <a href="kategori" class="btn-material">Peralatan Dapur</a>
                                </li>
    
                                <li>
                                    <a href="kategori" class="btn-material">Peralatan Kamar Mandi</a>
                                </li>
    
                                <li>
                                    <a href="kategori" class="btn-material">Peralatan Kebun</a>
                                </li>
    
                                <li>
                                    <a href="kategori" class="btn-material">Peralatan Tukang</a>
                                </li>
    
                                <li>
                                    <a href="kategori" class="btn-material">Electronik dapur</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- ./ Asside -->
                
                <div class="col-md-8 col-lg-9 shop-items-set">
                    
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
                                    <li class="cols active">
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

                                            Panci Steamboat 
                                            {{-- <span>
                                                fake Brand
                                            </span> --}}

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

                                            </div>

                                            <!-- Badge -->
                                            <span class="sale-badge item-badge text-uppercase bg-green">
                                                New
                                            </span>
                                        </div>

                                        <!-- Image -->
                                        <div class="image" style="height: 410px">
                                            <img class="main" src="{{ asset('pengguna/html/images/shop/img-01.jpg') }}" alt="">
                                        </div>

                                        <!-- Caption -->
                                        <div class="caption">

                                            <!-- Timer -->
                                            <div class="timer-body">
                                                <span class="sale text-red">Sale</span>
                                                <span class="tdtimer-d"></span>d 
                                                <span class="tdtimer-h"></span>h 
                                                <span class="tdtimer-m"></span>m 
                                                <span class="tdtimer-s"></span>s 
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Buy btn & more link -->
                                    <div class="info">

                                        <!-- Buy btn -->
                                        <a href="user_item" class="btn-material btn-price">

                                            <!-- Price -->
                                            <span class="price">

                                                <!-- Price -->
                                                <span class="price">
                                                    Rp175.500
                                                </span>

                                            </span>

                                            <!-- Icon card -->
                                            <span class="icon-card">
                                                <i class="icofont icofont-cart-alt"></i>
                                            </span>
                                        </a>

                                    </div>
                                </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 2 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Panci Shabu Shabu
                                        {{-- <span>
                                            fake Brand
                                        </span> --}}

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
                                        </div>

                                        <!-- Badge -->
                                        <!--span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span-->
                                    </div>

                                    <!-- Image -->
                                    <div class="image" style="height: 410px">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-02.jpg') }}" alt="">
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">

                                            <!-- Price -->
                                            <span class="price">
                                                Rp175.500
                                            </span>

                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 3 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Shower Elegant
                                        {{-- <span>
                                            fake Brand
                                        </span> --}}

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

                                        </div>

                                        <!-- Badge
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span> -->
                                    </div>

                                    <!-- Image -->
                                    <div class="image" style="height: 410px">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-08.jpg') }}" alt="">
                                    </div>

                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">

                                            <!-- Price -->
                                            <span class="price">
                                                Rp175.500
                                            </span>

                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 4 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Gunting Krisbow
                                        {{-- <span>
                                            fake Brand
                                        </span> --}}

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
                                        </div>

                                        <!-- Badge
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span> -->
                                    </div>

                                    <!-- Image -->
                                    <div class="image" style="height: 410px">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-09.jpg') }}" alt="">
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">

                                            <!-- Price -->
                                            <span class="price">
                                                Rp175.500
                                            </span>

                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 5 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Sekop kuli 
                                        {{-- <span>
                                            fake Brand
                                        </span> --}}

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

                                        </div>

                                        <!-- Badge
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span> -->
                                    </div>

                                    <!-- Image -->
                                    <div class="image" style="height: 410px">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-10.jpg') }}" alt="">
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">

                                            <!-- Price -->
                                            <span class="price">
                                                Rp175.500
                                            </span>

                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->

                        <!-- Shop item 6 -->
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4 shop-item hover-sdw timer">

                            <div class="wrap">

                                <!-- Image & Caption -->
                                <div class="body">

                                    <!-- Header -->
                                    <div class="comp-header st-4 text-uppercase">

                                        Super Blender
                                        {{-- <span>
                                            fake Brand
                                        </span> --}}

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
                                        </div>

                                        <!-- Badge
                                        <span class="sale-badge item-badge text-uppercase bg-green">
                                            New
                                        </span> -->
                                    </div>

                                    <!-- Image -->
                                    <div class="image" style="height: 410px">
                                        <img class="main" src="{{ asset('pengguna/html/images/shop/img-11.jpg') }}" alt="">
                                    </div>
                                </div>

                                <!-- Buy btn & more link -->
                                <div class="info">

                                    <!-- Buy btn -->
                                    <a href="user_item" class="btn-material btn-price">

                                        <!-- Price -->
                                        <span class="price">

                                            <!-- Price -->
                                            <span class="price">
                                                Rp175.500
                                            </span>

                                        </span>

                                        <!-- Icon card -->
                                        <span class="icon-card">
                                            <i class="icofont icofont-cart-alt"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shop item -->
                    </div>
                    <!-- ./ Item list -->
                </div>
            </div>
        </div>
    </div><!-- / Parallax wrapper -->
</div>

@endsection