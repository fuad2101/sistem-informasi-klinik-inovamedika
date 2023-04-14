@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Buat Surat Tugas</h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Tambah Pegawai</a
              >
            </div>

                <form action="" method="get" class="">
                <div class="col-md-4 mb-3">
                    <label for="no_surat" class="form-label">Nomor Surat</label>
                    <input type="text" name="" id="no_surat" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="mak" class="form-label">MAK</label>
                    <input type="text" name="" id="mak" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="tanggal" class="form-label">Tanggal ST</label>
                    <input type="date" name="" id="tanggal" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="nama" class="form-label">Nama Petugas</label>
                    <input type="text" name="" id="nama" class="form-control">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="kegiatan" class="form-label">Kegiatan</label>
                    <select class="form-control" name="" id="">
                        <option value="">KIE Tomas</option>
                        <option value="">Intensifikasi KIE</option>
                        <option value="">Layanan Mobling</option>
                    </select>

                </div>
                <div class="col-md-4 mb-3">
                    <label for="kegiatan" class="form-label">Kendaraan</label>
                    <select class="form-control" name="" id="">
                        <option value="">Umum</option>
                        <option value="">Dinas</option>
                    </select>

                </div>
                <div class="col-md-4 mb-3">
                    <label for="tujuan" class="form-label">Tujuan</label>
                    <select class="form-control" name="tujuan" id="">
                        <option value="">Pasangkayu</option>
                        <option value="">Majene</option>
                        <option value="">Polewali Mandar</option>
                        <option value="">Mamuju</option>
                    </select>

                </div>
                <div class="col-auto mb-3 form-inline ">

                    <div class="">
                        <label for="tanggal" class="form-label">Berangkat</label>
                        <input class="form-control ml-2" type="date" name="" id="tanggal" class="form-control">
                    </div>
                    <div class="">
                        <label for="tanggal" class="form-label">Tiba</label>
                        <input class="form-control ml-2" type="date" name="" id="tanggal" class="form-control">
                    </div>

                </div>

                <div class="col-md-4 my-4 text-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="opsi_cetak" id="sppd"><label class="form-check-label" for="sppd">Cetak SPPD</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="opsi_cetak" id="sptjm"disabled><label class="form-check-label" for="sptjm" >SPTJM</label>
                    </div>
                </div>
                    <button class="btn btn-primary mb-5">Cetak Surat</button>
                </form>


          </div>

@endsection


