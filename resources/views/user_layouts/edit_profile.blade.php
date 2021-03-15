@extends('user_layouts.user_master')
@section('content')
<div class="container">
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
                                Edit Biodata
                                <span>
                                    Profile
                                </span>
                            </h1>
                            
                            <!-- Modal body -->
                            <div class="col-md-10 col-md-offset-1 text-center">
                                {{-- @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif --}}
                                <img src="{{ asset('pengguna/html/images/shop/profile-02.jpg') }}" class="img-circle main text-uppercase" width="relative" height="170px" alt="Avatar">
                                <h1 class="header text-uppercase">
                                    Profile
                                    <span>
                                        Update Data Profile
                                    </span>
                                </h1>
                                <form enctype="multipart/form-data" action="/profile" method="POST">
                                    <!-- Name -->
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Name</label>
                                        <input type="text" class="form-control checkout_input" id="exampleInputEmail1" placeholder="Nama">
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Email</label>
                                        <input type="email" class="form-control checkout_input" id="exampleInputPassword2" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Foto Profile</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    
                                    <a href="/" class="btn btn-primary btn-material"> 
                                        <span class="body">Submit</span>
                                        <i class="icon icofont icofont-check-circled" onclick="return confirm('Anda yakin ingin mengganti foto profile?')"></i>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: CONTENT -->
</div>
@endsection