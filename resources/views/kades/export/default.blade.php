@include('kades.layouts.components.head')
<body class="cui-config-borderless cui-menu-colorful cui-menu-left-shadow cui-theme-orange">


<div class="cui-initial-loading"></div>
<div class="cui-layout cui-layout-has-sider">

<div class="cui-layout">
<div class="cui-layout-header">
</div>
<div class="cui-layout-content">
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