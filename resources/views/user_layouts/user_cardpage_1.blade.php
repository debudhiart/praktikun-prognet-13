@extends('user_layouts.user_master')
@section('content')
<div class="container">
<!-- 
STEPS
=============================================== -->
<div class="row block none-padding-top">
    <div class="col-xs-12">
        
        <ul class="steps row">
            <li class="active active col-xs-12 col-sm-4 col-md-4 col-lg-3">
                <div class="icon number bg-blue">
                    1
                </div>
                <span>
                    Confirm 
                </span>
                Shopping cart
                
                <span class="dir-icon hidden-xs">
                    <i class="icofont icofont-stylish-right text-yellow"></i>
                </span>
            </li>

            <li class="hidden-xs col-sm-4 col-md-4 col-lg-3">
                <div class="icon number bg-grey">
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
                <div class="icon number bg-grey">
                    3
                </div>
                <span>
                    Select
                </span>
                payment method
                
                <span class="dir-icon hidden-sm hidden-md">
                    <i class="icofont icofont-stylish-right"></i>
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
    <div class="col-xs-12">
        
        <div class="product-list">
            <div class="wrap bg-white">
                
                <!-- Header -->
                <div class="list-header text-uppercase">

                    <div class="check hidden-xs hidden-sm">
                        <div class="checkbox vers-2">
                            <input type="checkbox" id="checkAll">
                            <label for="checkAll">
                                <i class="icofont icofont-check-alt"></i>
                            </label>
                        </div>
                    </div>

                    <div class="product">
                        Product
                    </div>

                    <div class="price hidden-xs hidden-sm">
                        Price
                    </div>

                    <div class="qnt hidden-xs hidden-sm">
                        Quantity
                    </div>

                    <div class="total hidden-xs hidden-sm">
                        Total
                    </div>

                    <div class="rmv hidden-xs hidden-sm">
                        Remove
                    </div>
                </div><!-- / Header -->
                
                <!-- List body -->
                <div class="list-body">
                    
                    <!-- Item -->
                    <div class="item">
                        
                        <!-- Checkbox -->
                        <div class="check hidden-xs">
                            <div class="checkbox vers-2">
                                <input type="checkbox" id="item-check-1">
                                <label for="item-check-1">
                                    <i class="icofont icofont-check-alt"></i>
                                </label>
                            </div>
                        </div>
                        
                        <div class="product">
                            <img src="{{ asset('pengguna/html/images/shop/img-01.jpg') }}" alt="">
                            
                            <span class="comp-header st-8 text-uppercase">
                                Panci Steamboat
                                {{-- <span>
                                    Men collections
                                </span>
                                <span>
                                    fake brand
                                </span> --}}
                            </span>
                        </div>

                        <div class="price hidden-xs">
                            <span class="price">
                                <span class="prc">
                                    <span>Rp 257.200</span>
                                </span>
                            </span>
                        </div>

                        <div class="qnt">
                            <span>
                                <span class="minus">
                                    <i class="icofont icofont-minus"></i>
                                </span>
                                <span class="input">
                                    <input type="text" value="02">
                                </span>
                                <span class="plus">
                                    <i class="icofont icofont-plus"></i>
                                </span>
                            </span>
                        </div>

                        <div class="total">
                            {{-- <i class="icofont icofont-cur-dollar"></i> --}}
                            <span>Rp 257.200</span>
                        </div>

                        <div class="rmv text-center">
                            <button class="remove-btn">
                                <i class="icofont icofont-close-line"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="item">
                        
                        <!-- Checkbox -->
                        <div class="check hidden-xs">
                            <div class="checkbox vers-2">
                                <input type="checkbox" id="item-check-2">
                                <label for="item-check-2">
                                    <i class="icofont icofont-check-alt"></i>
                                </label>
                            </div>
                        </div>
                        
                        <div class="product">
                            <img src="{{ asset('pengguna/html/images/shop/img-02.jpg') }}" alt="">
                            
                            <span class="comp-header st-8 text-uppercase">
                                Panci Shabu-Shabu
                                {{-- <span>
                                    Men collections
                                </span>
                                <span>
                                    fake brand
                                </span> --}}
                            </span>
                        </div>

                        <div class="price hidden-xs">
                            <span class="price">
                                <span class="prc">
                                    <span>Rp 257.200</span>
                                </span>
                            </span>
                        </div>

                        <div class="qnt">
                            <span>
                                <span class="minus">
                                    <i class="icofont icofont-minus"></i>
                                </span>
                                <span class="input">
                                    <input type="text" value="01">
                                </span>
                                <span class="plus">
                                    <i class="icofont icofont-plus"></i>
                                </span>
                            </span>
                        </div>

                        <div class="total">
                            {{-- <i class="icofont icofont-cur-dollar"></i> --}}
                            <span>Rp 257.200</span>
                        </div>

                        <div class="rmv text-center">
                            <button class="remove-btn">
                                <i class="icofont icofont-close-line"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="item">
                        
                        <!-- Checkbox -->
                        <div class="check hidden-xs">
                            <div class="checkbox vers-2">
                                <input type="checkbox" id="item-check-3">
                                <label for="item-check-3">
                                    <i class="icofont icofont-check-alt"></i>
                                </label>
                            </div>
                        </div>
                        
                        <div class="product">
                            <img src="{{ asset('pengguna/html/images/shop/img-08.jpg') }}" alt="">
                            
                            <span class="comp-header st-8 text-uppercase">
                                Shower Elegant
                                {{-- <span>
                                    Men collections
                                </span>
                                <span>
                                    fake brand
                                </span> --}}
                            </span>
                        </div>

                        <div class="price hidden-xs">
                            <span class="price">
                                <span class="prc">
                                    <span>Rp 257.200</span>
                                </span>
                            </span>
                        </div>

                        <div class="qnt">
                            <span>
                                <span class="minus">
                                    <i class="icofont icofont-minus"></i>
                                </span>
                                <span class="input">
                                    <input type="text" value="01">
                                </span>
                                <span class="plus">
                                    <i class="icofont icofont-plus"></i>
                                </span>
                            </span>
                        </div>

                        <div class="total">
                            {{-- <i class="icofont icofont-cur-dollar"></i> --}}
                            <span>Rp 257.200</span>
                        </div>

                        <div class="rmv text-center">
                            <button class="remove-btn">
                                <i class="icofont icofont-close-line"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="item">
                        
                        <!-- Checkbox -->
                        <div class="check hidden-xs">
                            <div class="checkbox vers-2">
                                <input type="checkbox" id="item-check-4">
                                <label for="item-check-4">
                                    <i class="icofont icofont-check-alt"></i>
                                </label>
                            </div>
                        </div>
                        
                        <div class="product">
                            <img src="{{ asset('pengguna/html/images/shop/img-09.jpg') }}" alt="">
                            
                            <span class="comp-header st-8 text-uppercase">
                                Gunting Krisbow
                                {{-- <span>
                                    Men collections
                                </span>
                                <span>
                                    fake brand
                                </span> --}}
                            </span>
                        </div>

                        <div class="price hidden-xs">
                            <span class="price">
                                <span class="prc">
                                    <span>Rp 257.200</span>
                                </span>
                            </span>
                        </div>

                        <div class="qnt">
                            <span>
                                <span class="minus">
                                    <i class="icofont icofont-minus"></i>
                                </span>
                                <span class="input">
                                    <input type="text" value="02">
                                </span>
                                <span class="plus">
                                    <i class="icofont icofont-plus"></i>
                                </span>
                            </span>
                        </div>

                        <div class="total">
                            {{-- <i class="icofont icofont-cur-dollar"></i> --}}
                            <span>Rp 257.200</span>
                        </div>

                        <div class="rmv text-center">
                            <button class="remove-btn">
                                <i class="icofont icofont-close-line"></i>
                            </button>
                        </div>
                    </div>
                </div><!-- / List body -->
                
                <!-- Footer -->
                <div class="list-footer bg-blue">
                    <a href="cardpage_2" class="btn btn-default btn-material">
                        <i class="icofont icofont-cart-alt"></i>
                        <span class="body">Make a purchase</span>
                    </a>
                    <a href="cardpage_1" class="btn btn-text-white">
                        <span class="body">remove selected</span>
                    </a>
                </div><!-- / Footer -->
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT -->
</div>
@endsection