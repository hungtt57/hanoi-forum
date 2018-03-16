<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1_material_design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2016 04:40:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Quản trị" name="description"/>
    <meta content="" name="author"/>

    <link rel="icon" type="image/png" sizes="16x16" href="/mua-do-tot_favicon.png">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet"
          type="text/css"/>
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/apps/css/inbox.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css"/>


    <style>
        .sweet-alert {
            z-index: 9999999999 !important;
        }
    </style>
@yield('styles')




<!-- END THEME LAYOUT STYLES -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        .select2-container {
            width: auto !important;
        }
    </style>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1255378714553193',
                xfbml: true,
                version: 'v2.8'
            });
            FB.AppEvents.logPageView();
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-92012133-1', 'auto');
        ga('send', 'pageview');

    </script>


</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
{{--<script type="text/javascript">--}}
{{--var csrfToken = $('[name="csrf_token"]').attr('content');--}}

{{--setInterval(refreshToken, 1000 * 60 * 15); // 1 hour--}}

{{--function refreshToken(){--}}
{{--$.get('refresh-csrf').done(function(data){--}}
{{--csrfToken = data; // the new token--}}
{{--});--}}
{{--}--}}

{{--setInterval(refreshToken, 1000 * 60 * 15); // 1 hour--}}

{{--</script>--}}
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{ url('/') }}">
                </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
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
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle" src="" style="height: 29px; width: 29px"/>

                            <span class="username username-hide-on-mobile"> {{ auth('backend')->user()->name }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">

                            <li>
                                <a href="{{ url('admin/logout') }}">
                                    <i class="icon-key"></i> Đăng xuất </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a href="{{ url('logout') }}" class="dropdown-toggle">
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">

    @include('admin.nav')
    <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->

                <!-- BEGIN PAGE TITLE-->
            {{--<h1 class="page-title"> Mua đồ tốt quản trị--}}

            {{--</h1>--}}
            <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->

                @yield('content')
                <div class="row">


                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">

                </div>
                <div class="row">
                </div>


                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->


        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> {{ \Carbon\Carbon::now()->year }} &copy; Admin viethouse24.com

        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>

<!--[if lt IE 9]>
<!--<script src="/assets/global/plugins/respond.min.js"></script>-->
<!--<script src="/assets/global/plugins/excanvas.min.js"></script>-->
<!--<script src="/assets/global/plugins/ie8.fix.min.js"></script>-->
{{--<![endif]-->--}}
<!-- BEGIN CORE PLUGINS -->

<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>
    var baseUrl = '{{url('/admin')}}';
    $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')}
    });

</script>


<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<link href="https://vjs.zencdn.net/5.16.0/video-js.css" rel="stylesheet">

<script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
        type="text/javascript"></script>

<script src="/assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>



<script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>

<script src="/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>

<script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
<script src="/assets/pages/scripts/ui-sweetalert.min.js" type="text/javascript"></script>


<script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<!-- App scripts -->
@stack('scripts')
<script>
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });

</script>
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
        //$('.ckedtior').ckeditor();


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
            message: "Bạn có chắc chắn muốn khôi phục",
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


    $(document).on('click', '.reset-mdt-password', function (e) {
        e.preventDefault();

        var id = $(this).attr('data-id');

        bootbox.confirm({
            message: "Bạn có chắc chắn muốn reset password mã mua đồ tốt này ?",
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
                    $.ajax({
                        'type': 'post',
                        'url': '{{ url('admin/reset-password-mdt') }}',
                        'data': {
                            'id': id,
                        },
                        success: function (response) {
                            bootbox.alert('Bạn đã reset password thành công')
                        }
                    });
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


</script>


</body>


<!-- Mirrored from keenthemes.com/preview/metronic/theme/admin_1_material_design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2016 04:44:29 GMT -->
</html>