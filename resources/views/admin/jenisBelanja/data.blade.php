<table class="table table-hover nowrap" id="example1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Jenis</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($itemDet as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->nm_item_det }}</td>
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
  </table>

  <script>
    $('.btnUbah').on('click',function(e){
      e.preventDefault()
      save_method="Ubah"
      let href=$(this).data('id');
      $.ajax({
          url: "jenisBelanja/"+href+"/edit", 
          type: 'GET',
          dataType: 'JSON',
          beforeSend: function() {
              // lakukan sesuatu sebelum data dikirim
              },
          success: function(data) {
              // lakukan sesuatu jika data sudah terkirim
              $('#id').val(data.id);
              $('#nm_item_det').val(data.nm_item_det);
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
                  url: "jenisBelanja/"+href,
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