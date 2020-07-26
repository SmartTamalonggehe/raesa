@php
    use Illuminate\Support\Carbon;
@endphp
@extends ('kades.layouts.default')

@section('judul', 'Tanggung Jawab')

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
        <h5>Export Berdasarkan</h5>

      <div class="col-md-3">
        <select name="tahun" id="tahun" class="select2">
          <option value="">Pilih Tahun</option>
          @foreach ($tahun as $item)
              <option value="{{ Carbon::parse($item->tgl_kas)->format('Y') }}">{{ Carbon::parse($item->tgl_kas)->format('Y') }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-3">
        <select name="bulan" id="bulan" class="select2">
          <option value="">Pilih Bulan</option>
          <option value="01">Januari</option>
          <option value="02">Februari</option>
          <option value="03">Maret</option>
          <option value="04">April</option>
          <option value="05">Mei</option>
          <option value="06">Juni</option>
          <option value="07">Juli</option>
          <option value="08">Agustus</option>
          <option value="09">September</option>
          <option value="10">Oktober</option>
          <option value="11">November</option>
          <option value="12">Desember</option>
        </select>
      </div>
      <div class="col-md-2">
        <button id="exportWord" class="btn btn-primary">Export Word</button>
      </div>
    </div>
  </div>
</section>

{{-- Load Data --}}
{{-- <script>
 function loadMoreData() {
        $.ajax({
            url: '',
            type: "get",
            datatype: "html",
            success:function(data){
                $('#tampil').html(data);
            }
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
            alert('Server tidak merespon...');
        });
    }
    loadMoreData();
</script> --}}

{{-- Filter Bulan --}}
{{-- <script>
  $(document).ready(function(){
        $('#bulan').on('change', function(){
            let value=$(this).val();
            let tahun=$('#tahun').val();
            $.ajax({
                type : 'get',
                url : '',
                data:{
                  'bulan':value,
                  'tahun':tahun
                  },
                success:function(data){
                  $('#tampil').html(data);
                }
            });
        })
        $('#tahun').on('change', function(){
            let value=$(this).val();
            let bulan=$('#bulan').val()
            $.ajax({
                type : 'get',
                url : '',
                data:{
                  'tahun':value,
                  'bulan':bulan
                  },
                success:function(data){
                  $('#tampil').html(data);
                }
            });
        })

        // Tombol Export Excel
        $('#exportExcel').on('click',function(){
          let tahun=$('#tahun').val();
          let bulan=$('#bulan').val();
          window.location.href='kasExport?tahun='+ tahun +'&bulan='+ bulan
        })
    });
</script> --}}

<script>
    $('#exportWord').on('click',function(){
        let tahun=$('#tahun').val();
        let bulan=$('#bulan').val();
        window.location.href='tanggungExport?tahun='+ tahun +'&bulan='+ bulan
    })
  ;(function($) {
    'use strict'
    $(function() {
      $('.select2').select2()
      $('.select2-tags').select2({
        tags: true,
        tokenSeparators: [',', ' '],
      })

      $('.selectpicker').selectpicker()
    })
  })(jQuery)
</script>

@endsection
