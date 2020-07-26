@extends ('admin.layouts.default')

@section('judul', 'Pendapatan')

@section('content')
<!-- START: tables/datatables -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>@yield('judul')</strong>
    </span>
    <button type="button" id="tambah" class="btn btn-primary float-right btn-rounded">Tambah Data</button>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <p class="text-muted">
          Daftar Data @yield('judul')
        </p>
        <div class="mb-5">
          <div id="tampil"></div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Form Modal --}}
@include('admin.pendapatan.form')

{{-- Tambah dan Ubah Data --}}
<script>  
    $('#tambah').click(function(){
        save_method="add"
        $('#judul').html('From Tambah Data')
        $('#tombolForm').html('Simpan Data')
        $('#formKu').trigger("reset");
        $('.tampilModal').modal('show')
    });

    $(document).ready(function () {
        $("#formKu").on('submit',function(e){
          e.preventDefault();
          let id = $('#id').val();
          let dataKu = $('#formKu').serialize();
          if (save_method=="add") { 
              url="{{ route('pendapatan.store') }}"
              method="POST"
          } else {
              url="pendapatan/"+id
              method="PUT"
          }
          $.ajax({
          url: url,
          type: method,
          data: dataKu, 
          success: function(response) {           
                if (save_method=="add") {
                    $.notify(
                      {
                        title: '<strong>Berhasil</strong>',
                        message: 'Data Berhasil Ditambahkan',
                      },
                      {
                        type: 'primary',
                      },
                    )
                } else {
                  $.notify(
                      {
                        title: '<strong>Berhasil</strong>',
                        message: 'Data Berhasil Diubah',
                      },
                      {
                        type: 'primary',
                      },
                    )
                     
                    aksi=$('.tampilModal').modal('hide')
                }
            
              $('#tgl_kas').val('');
              $('#jmlh_pendapatan').val('');
              loadMoreData();
            //   pesan
          }
          })
          .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('Error.');
            });
          console.log(save_method)
        });
    });

</script>

{{-- Load Data --}}
<script>
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
</script>

@endsection