<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/unwind/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 09:13:26 GMT -->
<head>
	<title>unwind - Free Bootstrap 5 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/tiny-slider.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/datepicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg  ftco-navbar-light">
		<div class="container-xl">
			<a class="navbar-brand align-items-center" href="index-2.html">
				<span class="">Unwind <small>Hotel Booking</small></span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item {{Request::is('/') ? 'current_page_item' : '' }}"><a class="nav-link active" href="{{route('index')}}">Home</a></li>
					<li class="nav-item {{Request::is('about') ? 'current_page_item' : '' }}"><a class="nav-link" href="{{route('aboutUs')}}">About</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('rooms')}}">Rooms</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('restoBar')}}">Resto &amp; Bar</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('contactUs')}}">Contact</a></li>
				</ul>

			</div>
		</div>
	</nav>
@yield('content')

<footer class="ftco-footer">
							<div class="container-xl">
								<div class="row mb-5 pb-5 justify-content-between">
									<div class="col-md-6 col-lg">
										<div class="ftco-footer-widget mb-4">
											<h2 class="ftco-heading-2 logo d-flex">
												<a class="navbar-brand align-items-center" href="index-2.html">
													<span class="">Unwind <small>Hotel Booking</small></span>
												</a>
											</h2>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
											<ul class="ftco-footer-social list-unstyled mt-2">
												<li><a href="#"><span class="fa fa-twitter"></span></a></li>
												<li><a href="#"><span class="fa fa-facebook"></span></a></li>
												<li><a href="#"><span class="fa fa-instagram"></span></a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="ftco-footer-widget mb-4">
											<h2 class="ftco-heading-2">Services</h2>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="ftco-footer-widget mb-4">
													<ul class="list-unstyled">
														<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Free Wifi</a></li>
														<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Easy Booking</a></li>
														<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Restaurant</a></li>
														<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Swimming Pool</a></li>
													</ul>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="ftco-footer-widget mb-4">
													<ul class="list-unstyled">
														<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Beauty &amp; Health</a></li>
														<li><a href="#"><span class="fa fa-chevron-right me-2"></span>60" Flatscreen TV</a></li>
														<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Cold Aircondition</a></li>
														<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Help &amp; Support</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-2">
										<div class="ftco-footer-widget mb-4">
											<h2 class="ftco-heading-2">Quick Links</h2>
											<ul class="list-unstyled">
												<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Home</a></li>
												<li><a href="#"><span class="fa fa-chevron-right me-2"></span>About</a></li>
												<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Rooms</a></li>
												<li><a href="#"><span class="fa fa-chevron-right me-2"></span>Resto &amp; Bar</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-lg">
										<div class="ftco-footer-widget mb-4">
											<h2 class="ftco-heading-2">Have a Questions?</h2>
											<div class="block-23 mb-3">
												<ul>
													<li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
													<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
													<li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span class="__cf_email__" data-cfemail="4b22252d240b32243e392f24262a222565282426">[email&#160;protected]</span></span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container-fluid px-0 py-5 bg-darken">
								<div class="container-xl">
									<div class="row">
										<div class="col-md-12 text-center">
											<p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a></p>
										</div>
									</div>
								</div>
							</div>
						</footer>
						<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
						<script src="{{asset('assets/js/tiny-slider.js')}}"></script>
						<script src="{{asset('assets/js/glightbox.min.js')}}"></script>
						<script src="{{asset('assets/js/aos.js')}}"></script>
						<script src="{{asset('assets/js/datepicker.min.js')}}"></script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
						<script src="{{asset('assets/js/google-map.js')}}"></script>
						<script src="{{asset('assets/js/main.js')}}"></script>

						<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
						<script>
							window.dataLayer = window.dataLayer || [];
							function gtag(){dataLayer.push(arguments);}
							gtag('js', new Date());

							gtag('config', 'UA-23581568-13');

							//Removes Success Message Automatically 
							$("document").ready(function()
							{
								setTimeout(function(){
									$("div.alert").remove();
								},3000)
							})
							//End
						</script>

	
</body>
<!-- Mirrored from preview.colorlib.com/theme/unwind/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2021 09:13:26 GMT -->
</html>