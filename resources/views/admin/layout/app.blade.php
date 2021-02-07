<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->


  <link rel="stylesheet" href ="{{  url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')  }}"></script>
  <!-- iCheck -->



  <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
 
  <link rel="stylesheet" href=" {{ url('assets/plugins/jqvmap/jqvmap.min.css') }}  ">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{ url('assets/dist/css/adminlte.min.css') }} ">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" {{ url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} ">
  <!-- Daterange picker -->
  <link rel="stylesheet" href=" {{ url('assets/plugins/daterangepicker/daterangepicker.css') }} ">
  <!-- summernote -->
  <link rel="stylesheet" href=" {{ url('assets/plugins/summernote/summernote-bs4.css') }} ">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('admin.components.navbar')
@include('admin.components.sidebar')
<div  >
@if ($errors->any())
        <div class="alert alert-danger" style="margin-left:17%" >
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div  style="margin-left:17%" >
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    </div>
</div>

@yield('content')
 








  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">IBbi 74</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" {{url('assets/plugins/jquery/jquery.min.js')}} "></script>
<!-- jQuery UI 1.11.4 -->
<script src=" {{url('assets/plugins/jquery-ui/jquery-ui.min.js')}} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src=" {{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<!-- ChartJS -->
<script src= " {{url('assets/plugins/chart.js/Chart.min.js')}} "></script>
<!-- Sparkline -->
<script src=" {{url('assets/plugins/sparklines/sparkline.js')}} "></script>
<!-- JQVMap -->
<script src=" {{url('assets/plugins/jqvmap/jquery.vmap.min.js')}} "></script>
<script src=" {{url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}} "></script>
<!-- jQuery Knob Chart -->
<script src=" {{url('assets/plugins/jquery-knob/jquery.knob.min.js')}} "></script>
<!-- daterangepicker -->
<script src=" {{url('assets/plugins/moment/moment.min.js')}} "></script>
<script src=" {{url('assets/plugins/daterangepicker/daterangepicker.js')}} "></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=" {{url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}} "></script>
<!-- Summernote -->
<script src=" {{url('assets/plugins/summernote/summernote-bs4.min.js')}} "></script>
<!-- overlayScrollbars -->
<script src=" {{url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}} "></script>
<!-- AdminLTE App -->
<script src=" {{url('assets/dist/js/adminlte.js')}} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=" {{url('assets/dist/js/pages/dashboard.js')}} "></script>
<!-- AdminLTE for demo purposes -->
<script src=" {{url('assets/dist/js/demo.js')}}" ></script>
<script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL80yGhwk3g7bmaf-6S8gfzRlzqTaK9DA">
</script>

@yield('script')
</body>
</html>