@include('portal.layouts.header')
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
@include('portal.layouts.nav')

@include('portal.layouts.sidebar')

@yield('portal')
  <!-- /.content-wrapper -->
@include('portal.layouts.footer')
</div>
<!-- ./wrapper -->