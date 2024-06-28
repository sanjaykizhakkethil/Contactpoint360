
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

	<!-- Meta data -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	
	<!-- Title -->
	<title>Admin </title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--Favicon -->
	<link rel="icon" href="{{ asset('admin/assets/images/brand/favicon.png') }}" type="image/x-icon">

	<!--Bootstrap css -->
	<link id="style" href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Style css -->
	<link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

	<!-- Plugin css -->
	<link href="{{ asset('admin/assets/css/plugins.css') }}" rel="stylesheet">

	<!-- Animate css -->
	<link href="{{ asset('admin/assets/css/animated.css') }}" rel="stylesheet">

	<!---Icons css-->
	<link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">

	<!-- INTERNAL Switcher css -->
	<link href="{{ asset('admin/assets/switcher/css/switcher.css') }}" rel="stylesheet"/>
	<link href="{{ asset('admin/assets/switcher/demo.css') }}" rel="stylesheet"/>

	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

</head>


<!-- <body class="app sidebar-mini ltr"> -->
<body class="app sidebar-mini ltr">

    <x-switcher />

	 <!-- Loader -->
     <!---Global-loader-->
	
	<!--- End Global-loader-->

   <!-- Page -->
	<div class="page">
		<div class="page-main">

			<x-admin-header />

			<!-- App-Content -->
			<div class="app-content main-content">
				<div class="side-app">
					<!-- CONTAINER -->
					<div class="main-container container-fluid px-0">

                        @yield('content')


					</div>
				</div>
			</div>
			<!-- End app-content-->

			<x-admin-footer />
		</div>
	</div>
	<!-- End Page -->

    <!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

	<!-- Jquery js-->
	<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>

	<!-- Bootstrap5 js-->
	<script src="{{ asset('admin/assets/plugins/bootstrap/popper.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!--Sidemenu js-->
	<script src="{{ asset('admin/assets/plugins/sidemenu/sidemenu.js') }}"></script>

	<!-- sticky js -->
	<script src="{{ asset('admin/assets/js/sticky.js') }}"></script>


	<!-- P-scroll js-->
	<script src="{{ asset('admin/assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/p-scrollbar/p-scroll.js') }}"></script>

	<!--INTERNAL Flot Charts js-->
	<script src="{{ asset('admin/assets/plugins/flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('admin/assets/js/dashboard.sampledata.js') }}"></script>
	<script src="{{ asset('admin/assets/js/chart.flot.sampledata.js') }}"></script>

	<!-- INTERNAL Chart js -->
	<script src="{{ asset('admin/assets/plugins/chart/chart.bundle.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/chart/utils.js') }}"></script>

	<!-- INTERNAL Apexchart js -->
	<script src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>

	<!--INTERNAL Moment js-->
	<script src="{{ asset('admin/assets/plugins/moment/moment.js') }}"></script>

	<!-- INTERNAL Data tables -->
	<script src="{{ asset('admin/assets/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>


	<!-- INTERNAL Select2 js -->
	
	<script src="{{ asset('admin/assets/js/select2.js') }}"></script>


	<!-- Simplebar JS -->
	<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>

	<!--INTERNAL Index js-->
	<script src="{{ asset('admin/assets/js/index1.js') }}"></script>

	<!-- Color theme js -->
	<script src="{{ asset('admin/assets/js/themeColors.js') }}"></script>

    <!-- Switcher-Styles js -->
    <script src="{{ asset('admin/assets/js/switcher-styles.js') }}"></script>

	<!-- Custom js-->
	<script src="{{ asset('admin/assets/js/custom.js') }}"></script>

	<!--  Switcher js -->
    
	<script src="{{ asset('admin/assets/plugins/select2/select2.full.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.select2-show-search').select2({
            placeholder: "Enter Title",
            allowClear: true
        });
    });
</script>

     @stack('scripts')

</body>

</html>
    


