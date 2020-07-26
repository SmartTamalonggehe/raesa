@include('components.head')

<body class="cui-config-borderless cui-menu-colorful cui-menu-left-shadow">
<div class="cui-initial-loading"></div>
<div class="cui-layout cui-layout-has-sider">

<div class="cui-layout">
<div class="cui-layout-header">

</div>
<div class="cui-layout-content">

<div class="cui-utils-content">

<!-- START: pages/login-beta -->
<div
  class="cui-login cui-login-fullscreen"
  style="background-image: url(/cleanui/components/pages/common/img/login/1.jpeg)"
>
  <div class="cui-login-header">
    <div class="row">
      <div class="col-lg-8">
        <div class="cui-login-header-logo">
          <a href="javascript: history.back();">
            <img
              src="asset/logo.png"
              alt="Sarmi"
            />
          </a>
          <br />
          <br />
          <a
            href="javascript: void(0);"
            class="btn btn-sm btn-outline ml-3 random-bg-image mb-3"
            data-img="1"
            >Ganti Background</a
          >
        </div>
      </div>
    </div>
  </div>
  <div class="cui-login-block cui-login-block-extended">
    <div class="row">
      <div class="col-xl-12">
        <div class="cui-login-block-inner">
          <div class="cui-login-block-form">
            <h4 class="text-uppercase">
              <strong>Silahkan log in</strong>
            </h4>
            <br />
            <form id="form-validation" name="form-validation" method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <label class="form-label">Email</label>
                <input
                  id="validation-email"
                  class="form-control"
                  placeholder="Email"
                  name="email"
                  type="text"
                  data-validation="[EMAIL]"
                />
              </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <div class="form-group">
                <label class="form-label">Password</label>
                <input
                  id="validation-password"
                  class="form-control password"
                  name="password"
                  type="password"
                  data-validation="[L>=6]"
                  data-validation-message="$ must be at least 6 characters"
                  placeholder="Password"
                />
              </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" id="remember" checked />
                    Remember me
                  </label>
                </div>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
          <div class="cui-login-block-sidebar">
            <h4 class="cui-login-block-sidebar-title text-center">
              <strong>SISTEM INFORMASI DANA DESA FEE,EN</strong>
              <br />
              <strong>2020</strong>
            </h4>
            <div class="cui-login-block-sidebar-place">
              <i class="fa fa-child mr-3"><!-- --></i>
              Raesa P. K. Saa
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: pages/cui-login-beta -->



</div>
</div>
<div class="cui-layout-footer">


<!-- START: page scripts -->
<script>
    ;(function($) {
      'use strict'
      $(function() {
        // Form Validation
        $('#form-validation').validate({
          submit: {
            settings: {
              inputContainer: '.form-group',
              errorListClass: 'form-control-error',
              errorClass: 'has-danger',
            },
          },
        })

        // Show/Hide Password
        $('.password').password({
          eyeClass: '',
          eyeOpenClass: 'icmn-eye',
          eyeCloseClass: 'icmn-eye-blocked',
        })

        // Switch to fullscreen
        $('.switch-to-fullscreen').on('click', function() {
          $('.cui-login').toggleClass('cui-login-fullscreen')
        })

        // Change BG
        $('.random-bg-image').on('click', function() {
          var min = 1,
            max = 5,
            next = Math.floor($('.random-bg-image').data('img')) + 1,
            final = next > max ? min : next

          $('.random-bg-image').data('img', final)
          $('.cui-login')
            .data('img', final)
            .css('backgroundImage', 'url(/cleanui/components/pages/common/img/login/' + final + '.jpeg)')
        })
      })
    })(jQuery)
  </script>
  <!-- END: page scripts -->



</div>
</div>
</div>
</body>
</html>

