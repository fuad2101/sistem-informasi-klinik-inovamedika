@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Tambah Pegawai</h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Tambah Pegawai</a
              >
            </div>

                <form action="" method="post" class="">
                <div class="col-md-4 mb-3">
                    <label for="nama" class="form-label">Nama Pegawai</label>
                    <input type="text" name="" id="nama" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="profesi" class="form-label">Profesi</label>
                    <input type="text" name="" id="profesi" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="date" name="" id="tgl_masuk" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="tgl_keluar" class="form-label">Tanggal Keluar</label>
                    <input type="date" name="" id="tgl_keluar" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input class="form-control" type="text" name="alamat" id="alamat">
                </div>
                    <button class="btn btn-primary mb-5">Tambah Pegawai</button>
                </form>


          </div>

@endsection


