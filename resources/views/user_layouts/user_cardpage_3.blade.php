@extends('user_layouts.user_master')
@section('content')
    
<div class="container">
    <!-- 
    STEPS
    =============================================== -->
    <div class="row block none-padding-top">
        <div class="col-xs-12">
            
            <ul class="steps row">
                <li class="hidden-xs col-xs-12 col-sm-4 col-md-4 col-lg-3">
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

                <li class="active col-sm-4 col-md-4 col-lg-3">
                    <div class="icon number bg-blue">
                        3
                    </div>
                    <span>
                        Confirmation
                    </span>
                    proof of payment
                    
                    <span class="dir-icon hidden-sm hidden-md">
                        <i class="icofont icofont-stylish-right text-yellow"></i>
                    </span>
                </li>

                <li class="hidden-xs col-lg-3 hidden-sm hidden-md">
                    <div class="icon number bg-grey">
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
                            <h1 class="header text-uppercase">
                                Upload Bukti Pembayaran 
                                <span>
                                    Foto/Screenshot bukti transfer
                                </span>
                            </h1>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="file" class="form-control" placeholder="Enter your promocode">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <a href="cardpage_4" class="btn btn-primary btn-material"> 
                                <span class="body">Submit</span>
                                <i class="icon icofont icofont-check-circled"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT -->

</div>

@endsection