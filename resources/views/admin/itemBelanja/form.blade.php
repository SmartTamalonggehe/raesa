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
                              <label for="transaction_id">Belanja Detail</label>
                              <select name="transaction_id" id="transaction_id" class="select2">
                                @foreach ($transaction as $item)
                                <option value="{{ $item->id }}">{{ $item->nm_transaksi }}</option>                                    
                                @endforeach
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                      <div class="form-group">
                          <div class="controls">
                              <label for="nm_transaction_det">Item Belanja</label>
                              <input type="text" name="nm_transaction_det" id="nm_transaction_det" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
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