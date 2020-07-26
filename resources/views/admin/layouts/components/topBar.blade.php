<div class="cui-topbar">
  <!-- left aligned items -->
  <div class="cui-topbar-left">
    <div class="cui-topbar-item">
      <h3 class="mt-2 ml-5">SISTEM INFORMASI DANA DESA NIKA DISTRIK FEE'EN SARMI</h3>
      {{-- <div class="dropdown">
        <a href="" class="dropdown-toggle text-nowrap" data-toggle="dropdown" aria-expanded="false">
          <i class="icmn-folder-open mr-2"></i>
          <span class="d-none d-xl-inline-block"><strong>Issues History</strong></span>
        </a>
        <div class="dropdown-menu" role="menu">
          <a class="dropdown-item" href="javascript:void(0)">Current search</a>
          <a class="dropdown-item" href="javascript:void(0)">Search for issues</a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-header">Opened</div>
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-checkmark"></i> CLNUI-253 Project implemen...</a
          >
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-checkmark"></i> CLNUI-234 Active history iss...</a
          >
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-clock"></i> CLNUI-424 Ionicons intergrat...</a
          >
          <a class="dropdown-item" href="javascript:void(0)">More...</a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-header">Filters</div>
          <a class="dropdown-item" href="javascript:void(0)">My open issues</a>
          <a class="dropdown-item" href="javascript:void(0)">Reported by me</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)">Import issues from CSV</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-cog"></i> Settings</a
          >
        </div>
      </div> --}}
    </div>
  </div>
  <!-- right aligned items -->
  <div class="cui-topbar-right">
    <div class="cui-topbar-item">
    </div>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"><i class="dropdown-icon icmn-exit"></i> Logout</a
    >
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <div class="cui-topbar-item">
      <div class="cui-topbar-menu-button cui-menu-right-action-toggle">
        <i class="fa fa-bars"> <!-- --></i>
      </div>
    </div>
  </div>
</div>

<script>
  ;(function($) {
    'use strict'
    $(function() {
      ///////////////////////////////////////////////////////////
      // livesearch scripts

      var livesearch = $('.cui-topbar-livesearch')
      var close = $('.cui-topbar-livesearch-close')
      var visibleClass = 'cui-topbar-livesearch-visible'
      var input = $('#livesearch-input')
      var inputInner = $('#livesearch-input-inner')

      function setHidden() {
        livesearch.removeClass(visibleClass)
      }
      function handleKeyDown(e) {
        const key = event.keyCode.toString()
        if (key === '27') {
          setHidden()
        }
      }
      input.on('focus', function() {
        livesearch.addClass(visibleClass)
        setTimeout(function() {
          inputInner.focus()
        }, 200)
      })
      close.on('click', setHidden)
      document.addEventListener('keydown', handleKeyDown, false)
    })
  })(jQuery)
</script>
