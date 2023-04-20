@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Tambah Data Obat</h1>
            </div>

                <form action="{{route('obat.store')}}" method="post" class="">
                    @csrf
                <div class="col-md-4 mb-3">
                    <label for="jns_brg" class="form-label">Jenis Barang</label>
                    <select class="form-control" name="jns_brg" id="">
                        <option value="bpm">Bahan Pakai Medis</option>
                        <option value="obat">Obat-obatan</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="jns_obat" class="form-label">Jenis Barang</label>
                    <select class="form-control" name="jns_obat" id="">
                        <option value="Abbocat">Abbocat</option>
                        <option value="Alkohol">Alkohol</option>
                        <option value="Lain-Lain">Lain-Lain</option>
                        <option value="Sacchari">Sacchari</option>
                        <option value="Spuit">Spuit</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="nama" class="form-label">Nama Obat</label>
                    <input class="form-control" type="text" name="nama" id="nama">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="produsen" class="form-label">Produsen</label>
                    <select class="form-control" name="produsen" id="">
                        <option value="Kimia Farma">Kimia Farma</option>
                        <option value="Terumo">Ifars</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                    <button class="btn btn-primary mb-5">Tambah Obat</button>
                </form>


          </div>

@endsection


