@include('admin.layouts.header')
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
@include('admin.layouts.nav')

@include('admin.layouts.sidebar')

@yield('admin')
  <!-- /.content-wrapper -->
@include('admin.layouts.footer')
</div>
<!-- ./wrapper -->
