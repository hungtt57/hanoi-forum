<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hanoi Forum 2018</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/backend/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/backend/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/backend/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/backend/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/backend/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/backend/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/backend/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @yield('styles')
    @yield('style')

    <link href="/backend/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>


    <link href="/backend/datatables/datatables.min.css" rel="stylesheet" type="text/css"/>
    <link href="/backend/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet"
          type="text/css"/>
    <style>
        .dataTables_filter {
            display: none;
        }

        #departments-table {
            width: 100% !important;
        }
    </style>


    <!-- END THEME LAYOUT STYLES -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/')}}" class="logo">

        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">{{auth('backend')->user()->first_name.' '.auth('backend')->user()->last_name}}</span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-footer">
                                {{--<div class="pull-left">--}}
                                {{--<a href="#" class="btn btn-default btn-flat">Profile</a>--}}
                                {{--</div>--}}
                                <div class="pull-right">
                                    <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @include('admin.layouts.nav')

    <div class="content-wrapper">

        <section class="content">
            @yield('content')
        </section>

    </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/backend/sweetalert.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/backend/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script>

  var baseUrl = '{{url('/admin')}}';
  $.ajaxSetup({
    headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')}
  });


</script>

<script src="/backend/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/backend/datatables/datatable.js" type="text/javascript"></script>
<script src="/backend/datatables/plugins/bootstrap/datatables.bootstrap.js"
        type="text/javascript"></script>

<!-- Sparkline -->
<script src="/backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/backend/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/backend/bower_components/moment/min/moment.min.js"></script>
<script src="/backend/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/backend/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/backend/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/backend/dist/js/demo.js"></script>
<script src="/assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script>
  function strip_and_string(content) {
    var regex = /(<([^>]+)>)/ig
    var body = content + '';
    var result = body.replace(regex, "");

    var result2 = result + '';

    return result2.split('.').join("");
  }

  function numberWithDots(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  }

  $(document).ready(function () {


    $('.select2').select2();
  });

  $(document).on('click', '.delete-btn', function (e) {
    e.preventDefault();

    var url = $(this).attr('href');

    bootbox.confirm({
      message: "Bạn có chắc chắn muốn xóa",
      buttons: {
        confirm: {
          label: 'Có',
          className: 'btn-success'
        },
        cancel: {
          label: 'Không',
          className: 'btn-danger'
        }
      },


      callback: function (result) {
        if (result == true) {
          window.location.href = url;
        }
      }
    });
  });

  $(document).on('click', '.restore-btn', function (e) {
    e.preventDefault();

    var url = $(this).attr('href');

    bootbox.confirm({
      message: "Bạn có chắc chắn muốn phục hồi",
      buttons: {
        confirm: {
          label: 'Có',
          className: 'btn-success'
        },
        cancel: {
          label: 'Không',
          className: 'btn-danger'
        }
      },


      callback: function (result) {
        if (result == true) {
          window.location.href = url;
        }
      }
    });
  });


</script>
@stack('scripts')
</body>
</html>
