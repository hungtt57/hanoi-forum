<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <title> Quản
        trị</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Quản trị mua đồ tốt" name="description"/>
    <meta content="" name="author"/>

    {{--<link rel="icon" type="image/png" sizes="16x16" href="/mua-do-tot_favicon.png">--}}
    <link rel="shortcut icon" href="/images/favicon.ico"/>
    <link rel="bookmark" href="/images/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
    {{--<link href="/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>--}}

    <link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/pages/css/blog.min.css" rel="stylesheet" type="text/css"/>


    <link href="/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"
          type="text/css"/>

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css"/>

    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css"/>

    <style>
        .ht-on-loading {
            display: block;
            position: relative;
        }

        .ht-on-loading:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, .6);
            background-image: url('/spinner.gif');
            background-position: 50% 50%;
            -webkit-background-size: 36px 36px;
            background-size: 36px 36px;
            background-repeat: no-repeat;
        }

        .ht-page-header {
            background-color: white !important;
        }
    </style>


    @yield('styles')
    @yield('style')


    <style>
        .dataTables_filter {
            display: none;
        }
    </style>


    <!-- END THEME LAYOUT STYLES -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        .select2-container {
            width: 100% !important;
        }

        #divLoading {
            display: none;
        }

        #divLoading.show {
            display: block;
            position: fixed;
            z-index: 100;
            background-image: url('http://loadinggif.com/images/image-selection/3.gif');
            background-color: #666;
            opacity: 0.4;
            background-repeat: no-repeat;
            background-position: center;
            left: 0;
            bottom: 0;
            right: 0;
            top: 0;
        }

        #loadinggif.show {
            left: 50%;
            top: 50%;
            position: absolute;
            z-index: 101;
            width: 32px;
            height: 32px;
            margin-left: -16px;
            margin-top: -16px;
        }


    </style>

</head>
<!-- END HEAD -->
<style>
    .page-header.navbar {
        background: white !important;
        border-bottom: 1px solid #ddd;
        color: black;
    }

    .page-header.navbar .menu-toggler > span, .page-header.navbar .menu-toggler > span:after, .page-header.navbar .menu-toggler > span:before, .page-header.navbar .menu-toggler > span:hover, .page-header.navbar .menu-toggler > span:hover:after, .page-header.navbar .menu-toggler > span:hover:before {
        background: #333 !important;
    }
</style>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{ url('/') }}">
                    <img src="/logo-web.png" alt="logo" class="logo-default"
                         style="width: 134px;margin-top: -6px;"/> </a>

                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <div class="page-login-user">

            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <style>
                        span.username {
                            color: #333 !important;
                        }

                        .dropdown-user a.dropdown-toggle:hover,
                        .dropdown-user a.dropdown-toggle:active {
                            background: #eee !important;
                            /*color:#fff;*/
                        }

                        .page-header.navbar .top-menu .navbar-nav > li.dropdown .dropdown-toggle:hover, .page-header.navbar .top-menu .navbar-nav > li.dropdown.open .dropdown-toggle {
                            background: #eee !important;
                        }
                    </style>

                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle" src="{{ auth('backend')->user()->image }}"
                                 style="height: 29px; width: 29px"/>
                            <span class="username username-hide-on-mobile"> {{ auth('backend')->user()->name }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">

                            <li>
                                <a href="{{ url('admin/thay-mat-khau') }}">
                                    <i class="fa fa-key"></i> Thay đổi mật khẩu
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}">
                                    <i class="icon-key"></i> Đăng xuất </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a href="{{ url('logout') }}" class="dropdown-toggle">
                            <i class="icon-logout"></i>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
        <!-- END HEADER INNER -->
    </div>

    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
    @include('admin.nav')
    <!-- Modal -->
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content" style="">
                @yield('content')
            </div>


        </div>
    </div>

    <div class="page-footer">
        <div class="page-footer-inner"> 2017 &copy; Admin

        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>

<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>

  var baseUrl = '{{url('/admin')}}';
  $.ajaxSetup({
    headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')}
  });


</script>
@stack('pre_scripts')


<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>

<script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"
        type="text/javascript"></script>
<script src="/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>


<script src="/assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>


<script src="/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
<script src="/assets/pages/scripts/ui-sweetalert.min.js" type="text/javascript"></script>

<script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>

<script src="/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>

<script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

<script src="/js/admin/ckeditor/ckeditor.js"></script>


<script src="/assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
<!-- App scripts -->
@stack('firebase_scripts')
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

  jQuery.fn.dataTableExt.oSort["string-nbr-asc"] = function (x, y) {
    x = strip_and_string(x);
    y = strip_and_string(y);
    return ((parseInt(x.split('.').join("")) < parseInt(y.split('.').join(""))) ? -1 : ((parseInt(x.split('.').join("")) > parseInt(y.split('.').join(""))) ? 1 : 0));
  };

  jQuery.fn.dataTableExt.oSort["string-nbr-desc"] = function (x, y) {
    x = strip_and_string(x);
    y = strip_and_string(y);
    return ((parseInt(x.split('.').join("")) < parseInt(y.split('.').join(""))) ? 1 : ((parseInt(x.split('.').join("")) > parseInt(y.split('.').join(""))) ? -1 : 0));
  };

  $(document).ready(function () {

    $('#time_range').change(function () {

      var data = $(this).val();

      $.ajax({

        url: '{{ url('time-range') }}',
        type: 'get',
        data: {time_range: data},
        dataType: 'json',
        success: function (response) {
          $('#start_time').val(response.start_time);
          $('#end_time').val(response.end_time);
        }

      });
    });
    $(document).on('change', '#time_range', function () {
      var data = $(this).val();

      $.ajax({

        url: '{{ url('time-range') }}',
        type: 'get',
        data: {time_range: data},
        dataType: 'json',
        success: function (response) {
          $('#start_time').val(response.start_time);
          $('#end_time').val(response.end_time);
        }

      });
    });
    $('.select2').select2();


//        $('.nav-link').click( function (e) {
//            var url = $(this).attr('href');
//
//            alert(url);
//        })
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


<script>
  function slug(title, separator) {
    if (typeof separator == 'undefined') separator = '-';


    // Convert all dashes/underscores into separator
    var flip = separator == '-' ? '_' : '-';
    title = title.replace(flip, separator);

    // Remove all characters that are not the separator, letters, numbers, or whitespace.
    title = title.toLowerCase()
      .replace(new RegExp('[^a-z0-9' + separator + '\\s]', 'g'), '');

    //Đổi ký tự có dấu thành không dấu
    title = title.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    title = title.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    title = title.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    title = title.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    title = title.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    title = title.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    title = title.replace(/đ/gi, 'd');

    // Replace all separator characters and whitespace by a single separator
    title = title.replace(new RegExp('[' + separator + '\\s]+', 'g'), separator);

    return title.replace(new RegExp('^[' + separator + '\\s]+|[' + separator + '\\s]+$', 'g'), '');
  }

  function removeSpace(text) {
    return text.replace(/\s/g, '');
  }


  $(document).on('click', '.info_term', function () {
    var title = $('h3.inline').first().text();
    $('#term-title').text(title);
  });

  $(document).ready(function () {
      @if (Request::is('admin/fanpage') || Request::is('admin/messengers') )
      $('.menu-toggler').click();
      @endif
  });


</script>
@stack('scripts')

</body>

</html>