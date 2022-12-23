<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rural Communication | @yield('title')</title>
    <link href="{{ asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css')}}" rel="stylesheet">
     <link href="{{ asset('assets/admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
    @include('admin.include.sidebar')
    <div id="page-wrapper" class="gray-bg">
      <div class="row border-bottom">
        @include('admin.include.navbar')
      </div>
      @yield('content')
    </div>
  </div>

  @stack('script')
  <!-- Mainly scripts -->
  <script src="{{ asset('assets/admin/js/jquery-3.1.1.min.js') }}"></script>
  <script src="{{asset('assets/admin/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
  <script src="{{asset('assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- Flot -->
  <script src="{{asset('assets/admin/js/plugins/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
  <script src="{{ asset('assets/admin/js/plugins/flot/jquery.flot.spline.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/flot/jquery.flot.symbol.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/flot/jquery.flot.time.js')}}"></script>
  <!-- Peity -->
  <script src="{{asset('assets/admin/js/plugins/peity/jquery.peity.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/demo/peity-demo.js')}}"></script>
  <!-- Custom and plugin javascript -->
  <script src="{{asset('assets/admin/js/inspinia.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/pace/pace.min.js')}}"></script>
  <!-- jQuery UI -->
  <script src="{{asset('assets/admin/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Jvectormap -->
  <script src="{{asset('assets/admin/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- EayPIE -->
  <script src="{{asset('assets/admin/js/plugins/easypiechart/jquery.easypiechart.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('assets/admin/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- Sparkline demo data  -->
  <script src="{{asset('assets/admin/js/demo/sparkline-demo.js')}}"></script>
  <script src="{{asset('assets/admin/js/custom.js')}}"></script>

</body>
</html>
