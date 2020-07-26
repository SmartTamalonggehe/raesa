<div class="modal fade tampilModal" id="example1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judul">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" id="formKu" novalidate>
                @csrf
                <input type="hidden" name="id" id="id">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                      <div class="form-group">
                          <div class="controls">
                              <label for="transaction_det_id">Item Belanja</label>
                              <select name="transaction_det_id" id="transaction_det_id" class="select2">
                                @foreach ($transaction_det as $item)
                                <option value="{{ $item->id }}">{{ $item->nm_transaction_det }}</option>                                    
                                @endforeach
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <div class="form-group">
                          <div class="controls">
                              <label for="tgl_kas">Tgl. Pengeluaran</label>
                              <input
                                name="tgl_kas"
                                type="text"
                                class="form-control"
                                placeholder="Pilih Tanggal"
                                id="tgl_kas"
                                data-toggle="datetimepicker"
                                data-target="#tgl_kas"
                              />
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-12">
                      <div class="form-group">
                          <div class="controls">
                              <label for="jmlh_pengeluaran">Jumlah Pengeluaran</label>
                              <input type="text" name="jmlh_pengeluaran" id="jmlh_pengeluaran" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group">
                          <div class="controls">
                              <label for="bukti">Bukti</label>
                              <input type="file" name="bukti" id="bukti" class="dropify" required data-validation-required-message="Tidak Boleh Kosong">
                          </div>
                      </div>
                  </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" id="tombolForm"></button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <script>
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

<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('#tgl_kas').datetimepicker({
        icons: {
          time: 'fa fa-clock-o',
          date: 'fa fa-calendar',
          up: 'fa fa-arrow-up',
          down: 'fa fa-arrow-down',
          previous: 'fa fa-arrow-left',
          next: 'fa fa-arrow-right',
        },
        format: 'LL',
      })
    })
  })(jQuery)
</script>

<script>
   $('#jmlh_pengeluaran').mask('000.000.000.000.000', { reverse: true })
</script>

<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('.dropify').dropify()
    })
  })(jQuery)
</script>