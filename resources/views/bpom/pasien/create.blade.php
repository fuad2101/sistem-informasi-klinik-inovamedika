@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Tambah Pasien</h1>
            </div>

                <form action="{{route('pasien.store')}}" method="post" class="">
                    @csrf

                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="nama" class="form-label">No. MR</label>
                        <input type="text" name="no_mr" id="nama" class="form-control" >
                    </div>
                </div>

                <h4>#Data1</h4>
                <hr>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="nama_pasien" class="form-label">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" >
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" >
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="jns_klm" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jns_klm" id="jns_klm">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select class="form-control" name="agama" id="">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>

                </div>


                <h4>#Data2</h4>
                <hr>
                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="jalan" class="form-label">Jalan</label>
                        <input class="form-control" type="text" name="jalan" id="jalan" >
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
                        <input class="form-control" type="text" name="kecamatan" id="kecamatan" >
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="kelurahan" class="form-label">kelurahan</label>
                        <input class="form-control" type="text" name="kelurahan" id="Kelurahan" >
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input class="form-control" type="text" name="kota" id="kota" >
                    </div>

                </div>


                <h4>#Data3</h4>

                <div class="row">

                    <div class="col mb-3">
                        <label for="tel" class="form-label">Telepon</label>
                        <input class="form-control" type="text" name="tel" id="tel" is-number>
                    </div>

                    <div class="col mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <select class="form-control" name="pendidikan" id="">
                            <option value="SD">SD</option>
                            <option value="SLTP">SLTP</option>
                            <option value="SLTA">SLTA</option>
                            <option value="Diploma">Diploma</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tanggal_daftar" class="form-label">Tanggal Daftar</label>
                        <input class="form-control" type="date" name="tanggal_daftar" id="tgl_daftar">
                    </div>

                </div>

                </div>
                    <button class="btn btn-primary mb-5 ml-3">Tambah Pasien</button>
                </form>


          </div>

@endsection


