<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">





<!-- Mirrored from jthemes.net/themes/html/medservices/files/all-doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 06:02:27 GMT -->

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Jthemes" />
	<meta name="description" content="MedService - Medical & Medical Health Landing Page Template" />
	<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- SITE TITLE -->
	<title>Farhat Hospital| Our doctors</title>
	@include('website.layouts.header')
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>




<body>

	<div id="page" class="page">
		@include('website.layouts.nav')

		<div id="breadcrumb" class="division">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class=" breadcrumb-holder">

							<!-- Breadcrumb Nav -->
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Meet the Doctors</li>
								</ol>
							</nav>

							<!-- Title -->
							<h4 class="h4-sm steelblue-color">Meet the Doctors</h4>

						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</div> <!-- END BREADCRUMB -->




		<!-- DOCTORS-3
			============================================= -->
		<section id="doctors-3" class="bg-lightgrey wide-60 doctors-section division">
			<div class="container">
				<div class="row">


					<!-- DOCTOR #1 -->
					@foreach($doctors as $doctor)
					<div class="col-md-6 col-lg-4">
						<div class="doctor-2">
							<!-- Doctor Photo -->
							<div class="">
								<img class="image-hover" src="{{ asset('storage/assets/images/doctor/' . $doctor->image) }}" alt="">
							</div>
							<style>
								.image-hover {
									width: 280px;
									height: 307px;
									background-size: cover;
									transition: background-image 2s;
								}
							</style>

							<!-- Doctor Meta -->
							<div class="doctor-meta">
								<h5 class="h5-xs blue-color">{{ $doctor->name }}</h5>

								<!-- Button -->
								<a class="btn btn-sm btn-blue blue-hover mt-15" href="{{ url('doctorprofile', $doctor->id) }}" title="View {{ $doctor->name }}'s Profile">
									View More Info
								</a>
							</div>
						</div>
					</div> <!-- END DOCTOR CARD -->
					@endforeach <!-- END DOCTOR #1 -->
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END DOCTORS-3 -->




		<!-- STATISTIC-1
			============================================= -->





		<!-- TESTIMONIALS-2
			============================================= -->

	</div>

	@include('website.layouts.footer')

	<script src="{{url('website/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{url('website/js/bootstrap.min.js')}}"></script>
	<script src="{{url('website/js/modernizr.custom.js')}}"></script>
	<script src="{{url('website/js/jquery.easing.js')}}"></script>
	<script src="{{url('website/js/jquery.appear.js')}}"></script>
	<script src="{{url('website/js/jquery.stellar.min.js')}}"></script>
	<script src="{{url('website/js/menu.js')}}"></script>
	<script src="{{url('website/js/sticky.js')}}"></script>
	<script src="{{url('website/js/jquery.scrollto.js')}}"></script>
	<script src="{{url('website/js/materialize.js')}}"></script>
	<script src="{{url('website/js/owl.carousel.min.js')}}"></script>
	<script src="{{url('website/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('website/js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{url('website/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{url('website/js/hero-form.js')}}"></script>
	<script src="{{url('website/js/contact-form.js')}}"></script>
	<script src="{{url('website/js/comment-form.js')}}"></script>
	<script src="{{url('website/js/appointment-form.js')}}"></script>
	<script src="{{url('website/js/jquery.datetimepicker.full.js')}}"></script>
	<script src="{{url('website/js/jquery.validate.min.js')}}"></script>
	<script src="{{url('website/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{url('website/js/wow.js')}}"></script>
	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>

	<!-- Custom Script -->
	<script src="{{url('website/js/custom.js')}}"></script>


	<script>
		new WOW().init();
	</script>



	<script src="{{url('website/js/changer.js')}}"></script>
	<script defer src="{{url('website/js/styleswitch.js')}}"></script>
	<script src="//code.jivosite.com/widget/GOAa99DTuX" async></script>


</body>




<!-- Mirrored from jthemes.net/themes/html/medservices/files/all-doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 06:02:28 GMT -->

</html>