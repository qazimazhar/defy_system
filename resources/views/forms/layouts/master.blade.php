<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Form Wizard | Porto Admin - Responsive HTML5 Template</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

		<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css')}}">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{ asset('vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('vendor/pnotify/pnotify.custom.css')}}" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('css/theme.css')}}" />


		<!--(remove-empty-lines-end)-->



		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.js')}}"></script>
		
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> -->


	</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-md">
    <a class="navbar-brand" href="#">Defy Insurance</a>
  </div>
</nav>
    @yield('content')
    @stack('scripts')
    <!-- Vendor -->
		<script src="{{ asset('vendor/jquery/jquery.js')}}"></script>
		<script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{ asset('vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{ asset('vendor/common/common.js')}}"></script>
		<script src="{{ asset('vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{ asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
		<script src="{{ asset('vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
		<script src="{{ asset('vendor/pnotify/pnotify.custom.js')}}"></script>


		<!--(remove-empty-lines-end)-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('js/theme.init.js')}}"></script>

		<!-- Examples -->
		<script>
			var paymenyUrl = "{{route('form.payment')}}";
		</script>
		<script src="{{ asset('js/examples/examples.wizard.js')}}"></script>

		

		<script>
		$(document).ready(function() {
			$("#w4").validate();
		});
		</script>
		
		
</body>
</html>