<nav class="cui-menu-left">
  <div class="cui-menu-left-trigger cui-menu-left-trigger-action"></div>
  <div class="cui-menu-left-handler">
    <div class="cui-menu-left-handler-icon"></div>
  </div>
  <div class="cui-menu-left-inner">
    <div class="cui-menu-left-logo">
      <a href="/">
        <img
          class="cui-menu-left-logo-default"
          src="{{ asset('asset/logo.png') }}"
          alt=""
        />
        <img
          class="cui-menu-left-logo-toggled"
          src="{{ asset('asset/logo.png') }}"
          alt=""
        />
      </a>
    </div>
    <div class="cui-menu-left-scroll">
      <ul class="cui-menu-left-list cui-menu-left-list-root">

        <li class="cui-menu-left-item">
          <a href="/kades">
            <span class="cui-menu-left-icon icmn-home"></span>
            <span class="cui-menu-left-title">Dashboard</span>
          </a>
        </li>
        <li class="cui-menu-left-divider">
          <!-- -->
        </li>

        <li class="cui-menu-left-item cui-menu-left-submenu">
          <a href="javascript: void(0);">
            <span class="cui-menu-left-icon icmn-download"></span>
            <span class="cui-menu-left-title">Laporan</span>
          </a>
          <ul class="cui-menu-left-list">
            <li class="cui-menu-left-item">
              <a href="/kades/kas">
                <span class="cui-menu-left-title">Keuangan</span>
              </a>
            </li>
            <li class="cui-menu-left-item">
              <a href="/kades/viewTanggung">
                <span class="cui-menu-left-title">Pertanggung Jawaban</span>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
