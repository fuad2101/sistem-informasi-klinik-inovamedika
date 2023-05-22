@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Tindakan Pasien</h1>
              <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-download fa-sm text-white-50"></i> Tambah Tindakan</a
              >
            </div>
                <form action="{{route('tindakan.store')}}" method="post" class="">
                    @csrf
                <div class="col-md-4 mb-3">
                    <label for="no_rm" class="form-label">NIK - Nama Pasien</label>
                    <select class="form-control" name="no_rm" id="">
                        @forelse ($data as $item)
                            <option value="{{$item->nik}}">{{$item->nik}}  </option>
                        @empty
                            <option value="">No Data</option>
                        @endforelse
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="tanggal_tindakan" class="form-label">Tanggal Tindakan</label>
                    <input class="form-control" type="date" name="tanggal_tindakan" id="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                    <input class="form-control" type="date" name="tgl_masuk" id="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="tindakan" class="form-label">Tindakan Pada Pasien</label>
                    <textarea class="form-control" name="tindakan" id="tindakan" cols="30" rows="10"></textarea>
                </div>



                    <button class="btn btn-primary mb-5">Tambah Tindakan</button>
                </form>


          </div>

@endsection


