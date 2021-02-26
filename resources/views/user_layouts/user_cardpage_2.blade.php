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
                    products list
                    
                    <span class="dir-icon hidden-xs">
                        <i class="icofont icofont-stylish-right text-yellow"></i>
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
                </li>
            </ul>
        </div>
    </div>
    <!-- END: STEPS -->

    <!-- 
    CONTENT
    =============================================== -->
    <div class="row block none-padding-top">
        
        <div class="col-xs-12 col-md-8 col-lg-9 get-height">
            <div class="sdw-block">
                <div class="wrap bg-white">
                    
                    <!-- Authirize form -->
                    <div class="row auth-form">
                        
                        <!-- Header & nav -->
                        <div class="col-md-12">
                            
                            <!-- Header -->
                            <h1 class="header text-uppercase">
                                Billing Address 
                                <span>
                                    Enter your address info
                                </span>
                            </h1>
                            
                        </div>
                        
                        <div class="col-md-9 col-md-offset-1">
                            <form>
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Name</label>
                                    <input type="text" class="form-control checkout_input" id="exampleInputEmail2" placeholder="Nama">
                                </div>
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Email</label>
                                    <input type="email" class="form-control checkout_input" id="exampleInputPassword2" placeholder="Email">
                                </div>
                                <!-- Phone no -->
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Phone no</label>
                                    <input type="text" class="form-control checkout_input" id="exampleInputPassword2" placeholder="Password">
                                </div>
                                <!-- Province -->
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Province</label>
                                    <input type="password" class="form-control checkout_input" id="exampleInputPassword2" placeholder="Password">
                                </div>
                                <!-- Province -->
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Province</label>
                                    <select name="province" id="provinsi" class="form-control dropdown_item_select checkout_input cekongkir" require="required">
                                        <option>Provinsi*</option>
                                            <option value="1">Bali</option>
                                            <option value="2">Bangka Belitung</option>
                                            <option value="3">Banten</option>
                                            <option value="4">Bengkulu</option>
                                            <option value="5">DI Yogyakarta</option>
                                            <option value="6">DKI Jakarta</option>
                                            <option value="7">Gorontalo</option>
                                            <option value="8">Jambi</option>
                                            <option value="9">Jawa Barat</option>
                                            <option value="10">Jawa Tengah</option>
                                            <option value="11">Jawa Timur</option>
                                            <option value="12">Kalimantan Barat</option>
                                            <option value="13">Kalimantan Selatan</option>
                                            <option value="14">Kalimantan Tengah</option>
                                            <option value="15">Kalimantan Timur</option>
                                            <option value="16">Kalimantan Utara</option>
                                            <option value="17">Kepulauan Riau</option>
                                            <option value="18">Lampung</option>
                                            <option value="19">Maluku</option>
                                            <option value="20">Maluku Utara</option>
                                            <option value="21">Nanggroe Aceh Darussalam (NAD)</option>
                                            <option value="22">Nusa Tenggara Barat (NTB)</option>
                                            <option value="23">Nusa Tenggara Timur (NTT)</option>
                                            <option value="24">Papua</option>
                                            <option value="25">Papua Barat</option>
                                            <option value="26">Riau</option>
                                            <option value="27">Sulawesi Barat</option>
                                            <option value="28">Sulawesi Selatan</option>
                                            <option value="29">Sulawesi Tengah</option>
                                            <option value="30">Sulawesi Tenggara</option>
                                            <option value="31">Sulawesi Utara</option>
                                            <option value="32">Sumatera Barat</option>
                                            <option value="33">Sumatera Selatan</option>
                                            <option value="34">Sumatera Utara</option>
                                        </select>
                                </div>
                                <!-- Address -->
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Address</label>
                                    <select name="regency" id="kota" class="form-control dropdown_item_select checkout_input cekongkir" require="required">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <!-- Courier -->
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Courier</label>
                                    <select name="courier" id="kurir" class="form-control dropdown_item_select checkout_input cekongkir">
                                        <option>Kurir*</option>
                                        <option value="1">JNE</option>
                                        <option value="2">POS</option>
                                        <option value="3">TIKI</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 col-lg-3 fix-height asside hidden-xs hidden-sm">
            <div class="product-list float-block">
                <div class="wrap bg-white">
                        <!-- Asside nav -->
                    <div class="asside-nav bg-grey-lightness hidden-xs">
                        <div class="header text-uppercase text-white bg-blue section_title">Your order</div>
                        
                        <ul class="list-2">
                            <li>
                                <span class="head">Subtotal</span>
                                <span class="sub">Rp.12000000</span>
                            </li>
                            <li>
                                <span class="head">Shipping:</span>
                                <span class="sub">
                                    Rp.12000000
                                </span>
                            </li>
                            <li>
                                <span class="head">Total price:</span>
                                <span class="sub">
                                    Rp.12000000
                                </span>
                            </li>
                        </ul>
                        
                        <div class="asside-btn text-center">
                            <a href="#" class="btn btn-primary btn-material"> 
                                <span class="body">View order</span>
                                <i class="icon icofont icofont-check-circled"></i>
                            </a>
                        </div>
                    </div><!-- / Asside nav -->
                </div>
            </div>
        </div>
    </div>

    <div class="row block none-padding-top">
        
        <div class="get-height">
            <div class="sdw-block">
                <div class=" bg-white">
                    <div class="container ganti">
                        <section class="section my-5 pb-5">
                          <!-- Shopping Cart table -->
                            <div style="color:#333333;" class="table-responsive col-md-12 col-lg-12">
                                <h1 align="center">Rincian Produk</h1>
                
                                <table class="table product-table">
                                    <!-- Table head -->
                                    <thead>
                        
                                        <tr>
                            
                                            <th></th>
                            
                                            <th class="font-weight-bold">
                                            <strong>Product</strong>
                                            </th>
                            
                                            <th class="font-weight-bold">
                                            <strong>Price</strong>
                                            </th>
                            
                                            <th class="font-weight-bold">
                                            <strong>QTY</strong>
                                            </th>  
                            
                                        </tr>
                        
                                    </thead>
                                    <!-- Table head -->
                        
                                    <!-- Table body -->
                                    <tbody>
                        
                                        <!-- First row -->
                                        <tr>
                                            <th scope="row">
                                                <input type="hidden" class="id_cart0" value="60">
                                                <input type="hidden" id="user_id" value="8">
                                                <input type="hidden" class="stock0" value="76">
                                                <img style="width:50px; height:50px;" src="{{ asset('pengguna/html/images/shop/img-03.jpg') }}" alt="" class="img-fluid z-depth-0">
                                            </th>
                            
                                            <td>
                                                <h5 class="mt-3">
                                                    <strong>Samsung Galaxy S10</strong>
                                                </h5>
                                            </td>

                                            <td>Rp<span class="float-lef grey-text price0">12000000</li></td>
                                            <td class="text-center text-md-left">
                                                <p class="text-danger" style="display:none" id="notif0"></p>
                                                <span class="qty0">1 </span>
                                            </td>    
                                        </tr>
                                        
                                    </tbody>
                                    <!-- Table body -->
                                </table>
                    
                            </div>
                          <!-- Shopping Cart table -->
                  
                        </section>
                        <input id="signup-token" name="_token" type="hidden" value="srPVAqI4zzowBlSsZ4TjXE1UDkhAjmeUrb4ZyFtw">
                        <input type="hidden" value="100" id="weight">
                      </div>
                </div>
                </div>
            </div>
        </div>


    <!-- END: CONTENT -->

    {{-- <div class="checkout">
        <div class="container">
            <form action="/beli" method="post" id="checkout_form" class="checkout_form">
                <input type="hidden" name="_token" value="srPVAqI4zzowBlSsZ4TjXE1UDkhAjmeUrb4ZyFtw">
                <div class="row">
                    <!-- Billing Info -->
                    <div class="col-lg-6">
                        <div class="billing checkout_section">
                            <div class="section_title">Billing Address</div>
                            <div class="section_subtitle">Enter your address info</div>
                            <div class="checkout_form_container">
                                <div>
                                    <!-- Name -->
                                    <label for="checkout_name">Name*</label>
                                    <input type="text" value="budhi" id="nama" class="checkout_input" disabled>
                                </div>
                                <div>
                                    <!-- Email -->
                                    <label for="checkout_email">Email Address*</label>
                                    <input type="email" value="budhi@gmail" id="email" class="checkout_input" disabled>
                                </div>
                                <div>
                                    <!-- Phone no -->
                                    <label for="checkout_phone">Phone no*</label>
                                    <input name="no_telp" type="text" id="nomor-telp" class="checkout_input" required="required">
                                </div>
                                <div>
                                    <!-- Province -->
                                    <label for="checkout_province">Province*</label>
                                    <select name="province" id="provinsi" class="dropdown_item_select checkout_input cekongkir" require="required">
                                        <option>Provinsi*</option>
                                            <option value="1">Bali</option>
                                            <option value="2">Bangka Belitung</option>
                                            <option value="3">Banten</option>
                                            <option value="4">Bengkulu</option>
                                            <option value="5">DI Yogyakarta</option>
                                            <option value="6">DKI Jakarta</option>
                                            <option value="7">Gorontalo</option>
                                            <option value="8">Jambi</option>
                                            <option value="9">Jawa Barat</option>
                                            <option value="10">Jawa Tengah</option>
                                            <option value="11">Jawa Timur</option>
                                            <option value="12">Kalimantan Barat</option>
                                            <option value="13">Kalimantan Selatan</option>
                                            <option value="14">Kalimantan Tengah</option>
                                            <option value="15">Kalimantan Timur</option>
                                            <option value="16">Kalimantan Utara</option>
                                            <option value="17">Kepulauan Riau</option>
                                            <option value="18">Lampung</option>
                                            <option value="19">Maluku</option>
                                            <option value="20">Maluku Utara</option>
                                            <option value="21">Nanggroe Aceh Darussalam (NAD)</option>
                                            <option value="22">Nusa Tenggara Barat (NTB)</option>
                                            <option value="23">Nusa Tenggara Timur (NTT)</option>
                                            <option value="24">Papua</option>
                                            <option value="25">Papua Barat</option>
                                            <option value="26">Riau</option>
                                            <option value="27">Sulawesi Barat</option>
                                            <option value="28">Sulawesi Selatan</option>
                                            <option value="29">Sulawesi Tengah</option>
                                            <option value="30">Sulawesi Tenggara</option>
                                            <option value="31">Sulawesi Utara</option>
                                            <option value="32">Sumatera Barat</option>
                                            <option value="33">Sumatera Selatan</option>
                                            <option value="34">Sumatera Utara</option>
                                        </select>
                                </div>
                                <div>
                                    <!-- City / Town -->
                                    <label for="checkout_city">City/Town*</label>
                                    <select name="regency" id="kota" class="dropdown_item_select checkout_input cekongkir" require="required">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div>
                                    <!-- Address -->
                                    <label for="checkout_address">Address*</label>
                                    <input type="text" id="alamat" name="address" class="checkout_input" required="required">
                                </div>
                                <!-- Courier -->
                                <div>
                                    <label for="checkout_province">Courier*</label>
                                    <select name="courier" id="kurir" class="dropdown_item_select checkout_input cekongkir">
                                        <option>Kurir*</option>
                                        <option value="1">JNE</option>
                                        <option value="2">POS</option>
                                        <option value="3">TIKI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Order Info -->

                    <div class="col-lg-6">
                        <div class="order checkout_section">
                            <div class="section_title">Your order</div>
                            <div class="section_subtitle">Order details</div>

                            <!-- Order details -->
                            <div class="order_list_container">
                                <ul class="order_list">
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title">Subtotal</div>
                                        <div class="order_list_value ml-auto">Rp.12000000</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Shipping</div>
                                    <div class="order_list_value ml-auto" id="biaya-ongkir"></div>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title">Total</div>
                                        <div class="order_list_value ml-auto">Rp.<span id="total-biaya"></span></div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <input type="hidden" name="sub_total" value="12000000">
                                        <input type="hidden" name="total" id="totalbiaya">
                                        <input type="hidden" name="shipping_cost" id="ongkir">
                                        <input type="hidden" name="user_id" value="8">
                                        <input type="hidden" name="product_id" value="0">
                                        <input type="hidden" name="qty" value="0">
                                        
                                        <button type="submit" class="btn btn-primary btn-rounded" id="beli">Proceed</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <section class="section my-5 pb-5">

            <!-- Shopping Cart table -->
            <div style="color:#333333;" class="table-responsive">
                <h1 align="center">Rincian Produk</h1>

                <table class="table product-table">

                    <!-- Table head -->
                    <thead>

                        <tr>

                            <th></th>

                            <th class="font-weight-bold">

                                <strong>Product</strong>

                            </th>

                            <th></th>

                            <th class="font-weight-bold">

                                <strong>Price</strong>

                            </th>

                            <th class="font-weight-bold">

                                <strong>QTY</strong>

                            </th>  
                            <th></th>

                        </tr>

                    </thead>
                    <!-- Table head -->

                    <!-- Table body -->
                    <tbody>

                        <!-- First row -->
                        <tr>
                            <th scope="row">
                                <input type="hidden" class="id_cart0" value="60">
                                <input type="hidden" id="user_id" value="8">
                                <input type="hidden" class="stock0" value="76">
                                <img style="width:50px; height:50px;" src="http://127.0.0.1:8000/uploads/product_images/1588687060_Samsung-Galaxy-S10-Duos-128GB-Black-8801643682149-27022019-01-p.jpg" alt="" class="img-fluid z-depth-0">
                            </th>

                            <td>
                                <h5 class="mt-3">
                                <strong>Samsung Galaxy S10</strong>
                                </h5>
                            </td>
                            <td></td>
                            <td>Rp<span class="float-lef grey-text price0">12000000</li></td>
                            <td class="text-center text-md-left">
                                <p class="text-danger" style="display:none" id="notif0"></p>

                                <span class="qty0">1 </span>
                            </td>    
                        </tr>
                        
                    </tbody>
                    <!-- Table body -->

                </table>

            </div>
        <!-- Shopping Cart table -->

        </section>
        <input id="signup-token" name="_token" type="hidden" value="srPVAqI4zzowBlSsZ4TjXE1UDkhAjmeUrb4ZyFtw">
        <input type="hidden" value="100" id="weight">
    </div> --}}
</div>
@endsection