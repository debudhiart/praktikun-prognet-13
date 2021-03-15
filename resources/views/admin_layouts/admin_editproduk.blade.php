@extends('admin_layouts.admin_master')
@section('admin_content')
    
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Edit Produk</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Produk</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Harga Satuan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga Satuan">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Stock</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Stock">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Berat Produk</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Berat Produk">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="" selected disabled>Kategori</option>
                            <option>Peralatan Dapur</option>
                            <option>peralatan Kamar Mandi</option>
                            <option>Peralatan Kebun</option>
                            <option>Peralatan Tukang</option>
                            <option>Electronik Dapur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Pilih Foto</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin mengedit data ini?')">Edit Product</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

@endsection