<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('style.css')}}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="{{url('icons/fontawesome/css/fontawesome-all.min.css')}}"> -->
	<link rel="stylesheet" href="{{url('icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css')}}"><!-- iconsmind.com Icons -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	<title>Books</title>
</head>
<style>

	#epubmodel{
		width:100%;
	}	

	.openbar{
		display : none;
	}
	.cross{
		display : none;
	}
	@media (max-width: 767px) {
	
		.openbar{
			display : block !important; 
		}
		.cross{
			display : block !important;
		}
        #sidebar-nav{
			background-color: white;
		}
	}
</style>
<body>
	<div id="sidebar-bg">

	@include('layout.header')


		<main id="col-main">

			
		</main>


	</div>
	


	<!-- Required Framework JavaScript -->
	<script src="{{url('js/libs/jquery-3.3.1.min.js')}}"></script><!-- jQuery -->
	<script src="{{url('js/libs/popper.min.js')}}" defer></script><!-- Bootstrap Popper/Extras JS -->
	<script src="{{url('js/libs/bootstrap.min.js')}}" defer></script><!-- Bootstrap Main JS -->
	<!-- All JavaScript in Footer -->

	<!-- Additional Plugins and JavaScript -->
	<script src="{{url('js/navigation.js')}}" defer></script><!-- Header Navigation JS Plugin -->
	<script src="{{url('js/jquery.flexslider-min.js')}}" defer></script><!-- FlexSlider JS Plugin -->
	<script src="{{url('js/jquery-asRange.min.js')}}" defer></script><!-- Range Slider JS Plugin -->
	<script src="{{url('js/circle-progress.min.js')}}" defer></script><!-- Circle Progress JS Plugin -->
	<script src="{{url('js/afterglow.min.js')}}" defer></script><!-- Video Player JS Plugin -->
	<script src="{{url('js/script.js')}}" defer></script><!-- Custom Document Ready JS -->
	<script src="{{url('js/script-dashboard.js')}}" defer></script><!-- Custom Document Ready for Dashboard Only JS -->
	<!-- <script src="../dist/epub.min.js"></script> -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/epubjs/dist/epub.min.js"></script>
  
	<script>
		$(document).ready(function()
		{ 
			$(document).bind("contextmenu",function(e){
					return false;
			}); 
		})
		
		
	</script>								
	

</body>

</html>
