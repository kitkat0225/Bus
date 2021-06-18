<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>{{ config('app.name', 'Bus Company') }}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../../global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../../global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../../global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../../global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="../../global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link href="{{ url('global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link rel="stylesheet" type="text/css" href="../../global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../../global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link href="../../global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="../../global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="../../global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="../../pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../../global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../../layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="../../layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../../layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../global/plugins/respond.min.js"></script>
<script src="../../global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="{{ url('global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="../../global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="../../global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="../../global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="../../global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="../../global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="../../global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="../../global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="../../global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="../../global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="../../global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../layout/scripts/layout.js" type="text/javascript"></script>
<script src="../../layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../layout/scripts/demo.js" type="text/javascript"></script>
<script src="../../pages/scripts/index.js" type="text/javascript"></script>
<script src="../../pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">

    <!-- BEGIN HEADER -->
    @include('layouts.navbar')
    <!-- END HEADER -->

    
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	@include('layouts.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
        
        <div class="page-content">
            @include('layouts.pageheader')

            @yield('page-content')

        </div>
        
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
            20{{ date('y') }} &copy; Bus Company.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>