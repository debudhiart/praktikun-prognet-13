@extends('admin_layouts.admin_master')
@section('admin_content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

        <!-- Begin Page Content -->
        <div class="container-fluid">
  
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Transaksi</h6>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">
                                All
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="verified-tab" data-toggle="tab" href="#verified" role="tab" aria-controls="verified" aria-selected="false">
                                Verified
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="delivered-tab" data-toggle="tab" href="#delivered" role="tab" aria-controls="delivered" aria-selected="false">
                                Delivered
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="success-tab" data-toggle="tab" href="#success" role="tab" aria-controls="success" aria-selected="true">
                                Success
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="wfc-tab" data-toggle="tab" href="#wfc" role="tab" aria-controls="wfc" aria-selected="false">
                                Waiting for Confirmation
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="unverified-tab" data-toggle="tab" href="#unverified" role="tab" aria-controls="unverified" aria-selected="false">
                                Unverified
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="canceled-tab" data-toggle="tab" href="#canceled" role="tab" aria-controls="canceled" aria-selected="false">
                                Canceled
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Jatuh Tempo Pembayaran</th>
                                        <th class="text-center">ID Transaksi</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Provinsi</th>
                                        <th class="text-center">Total Pembayaran</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>All</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>All</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>All</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>All</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="verified" role="tabpanel" aria-labelledby="verified-tab">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Jatuh Tempo Pembayaran</th>
                                        <th class="text-center">ID Transaksi</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Provinsi</th>
                                        <th class="text-center">Total Pembayaran</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Verified</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Verified</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Verified</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Verified</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="delivered" role="tabpanel" aria-labelledby="delivered-tab">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Jatuh Tempo Pembayaran</th>
                                        <th class="text-center">ID Transaksi</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Provinsi</th>
                                        <th class="text-center">Total Pembayaran</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Delivered</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Delivered</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Delivered</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Delivered</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="success" role="tabpanel" aria-labelledby="success-tab">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Jatuh Tempo Pembayaran</th>
                                        <th class="text-center">ID Transaksi</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Provinsi</th>
                                        <th class="text-center">Total Pembayaran</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Success</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Success</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Success</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Success</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="wfc" role="tabpanel" aria-labelledby="wfc-tab">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Jatuh Tempo Pembayaran</th>
                                        <th class="text-center">ID Transaksi</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Provinsi</th>
                                        <th class="text-center">Total Pembayaran</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Waiting for Confirmation</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Waiting for Confirmation</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Waiting for Confirmation</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Waiting for Confirmation</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="unverified" role="tabpanel" aria-labelledby="unverified-tab">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Jatuh Tempo Pembayaran</th>
                                        <th class="text-center">ID Transaksi</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Provinsi</th>
                                        <th class="text-center">Total Pembayaran</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Unverified</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Unverified</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Unverified</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Unverified</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Jatuh Tempo Pembayaran</th>
                                        <th class="text-center">ID Transaksi</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Kota</th>
                                        <th class="text-center">Provinsi</th>
                                        <th class="text-center">Total Pembayaran</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Canceled</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Canceled</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Canceled</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2021</td>
                                        <td>1</td>
                                        <td>Jalan Watureenggong no 104</td>
                                        <td>Denpasar</td>
                                        <td>Bali</td>
                                        <td>RP143000</td>
                                        <td>Canceled</td>
                                        <td>Lihat Detail</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  
        </div>
        <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

@endsection