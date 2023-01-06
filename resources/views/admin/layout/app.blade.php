<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from foxythemes.net/preview/products/beagle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 May 2022 15:16:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/lib/jqvmap/jqvmap.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" type="text/css" />
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">

        @include('admin.layout.header')

        @include('admin.layout.sidebar')

        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark1"></div>
                            <div class="data-info">
                                <div class="desc">New Users</div>
                                <div class="value"><span
                                        class="indicator indicator-equal mdi mdi-chevron-right"></span><span
                                        class="number" data-toggle="counter" data-end="113">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark2"></div>
                            <div class="data-info">
                                <div class="desc">Monthly Sales</div>
                                <div class="value"><span
                                        class="indicator indicator-positive mdi mdi-chevron-up"></span><span
                                        class="number" data-toggle="counter" data-end="80" data-suffix="%">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark3"></div>
                            <div class="data-info">
                                <div class="desc">Impressions</div>
                                <div class="value"><span
                                        class="indicator indicator-positive mdi mdi-chevron-up"></span><span
                                        class="number" data-toggle="counter" data-end="532">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark4"></div>
                            <div class="data-info">
                                <div class="desc">Downloads</div>
                                <div class="value"><span
                                        class="indicator indicator-negative mdi mdi-chevron-down"></span><span
                                        class="number" data-toggle="counter" data-end="113">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
    <script src="{{ asset('admin/assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('admin/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jquery-flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jquery-flot/jquery.flot.pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jquery-flot/jquery.flot.time.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jquery-flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('admin/assets/lib/jquery-flot/plugins/curvedLines.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('admin/assets/lib/jquery.sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/countup/countUp.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jqvmap/jquery.vmap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/lib/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dashboard();

        });
    </script>
</body>

<!-- Mirrored from foxythemes.net/preview/products/beagle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 May 2022 15:17:10 GMT -->

</html>
