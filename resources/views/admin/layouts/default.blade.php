@include('admin.layouts.components.head')
<body class="cui-config-borderless cui-menu-colorful cui-menu-left-shadow">
<div class="cui-initial-loading"></div>
<div class="cui-layout cui-layout-has-sider">
@include('admin.layouts.components.menuRight')
@include('admin.layouts.components.menuLeft')
<div class="cui-layout">
<div class="cui-layout-header">
@include('admin.layouts.components.topBar')
</div>
<div class="cui-layout-content">
@include('admin.layouts.components.breadcrumbs')
<div class="cui-utils-content">
@yield('content')
</div>
</div>
<div class="cui-layout-footer">
@include('admin.layouts.components.footer')
</div>
</div>
</div>
</body>
</html>