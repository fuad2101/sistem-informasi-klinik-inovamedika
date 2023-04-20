@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Tambah Pegawai</h1>
            </div>

                <form action="{{route('pegawai.store')}}" method="post" class="">
                    @csrf
                <div class="col-md-4 mb-3">
                    <label for="nama" class="form-label">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" id="nama" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="profesi" class="form-label">Profesi</label>
                    <select class="form-control" name="profesi" id="profesi">
                        <option value="Dokter Umum">Dokter Umum</option>
                        <option value="Dokter Umum">Dokter Gigi</option>
                        <option value="Dokter Umum">Apoteker</option>
                    </select>

                </div>
                <div class="col-md-4 mb-3">
                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                    <input type="date" name="" id="tanggal_keluar" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat" id="alamat">
                </div>
                    <button class="btn btn-primary mb-5">Tambah Pegawai</button>
                </form>


          </div>

@endsection


