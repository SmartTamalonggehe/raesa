<div class="modal fade tampilModal" id="example1" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <div class="col-sm-12">
                      <div class="form-group">
                          <div class="controls">
                              <label for="nm_item_det">Jenis Belanja</label>
                              <input type="text" name="nm_item_det" id="nm_item_det" class="form-control" required data-validation-required-message="Tidak Boleh Kosong">
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