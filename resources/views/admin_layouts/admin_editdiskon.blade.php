@extends('admin_layouts.admin_master')
@section('admin_content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Edit Diskon</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Precentage</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Start Discount</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Harga Satuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">End Discount</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Stock">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengedit data ini?')">Edit Discount</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

@endsection