@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Cek Data Pasien</h1>
            </div>

            <div class="row">
                    <div class="col-md-4 mb-3">
                        {{-- <label for="nik" class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" > --}}
                        <form action="/pasien/cari" method="get">
                            @csrf
                            <div class="input-group mb-3">

                                <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" >

                                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>

                <form action="{{route('pasien.store')}}" method="post" class="">
                    @csrf
                <hr>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="no_mr" class="form-label">No. RM</label>
                        <input type="text" name="no_mr" id="no_mr" class="form-control" value="{{$result[0]['no_mr'] ?? ''}} ">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control"  value="{{$result[0]['nik'] ?? ''}} ">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="nama_pasien" class="form-label">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control"  value="{{$result[0]['nama_pasien'] ?? ''}} ">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="{{$result[0]['tgl_lahir'] ?? ''}} ">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="{{$result[0]['tgl_lahir'] ?? ''}}">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="jns_klm" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jns_klm" id="jns_klm">
                            <option value="L" @if ( isset($result)) {{  $result[0]['jns_klm'] == "L" ?? 'selected' }}
                                @endif
                            >Laki-laki</option>
                            <option value="P" @if ( isset($result))
                                {{  $result[0]['jns_klm'] == "P" ?? 'selected' }}
                            @endif>Perempuan</option>
                        </select>
                    </div>

                    <div class="col mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select class="form-control" name="agama" id="">
                            <option value="Islam" @if (isset($result))
                                {{ $result[0]['agama'] == "Islam" ? 'selected' : '' }}
                            @endif >Islam</option>
                            <option value="Kristen" @if (isset($result))
                                {{ $result[0]['agama'] == "Kristen" ? 'selected' : '' }}
                            @endif >Kristen</option>
                            <option value="Hindu" @if (isset($result))
                                {{ $result[0]['agama'] == "Hindu" ? 'selected' : '' }}
                            @endif>Hindu</option>
                            <option value="Budha" @if (isset($result))
                                {{ $result[0]['agama'] == "Budha" ? 'selected' : '' }}
                            @endif>Budha</option>
                        </select>
                    </div>

                </div>


                <hr>
                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="jalan" class="form-label">Jalan</label>
                        <input class="form-control" type="text" name="jalan" id="jalan"  value=" {{$result[0]['alamat'] ?? ''}}">
                    </div>


                    <div class="col-md-1 mb-3">
                        <label for="rt" class="form-label">RT</label>
                        <input class="form-control" type="text" name="rt" id="rt" value="{{$result[0]['rt'] ?? ''}}">
                    </div>


                    <div class="col-md-1 mb-3">
                        <label for="rw" class="form-label">RW</label>
                        <input class="form-control" type="text" name="rw" id="rw" value="{{$result[0]['rw'] ?? ''}}">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="{{$result[0]['kecamatan'] ?? ''}}">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="kelurahan" class="form-label">kelurahan</label>
                        <input class="form-control" type="text" name="kelurahan" id="Kelurahan" value="{{$result[0]['kelurahan'] ?? ''}}">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input class="form-control" type="text" name="kota" id="kota" value="{{$result[0]['kota'] ?? ''}}">
                    </div>

                </div>


                <div class="row">

                    <div class="col mb-3">
                        <label for="tel" class="form-label">Telepon</label>
                        <input class="form-control" type="text" name="tel" id="tel" is-number value="{{$result[0]['tel'] ?? ''}}">
                    </div>

                    <div class="col mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <select class="form-control" name="pendidikan" id="">
                            <option value="SD" @if (isset($result))
                                {{$result[0]['pendidikan'] == "SD" ? 'selected' : '' }}
                            @endif >SD</option>
                            <option value="SLTP" @if (isset($result))
                                {{ $result[0]['pendidikan'] == "SLTP" ? 'selected' : '' }}
                            @endif>SLTP</option>
                            <option value="SLTA" @if (isset($result))
                                {{ $result[0]['pendidikan'] == "SLTA" ? 'selected' : '' }}
                            @endif>SLTA</option>
                            <option value="Diploma" @if (isset($result))
                                {{ $result[0]['pendidikan'] == "Diploma" ? 'selected' : '' }}
                            @endif>Diploma</option>
                            <option value="S1" @if (isset($result))
                                {{ $result[0]['pendidikan'] == "S1" ? 'selected' : '' }}
                            @endif>S1</option>
                            <option value="S2" @if (isset($result))
                                {{ $result[0]['pendidikan'] == "S2" ? 'selected' : '' }}
                            @endif>S2</option>
                            <option value="S3" @if (isset($result))
                                {{ $result[0]['pendidikan'] == "S3" ? 'selected' : '' }}
                            @endif >S3</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="tanggal_daftar" class="form-label">Tanggal Daftar</label>
                        <input class="form-control" type="date" name="tanggal_daftar" id="tgl_daftar" value="{{$result[0]['tanggal_daftar'] ?? ''}}">
                    </div>

                </div>

                </div>
                    <button class="btn btn-primary mb-5 ml-3">Tambah Ke Pasien Aktif</button>
                </form>


          </div>

@endsection


