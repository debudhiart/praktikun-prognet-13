@extends('user_layouts.user_master')
@section('content')
<div class="container">
    <!-- 
    STEPS
    =============================================== -->
    <div class="row block none-padding-top">
        <div class="col-xs-12">
            
            <ul class="steps row">
                <li class="active col-xs-12 col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-blue">
                        1
                    </div>
                    <span>
                        Confirm 
                    </span>
                    Shopping cart
                    
                    <span class="dir-icon hidden-xs">
                        <i class="icofont icofont-stylish-right"></i>
                    </span>
                </li>

                <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-blue">
                        2
                    </div>
                    <span>
                        Checkout
                    </span>
                    your address

                    <span class="dir-icon">
                        <i class="icofont icofont-stylish-right"></i>
                    </span>
                </li>

                <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-blue">
                        3
                    </div>
                    <span>
                        Confirmation
                    </span>
                    proof of payment
                    
                    <span class="dir-icon hidden-sm hidden-md">
                        <i class="icofont icofont-stylish-right"></i>
                    </span>
                </li>

                <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                    <div class="icon number bg-blue">
                        4
                    </div>
                    <span>
                        Confirm
                    </span>
                    your order
                </li>
            </ul>
        </div>
    </div>
    <!-- END: STEPS -->

    <!-- 
    CONTENT
    =============================================== -->
    <div class="row block none-padding-top">
        <div class="col-xs-12 col-md-12 col-lg-12 get-height">
            <div class="sdw-block">
                <div class="wrap bg-white">
                    <!-- Authirize form -->
                    <div class="row auth-form">
                        <!-- Header & nav -->
                        <div class="col-md-12">
    
                            <!-- Header -->
                            <h1 class="header text-uppercase text-center">
                                Upload Bukti Pembayaran 
                                <span>
                                    Foto/Screenshot bukti transfer
                                </span>
                            </h1>
                            <!-- 
                            Progres barang
                            =============================================== -->
                            <div class="row text-center">
                                <div class="col-xs-12">
                                    
                                    <ul class="steps row">
                                        <li class="active col-xs-12 col-sm-4 col-md-4 col-lg-3">
                                            <span class="text-blue">
                                                Menunggu 
                                                <br>
                                                Konfirmasi
                                            </span>
                                            

                                            <span class="dir-icon hidden-xs">
                                                <i class="icofont icofont-stylish-right text-yellow"></i>
                                            </span>
                                        </li>

                                        <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                                            <span>
                                                Pesanan
                                                <br>
                                                Diproses
                                            </span>

                                            <span class="dir-icon">
                                                <i class="icofont icofont-stylish-right"></i>
                                            </span>
                                        </li>

                                        <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                                            <span>
                                                Sedang
                                                <br>
                                                Dikirim
                                            </span>
                                            
                                            <span class="dir-icon hidden-sm hidden-md">
                                                <i class="icofont icofont-stylish-right"></i>
                                            </span>
                                        </li>

                                        <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                                            <span>
                                                Sampai
                                                <br>
                                                Tujuan
                                            </span>
                                        </li>
                                    </ul>
                                    <!-- / Kembali ke halaman utama -->
                                    <div class="form-group block">
                                        <button type="button" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">
                                            {{-- <i class="mdi mdi-file-restore btn-icon-prepend "></i>      --}}
                                            <a href="/" style="color: black;">Kembali ke halaman utama</a>
                                        </button>
                                    </div>
                                    <!-- /END: Kembali ke halaman utama -->
                                </div>
                            </div>
                            <!-- END: Progres barang -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT -->

</div>
@endsection