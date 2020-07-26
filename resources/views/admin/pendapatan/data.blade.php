@php
  use Illuminate\Support\Carbon;
@endphp
<table class="table table-hover nowrap" id="example1">
  <thead>
    <tr>
      <th>No</th>
      <th>Belanja Detail</th>
      <th>Item Belanja</th>
      <th>Tgl. Pendapatan</th>
      <th>Jumlah Pendapatan</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pendapatan as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->transaction_det->transaction->nm_transaksi }}</td>
        <td>{{ $item->transaction_det->nm_transaction_det }}</td>
        <td>{{ Carbon::parse($item->tgl_kas)->format('d-m-Y') }}</td>
        <td>@currency($item->jmlh_pemasukan)</td>
        <td>
          <button data-id="{{ $item->id }}" type="button" class="btnUbah btn btn-icon btn-outline-warning mr-2 mb-2" title="Ubah Data">
            <i class="icmn-pencil" aria-hidden="true"></i>
          </button>

          <button data-id="{{ $item->id }}" type="button" class="btnHapus btn btn-icon btn-outline-danger mr-2 mb-2" title="Hapus Data">
            <i class="icmn-bin" aria-hidden="true"></i>
          </button>
          
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

  <script>
    $('.btnUbah').on('click',function(e){
      e.preventDefault()
      save_method="Ubah"
      let href=$(this).data('id');
      $.ajax({
          url: "pendapatan/"+href+"/edit", 
          type: 'GET',
          dataType: 'JSON',
          beforeSend: function() {
              // lakukan sesuatu sebelum data dikirim
              },
          success: function(data) {
              // lakukan sesuatu jika data sudah terkirim
              $('#id').val(data.id);
              $('#transaction_det_id').val(data.transaction_det_id).trigger('change');
              $('#tgl_kas').val(data.tgl_kas);
              $('#jmlh_pemasukan').val(data.jmlh_pemasukan);
              $('.tampilModal').modal('show')
              $('#judul').html('Silahkan Merubah Data. Jabatan Tidak Bisa Diubah.')
              $('#tombolForm').html('Ubah Data')
          }
      });
      
  });
  $('.btnHapus').on('click',function(){
      var csrf_token=$('meta[name="csrf_token"]').attr('content');
      let href=$(this).data('id');
      swal(
          {
            title: 'Yakin menghapus data ini?',
            text: 'Data akan terhapus secara permanen!',
            type: 'warning',
            showCancelButton: true,
            cancelButtonClass: 'btn-default',
            cancelButtonText: 'Batal',   
            confirmButtonClass: 'btn-danger',
            confirmButtonText: 'Yakin',
            closeOnConfirm: false,
          },
          function() {
            $.ajax({
                  url: "pendapatan/"+href,
                  type : "POST",
                  data : {'_method' : 'DELETE', '_token' :csrf_token},
                  success: function(response) {
                    swal({
                        title: 'Deleted!',
                        text: 'File has been deleted',
                        type: 'success',
                        confirmButtonClass: 'btn-success',
                      })
                      loadMoreData();
                  }
              })
            
          }
        )
  });
  </script>

<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('[data-toggle=popover]').popover()
      $('[data-toggle=popover-hover]').popover({
        trigger: 'hover',
      })

      $('[data-toggle=tooltip]').tooltip()
    })
  })(jQuery)
</script>

<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('#example1').DataTable({
        responsive: true,
      })
    })
  })(jQuery)
</script>