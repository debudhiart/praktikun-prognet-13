        <!-- 
        NAVBAR
        =============================================== -->
        <nav class="navbar navbar-default">
            
            <div class="container">
               
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('pengguna/html/images/main-brand.png') }}" alt="" class="brand">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <!-- Top panel / search / phone -->
                    <div class="top-panel">
                       
                        <div class="phone text-blue">
                            <i class="icofont icofont-phone-circle"></i>
                            +62 85 536 553 596
                        </div>
                        
                        <form class="search bg-grey-light btn-material">
                            <input type="text" class="search-form" id="top-search">
                            <label for="top-search">search</label>
                        </form>
                        
                        <div class="btn-cols">
                            
                            <ul class="list-btn-group">
                                <li>
                                    <a href="sigupnuser">
                                        Sing up
                                    </a>
                                </li>
                                <li>
                                    <a href="loginuser">
                                        <b>Sing in</b>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right info-panel">
                        
                        <!-- Nav Item - Notifikasi -->
                        <li>
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="notifikasi">
                                        <div class="mr-3">
                                            <i class="fas fa-bell fa-fw"></i>
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                            <div class="small">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="notifikasi">
                                        <div class="mr-3">
                                            <i class="fas fa-id-badge fa-fw"></i>
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                            <div class="small">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="notifikasi">
                                        <div class="mr-3">
                                            <i class="fas fa-id-badge fa-fw"></i>
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                            <div class="small">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                </li>
                                <li><a href="notifikasi" class="text-center small">Read More Messages</a></li>
                            </ul>
                        </li>

                        <!-- Nav Item - Pesan -->
                        <li>
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="pesan">
                                        <div class="mr-3">
                                            <i class="fas fa-envelope fa-fw"></i>
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                            <div class="small">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="pesan">
                                        <div class="mr-3">
                                            <i class="fas fa-flag fa-fw"></i>
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                            <div class="small">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="pesan">
                                        <div class="mr-3">
                                            <i class="fas fa-address-book fa-fw"></i>
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                            <div class="small">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                </li>
                                <li><a href="pesan" class="text-center small">Read More Messages</a></li>
                            </ul>
                        </li>

                        <!-- Profile -->
                        <li class="profile">
                            <span class="wrap">
                                
                                <!-- Image -->
                                <span class="image bg-white">
                                    
                                    <!-- New message badge -->
                                    <span class="badge bg-blue hidden-xs hidden-sm">5</span>
                                   
                                    <span class="icon">
                                        <i class="icofont icofont-user-alt-4 text-blue"></i>
                                    </span>

                                </span>
                                
                                <!-- Info -->
                                <span class="info">
                                    <!-- Name -->
                                    <span class="name text-uppercase">John Doe</span>
                                    <a href="profile">edit profile</a>
                                </span>
                            </span>
                        </li>
                        
                        <!-- Cart -->
                        <li class="cart">

                            <li class="more-btn sdw ">
                                <a href="cardpage_1" class="btn btn-primary">
                                    Shopping cart 
                                    <i class="icofont icofont-cart-alt"></i>
                                </a>
                            </li>
                            
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/">
                                home
                            </a>
                        </li>
                        <li>
                            <a href="kategori" class="dropdown-toggle" data-toggle="dropdown">
                                categories <i class="icofont icofont-curved-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="kategori">Peralatan Dapur</a></li>
                                <li><a href="kategori">Peralatan Kamar Mandi</a></li>
                                <li><a href="kategori">Peralatan Kebun</a></li>
                                <li><a href="kategori">Peralatan Tukang</a></li>
                                <li><a href="kategori">Electronik dapur</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="about">
                                about us
                            </a>
                        </li>
                    </ul>
                
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- END: NAVBAR -->