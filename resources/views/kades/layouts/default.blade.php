@include('kades.layouts.components.head')
<body class="cui-config-borderless cui-menu-colorful cui-menu-left-shadow cui-theme-orange">


<div class="cui-initial-loading"></div>
<div class="cui-layout cui-layout-has-sider">
@include('kades.layouts.components.menuRight')
@include('kades.layouts.components.menuLeft')
<div class="cui-layout">
<div class="cui-layout-header">
@include('kades.layouts.components.topBar')
</div>
<div class="cui-layout-content">
@include('kades.layouts.components.breadcrumbs')
<div class="cui-utils-content">
@yield('content')
</div>
</div>
<div class="cui-layout-footer">
@include('kades.layouts.components.footer')
</div>
</div>
</div>
</body>
</html>