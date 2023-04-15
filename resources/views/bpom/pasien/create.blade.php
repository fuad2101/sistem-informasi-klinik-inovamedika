@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Tambah Pasien</h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Tambah Pasien</a
              >
            </div>

                <form action="" method="post" class="">

                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="nama" class="form-label">No. MR</label>
                        <input type="text" name="" id="nama" class="form-control">
                    </div>
                </div>

                <h4>#Data1</h4>
                <hr>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="nama" class="form-label">Nama Pasien</label>
                        <input type="text" name="" id="nama" class="form-control">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="laki">Laki-laki</option>
                            <option value="laki">Perempuan</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select class="form-control" name="" id="">
                            <option value="">Islam</option>
                            <option value="">Kristen</option>
                            <option value="">Hindu</option>
                            <option value="">Budha</option>
                        </select>
                    </div>

                </div>


                <h4>#Data2</h4>
                <hr>
                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="jalan" class="form-label">Jalan</label>
                        <input class="form-control" type="text" name="jalan" id="jalan">
                    </div>


                    <div class="col-md-1 mb-3">
                        <label for="rt" class="form-label">RT</label>
                        <input class="form-control" type="text" name="rt" id="rt">
                    </div>


                    <div class="col-md-1 mb-3">
                        <label for="rw" class="form-label">RW</label>
                        <input class="form-control" type="text" name="rw" id="rw">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input class="form-control" type="text" name="kecamatan" id="kecamatan">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="Kelurahan" class="form-label">Kelurahan</label>
                        <input class="form-control" type="text" name="Kelurahan" id="Kelurahan">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input class="form-control" type="text" name="kota" id="kota">
                    </div>

                </div>


                <h4>#Data3</h4>

                <div class="row">

                    <div class="col mb-3">
                        <label for="telp" class="form-label">Telepon</label>
                        <input class="form-control" type="text" name="" id="" is-number>
                    </div>

                    <div class="col mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <select class="form-control" name="" id="">
                            <option value="">SD</option>
                            <option value="">SLTP</option>
                            <option value="">SLTA</option>
                            <option value="">Diploma</option>
                            <option value="">S1</option>
                            <option value="">S2</option>
                            <option value="">S3</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tgl_daftar" class="form-label">Tanggal Daftar</label>
                        <input class="form-control" type="date" name="tgl_daftar" id="tgl_daftar">
                    </div>

                </div>

                </div>
                    <button class="btn btn-primary mb-5 ml-3">Tambah Pasien</button>
                </form>


          </div>

@endsection


