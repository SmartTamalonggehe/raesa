@extends ('kades.export.default')

@section('judul', 'Kas Umum')

@section('content')
<!-- START: tables/datatables -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>@yield('judul')</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <p class="text-muted">

        </p>
        <div class="mb-5">
            @php
            use Illuminate\Support\Carbon;
            $saldo=$saldo_awal;
            $pemasukan=0;
            $pengeluaran=0;
          @endphp

          <table class="table table-hover nowrap" id="example1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tgl Kas</th>
                  <th>Keterangan</th>
                  <th>Debet</th>
                  <th>Kredit</th>
                  <th>Saldo</th>
                </tr>
              </thead>
              <tbody>
                @if ($kas->count()!=0)
                <tr>
                  <td colspan="5">Sisa Saldo</td>
                  <td>@currency ($saldo)</td>
                </tr>
                @endif
                @forelse ($kas as $item)

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ Carbon::parse($item->tgl_kas)->format('d-m-Y') }}</td>
                  <td>
                    {{ $item->transaction_det->nm_transaction_det }}
                  </td>
                  <td>
                    @if ($item->jmlh_pemasukan==0)
                        -
                    @else
                      @php
                          $pemasukan+=$item->jmlh_pemasukan
                      @endphp
                      @currency($item->jmlh_pemasukan)
                    @endif
                  </td>
                  <td>
                    @if ($item->jmlh_pengeluaran==0)
                        -
                    @else
                      @php
                          $pengeluaran+=$item->jmlh_pengeluaran
                      @endphp
                      @currency($item->jmlh_pengeluaran)
                    @endif
                  </td>
                  <td>
                    @if ($item->jmlh_pengeluaran==0)
                      @currency($saldo=$item->jmlh_pemasukan+$saldo)
                    @endif
                    @if ($item->jmlh_pemasukan==0)
                      @currency($saldo=$saldo-$item->jmlh_pengeluaran)
                    @endif
                  </td>
                </tr>

                @empty
                    <td colspan="6" class="text-center">Silahkan Memilih Tahun dan Bulan</td>
                @endforelse
                @if ($kas->count()!=0)
                <tr class=" text-bold">
                  <td colspan="3" class="text-center">Total </td>
                  <td>
                    @currency($pemasukan)
                  </td>
                  <td>
                    @currency($pengeluaran)
                  </td>
                  <td>
                    {{-- @currency($saldo) --}}
                  </td>
                </tr>
                @endif
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
