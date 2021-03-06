@extends ('layouts.app')

@section('content')
<!-- START: forms/extras -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Extras</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Adjustable Textarea</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.jacklmoore.com/autosize/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Adjustable Textarea  -->
          <div class="form-group">
            <textarea
              id="textarea"
              class="form-control"
              placeholder="Type and press enter"
            ></textarea>
          </div>
          <!-- End Adjustable Textarea -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Show / Hide Password</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://github.com/wenzhixin/bootstrap-show-password" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Show / Hide Password -->
          <div class="form-group">
            <input id="password" type="password" class="form-control" value="Password" />
          </div>
          <!-- End Show Hide Password -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: forms/extras -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      autosize($('#textarea'))

      $('#password').password({
        eyeClass: '',
        eyeOpenClass: 'icmn-eye',
        eyeCloseClass: 'icmn-eye-blocked',
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection