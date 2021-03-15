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
                                Profil
                                <span>
                                    Biodata
                                </span>
                            </h1>
                            <!-- PROFILE HEADER -->
                            <div class="profile-header">
                                <div class="profile-main text-center">
                                    <div class="image">
                                        <img src="{{ asset('pengguna/html/images/shop/profile-02.jpg') }}" class="img-circle main" width="relative" height="170px" alt="Avatar">
                                    </div>
                                    <ul class="steps row">
                                        <h2 class="text-uppercase text-blue">
                                            Samuel Gold
                                        </h2>
                                        <li class="active text-center">
                                            <span>
                                                Available 
                                            </span>
                                            <span>
                                                <i class="icofont icofont-check text-green"></i>
                                            </span>
                                        </li>
                                    </ul>

                                    <!-- Data -->
                                    <div class="form-group">
                                        <table class="table table-striped table-bordered " align="center">
                                            <tbody>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>budhi</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>budhi@gmail</td>
                                                </tr>
                                                <tr>
                                                    <th style="padding-top:20px;">Status</th>
                                                    <td>
                                                        <img style="width:40px; height:40px;margin-bottom:3px;margin-left:-12px;" src="https://cdn.clipart.email/0638765a3f2a64a229becd27379510f8_facebook-verified-logo-logodix_1024-1024.png" alt="">Verified
                                                    </td>
                                                </tr>
                                            </tbody>
                                          </table>
                                    </div>
                                    <!-- / Tombol Edit Foto -->
                                    <div class="form-group">
                                        <button type="button" class="sdw-hover btn btn-material btn-yellow btn-lg ripple-cont">
                                            <i class="mdi mdi-file-restore btn-icon-prepend "></i>     
                                            <a href="edit_profile" style="color: black;">Edit Foto Profile</a>
                                        </button>
                                    </div>
                                    <!-- /END: Tombol Edit Foto -->
                                </div>
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