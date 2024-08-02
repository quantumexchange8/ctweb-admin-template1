<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adomx - Responsive Bootstrap 4 Admin Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

</head>

{{-- class="skin-dark" --}}

<body>

    <div class="main-wrapper">


        <!-- Header Section Start -->
        @include('layout.navbar')
        <!-- Header Section End -->


        <!-- Side Header Start -->
        @include('layout.sidebar')
        <!-- Side Header End -->

        <!-- Content Body Start -->
        @yield('content')
        <!-- Content Body End -->

        <!-- Footer Section Start -->
        @include('layout.footer')
        <!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--map google-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
    <script src="assets/js/plugins/google-map/googlemap.active.js"></script>

    <!--map vector-->
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.usa.js"></script>
    <script src="assets/js/plugins/vmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="assets/js/plugins/vmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="assets/js/plugins/vmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="assets/js/plugins/vmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/vmap/vmap.active.js"></script>

    <!--sparkline charts-->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/plugins/sparkline/sparkline.active.js"></script>

    <!--morris charts-->
    <script src="assets/js/plugins/raphael/raphael.min.js"></script>
    <script src="assets/js/plugins/morris/morris.min.js"></script>
    <script src="assets/js/plugins/morris/morris.active.js"></script>

    <!--google charts-->
    <script src="assets/js/plugins/google-chart/google-chart.js"></script>
    <script src="assets/js/plugins/google-chart/google-chart.active.js"></script>

    <!--echarts-->
    <script src="assets/js/plugins/echarts/echarts.min.js"></script>
    <script src="assets/js/plugins/echarts/echarts.active.js"></script>

    <!--js Grid-->
    <script src="assets/js/plugins/jsgrid/jsgrid.min.js"></script>
    <script src="assets/js/plugins/jsgrid/jsgrid-db.js"></script>
    <script src="assets/js/plugins/jsgrid/jsgrid.active.js"></script>

    <!--table_footer-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>
    <script src="assets/js/plugins/footable/footable.min.js"></script>
    <script src="assets/js/plugins/footable/footable.active.js"></script>

    <!--table_data-->
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>

    <!--wizard-->
    <script src="assets/js/plugins/smartWizard/jquery.smartWizard.min.js"></script>
    <script src="assets/js/plugins/smartWizard/smartWizard.active.js"></script>

    <!--selects-->
    <script src="assets/js/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/plugins/select2/select2.active.js"></script>
    <script src="assets/js/plugins/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/nice-select/niceSelect.active.js"></script>
    <script src="assets/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/js/plugins/bootstrap-select/bootstrapSelect.active.js"></script>

    <!--range slider-->
    <script src="assets/js/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/ion-rangeslider/ion.rangeSlider.active.js"></script>

    <!--form upload-->
    <script src="assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond.active.js"></script>
    <script src="assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="assets/js/plugins/dropify/dropify.active.js"></script>

    <!--form editor-->
    <script src="assets/js/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="assets/js/plugins/summernote/summernote.active.js"></script>
    <script src="assets/js/plugins/quill/quill.min.js"></script>
    <script src="assets/js/plugins/quill/quill.active.js"></script>

    <!--rating-->
    <script src="assets/js/plugins/raty/jquery.raty.js"></script>
    <script src="assets/js/plugins/raty/raty.active.js"></script>

    <!--videoPlayer-->
    <script src="assets/js/plugins/plyr/plyr.min.js"></script>
    <script src="assets/js/plugins/plyr/plyr.active.js"></script>

    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>
    <script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets/js/plugins/fullcalendar/fullcalendar.active.js"></script>

    <!--Daterange Picker-->
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    @if (Request::is('eCommerce'))
        <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
        <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
        <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
        <script src="assets/js/plugins/vmap/vmap.active.js"></script>
    @endif

</body>

</html>