@extends('user_layouts.user_master')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-9">
                    <!--
                    MAIN INFO
                    =============================================== -->
                    <div class="row shop-item-page">
                        
                        <!-- ITEM GALLERY BLOCK -->
                        <div class="col-sm-4 col-md-5 fix-height">
                            <div class="item-gallery float-block">
                               
                                <div class="owl-carousel image image-nav">
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-01.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-02.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-03.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-04.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-05.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-06.jpg ') }}" alt="">
                                    </div>
                                </div>

                                {{-- <div class="owl-carousel image-nav hidden-xs">
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-01.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-02.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-03.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-04.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-05.jpg ') }}" alt="">
                                    </div>
                                   
                                    <div class="item">
                                        <img src="{{ asset('pengguna/html/images/shop/item-page/img-06.jpg ') }}" alt="">
                                    </div>
                                </div> --}}
                                
                            </div>
                        </div><!-- / ITEM GALLERY BLOCK -->
                        
                        <!-- CAPTION BLOCK -->
                        <div class="col-sm-8 col-md-7 get-height">
                            
                            <!-- Item header -->
                            <div class="row item-header">
                                
                                <div class="col-md-7">
                                   
                                    <h1 class="comp-header st-12 text-uppercase text-blue">
                                        T-Shirt 
                                        <span class="text-dark">
                                            Men collections
                                        </span>
                                        <span class="text-dark">
                                            Fake brand
                                        </span>
                                    </h1>
                                </div>
                                
                                <!-- Sale info -->
                                <div class="col-md-5 hidden-xs sale-info timer"
                                     data-timer-date="2018, 2, 5, 0, 0, 0">
                                    
                                    <span class="sale-info text-red"><span>Sale</span> -20%</span>

                                    <!-- Timer -->
                                    <div class="timer-body">
                                        <span class="tdtimer-d"></span>d 
                                        <span class="tdtimer-h"></span>h 
                                        <span class="tdtimer-m"></span>m 
                                        <span class="tdtimer-s"></span>s 
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Divider -->
                            <div class="divider-dotted"></div>
                            
                            <!-- Price & rating panel -->
                            <div class="row price-pan">
                                
                                <!-- Price & rating -->
                                <div class="col-md-12">
                                    
                                    <span class="head">Price</span>
                                    
                                    <span class="price">

                                        <!-- Price -->
                                        <span class="price">
                                            Rp.225.000
                                        </span>
                                    </span>
                                </div>
                                
                                <!-- Badge & Favorite -->
                                <div class="col-md-12">
                                    
                                    <!-- Rate -->
                                    <div class="rate">

                                        <div class="rate-info">
                                            <span class="head">Rating</span>
                                        </div>

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
                                    
                                    <button class="favorite btn-material">
                                        <i class="icofont icofont-star"></i>
                                        Add to favorite
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Divider -->
                            <div class="divider-dotted"></div>
                            
                            <!-- Buy btn panel -->
                            <div class="row">
                                <div class="col-xs-12">
                                    
                                    <div class="buy-btn-panel bg-blue">
                                        
                                        <!-- Cart icon -->
                                        <div class="cart-icon">
                                            <i class="icofont icofont-basket"></i>
                                        </div>
                                        
                                        <!-- Btns -->
                                        <div class="btns-wrap btn-material bg-white">
                                            <a href="cardpage_1">Buy now</a>
                                            <a class="text-blue" href="cardpage_1">Put in cart</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!-- Description -->
                            <div class="row description">
                                <div class="col-xs-12">
                                    <h2 class="header">
                                        Description:
                                    </h2>
                                    
                                    <p>
                                        Provident, similique quos ipsum quis porro hic, est libero sunt qui fuga, a, debitis! Molestias, explicabo ratione numquam consectetur dolor ad atque quia maiores nam dignissimos quaerat sed laborum expedita provident consequatur ut maxime placeat nesciunt incidunt itaque deserunt recusandae voluptate beatae distinctio?
                                    </p>
                                </div>
                            </div>
                        </div><!-- / CAPTION BLOCK -->
                        
                    </div>
                    <!-- END: MAIN INFO -->
                    
                    <!--
                    COMMENTS
                    =============================================== -->
                    <div class="row shop-item-info">
                        <div class="col-xs-12">
                            
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation">
                                    <a href="#comments"
                                       data-toggle="tab">Comments
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="comments" id="comments">
                                    
                                    <!-- Header -->
                                    <h3 class="header">Comments</h3>

                                    <!-- Comments -->
                                    <ul class="media-list">

                                        <!-- 1 comments -->
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="{{ asset('pengguna/html/images/profile/profile-img.jpg') }}" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="#">John Doe</a>
                                                </h4>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem a alias aut, aspernatur veritatis eius eligendi! Nam laboriosam, cumque consequuntur corrupti, nisi iusto explicabo iure quia nostrum odio aperiam dolores?

                                                <span class="media-info">12 dec 2016 
                                                    <a href="#">
                                                        <i class="icofont icofont-reply"></i>
                                                    </a>
                                                </span>

                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="{{ asset('pengguna/html/images/profile/profile-img.jpg ') }}" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">
                                                            <a href="#">Anna Doe</a>
                                                        </h4>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem a alias aut, aspernatur veritatis eius eligendi! Nam laboriosam, cumque consequuntur corrupti, nisi iusto explicabo iure quia nostrum odio aperiam dolores?

                                                        <span class="media-info">12 dec 2016 
                                                            <a href="#">
                                                                <i class="icofont icofont-reply"></i>
                                                            </a>
                                                        </span>

                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <!-- 2 comments -->
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="{{ asset('pengguna/html/images/profile/profile-img.jpg ') }}" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="#">Mark Smith</a>
                                                </h4>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem a alias aut, aspernatur veritatis eius eligendi! Nam laboriosam, cumque consequuntur corrupti, nisi iusto explicabo iure quia nostrum odio aperiam dolores?

                                                <span class="media-info">12 dec 2016 
                                                    <a href="#">
                                                        <i class="icofont icofont-reply"></i>
                                                    </a>
                                                </span>

                                            </div>
                                        </li>

                                        <!-- 3 comments -->
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="{{ asset('pengguna/html/images/profile/profile-img.jpg ') }}" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="#">John Doe</a>
                                                </h4>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem a alias aut, aspernatur veritatis eius eligendi! Nam laboriosam, cumque consequuntur corrupti, nisi iusto explicabo iure quia nostrum odio aperiam dolores?

                                                <span class="media-info">12 dec 2016 
                                                    <a href="#">
                                                        <i class="icofont icofont-reply"></i>
                                                    </a>
                                                </span>

                                            </div>
                                        </li>
                                    </ul>

                                    <!-- Paginations -->
                                    <div class="row pagination-wrap">
                                        <div class="col-sm-11 col-sm-offset-1">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <i class="icofont icofont-curved-left"></i>
                                                    </a>
                                                </li>
                                                <li><a href="#">01</a></li>
                                                <li class="active"><a href="#">02</a></li>
                                                <li><a href="#">03</a></li>
                                                <li><a href="#">04</a></li>
                                                <li><a href="#">05</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <i class="icofont icofont-curved-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Form -->
                                    <div class="add-comment">

                                        <!-- Header -->
                                        <h3 class="header">Add new comments</h3>

                                        <form class="form-horizontal">

                                            <div class="form-group">
                                                <label for="inputText" class="col-sm-3 control-label">Enter your message</label>
                                                <div class="col-sm-7">
                                                    <textarea class="form-control" id="inputText" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-7">
                                                    <button type="submit" class="btn btn-primary btn-material">
                                                        <span class="body">Send message</span>
                                                        <i class="icon icofont icofont-check-circled"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: COMMENTS -->
                </div>

                <!-- Asside -->
                <div class="visible-lg col-md-4 col-lg-3 asside">

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
                    </div>
                    <!-- / Asside nav -->
                </div><!-- ./ Asside -->
            </div>
        </div>
    </div>
</div>
@endsection