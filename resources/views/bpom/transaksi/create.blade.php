@extends('layouts.bpom')

@section('content')
    <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Tambah Transaksi</h1>
              {{-- <a
                href="#"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                ><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Transaksi</a
              > --}}
            </div>

                <form action="{{route('transaksi.store')}}" method="post" class="">
                    @csrf
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="nama" class="form-label">Kode TRX</label>
                        <input type="text" name="kode_trx" id="nama" class="form-control">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="no_rm" class="form-label">No.RM</label>
                        <select class="form-control" name="no_rm" id="no_rm">
                            @forelse ($data as $pasien)
                                <option value="{{$pasien->no_mr}}"> {{$pasien->no_mr}} </option>
                            @empty
                                <option value=""> No Data </option>
                            @endforelse
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="nama_pasien" class="form-label">Nama Pasien</label>
                        <input type="text" name="nama_pasien" id="nama_pasien" class="form-control">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-control" name="type" id="">
                            <option value="cash">Cash</option>
                            <option value="cash">Transfer</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="total" class="form-label">Total</label>
                        <input id="totalInput" type="text" name="total" id="total" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <button class="btn btn-primary mb-5">Tambah Transaksi</button>
                </div>
                </form>


          </div>

@endsection


@section('footer-addons')

<script src="/vendor/simple-mask-money-master/lib/simple-mask-money.js"></script>

<script>
    let input = SimpleMaskMoney.setMask('#totalInput');
    let input = SimpleMaskMoney.setMask('#totalInput',{
    prefix: 'Rp.',
    suffix: '',
    fixed: true,
    fractionDigits: 2,
    decimalSeparator: ',',
    thousandsSeparator: '.',
    emptyOrInvalid: () => {
      return this.SimpleMaskMoney.args.fixed
        ? `0${this.SimpleMaskMoney.args.decimalSeparator}00`
        : `_${this.SimpleMaskMoney.args.decimalSeparator}__`;
    }
});
</script>

@endsection


