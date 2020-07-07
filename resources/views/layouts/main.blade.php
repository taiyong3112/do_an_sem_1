<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wend - Best Travel</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url('public')}}/css/zebra_datepicker_bs.min.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
		<link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.min.css">
		<link rel="stylesheet" href="{{url('public')}}/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="{{url('public')}}/css/style.css">
	</head>
	<body>
		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-4">
							<p><i class="fas fa-envelope"></i> infp@a2z.com</p>
						</div>
						<div class="col-md-7 col-sm-7 col-xs-8 pull-left">
							<p><i class="fas fa-map-marker-alt"></i> 78 5th Ave, New York, Ny 10011, USA</p>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="col-md-6 col-xs-6 lang">
								<p>
									<img src="{{url('public')}}/images/icons/us-icon.png" alt=""> USA <i class="fas fa-chevron-down"></i>
								</p>
							</div>
							<div class="col-md-6 col-xs-6 sign-in">
								<a href="{{route('login')}}">
									<p><i class="fas fa-user"></i> Sign in</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-nav">	
				<div class="container">
					<div class="col-md-2 col-xs-12">
						<div class="col-xs-6">
							<img src="{{url('public')}}/images/logo.png" alt="">
						</div>
						<div class="col-xs-6">
							<div class="responsive-icon"></div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="nav-menu" id="navMenu">
							<ul>
								<li><a href="{{route('index')}}">Home</a></li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">Trip Package <i class="fas fa-chevron-down"></i></a>
									<ul class="dropdown-menu">
										<li>
											@foreach($destination as $dest)
											<a href="{{route('home.destination',['id'=>$dest->id,'slug'=> Str::slug($dest->name)])}}">{{$dest->name}}</a>
											@endforeach
											
										</li>
									</ul>
								</li>
								<li><a href="{{route('service')}}">Services</a></li>
								<li><a href="{{route('gallery')}}">Gallery</a></li>
								<li><a href="{{route('blog')}}">Blogs</a></li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">More</a>
									<ul class="dropdown-menu">
										<li><a href="{{route('about')}}">About Us</a></li>
										<li><a href="{{route('contact')}}">Contact Us</a></li>
										<li><a href="{{route('faq')}}">FAQ</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 nav-contact">
						<i class="fas fa-phone-volume"></i>
						<div class="contact-text">
							<h4>1-1235-536-5896</h4>
							<h6>Toll Free & 24/7 Available</h6>
						</div>
					</div>
				</div>
			</div>
		</header>
		@yield('main')
		<footer id="footer-all-page">
			<div class="container">
			  <div class="row">
			    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
			      <div class="all-fott-cov">
			        <div class="footer-logo">
			          <a href="#"><img src="{{url('public')}}/images/logo.png" alt="img" /></a>
			        </div>
			        <div class="footer-para">
			          <p>
			            Pellentesque convallis, diam et feugiat volutpat, tellus
			            ligula consequat augue, quis malesuada nisi ante nec metus.
			            Sed id pretium nunc. Mauris vitae porttitor tortor. Fusce
			            aliquet ac metus eget egestas.
			          </p>
			        </div>
			        <div class="footer-form">
			          <div class="form-group d-flex">
			            <input type="text" placeholder="Enter your email" class="form-control" />
			            <button class="btn plean-footer">
			              <i class="fab fa-telegram-plane"></i>
			            </button>
			          </div>
			        </div>
			      </div>
			    </div>
			    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
			      <div class="quick-link">
			        <div class="comm-foot-hed">
			          <h6>Quick Links</h6>
			        </div>
			        <div class="foot-list">
			          <ul>
			            <li><a href="about.html">About</a></li>
			            <li><a href="tour-packages.html">Tours & Trips</a></li>
			            <li><a href="tour-details.html">Locations Find</a></li>
			            <li><a href="contact.html">Contact Us.</a></li>
			            <li><a href="faq.html">Terms & conditions</a></li>
			            <li><a href="faq.html">Praivcy Policy</a></li>
			          </ul>
			        </div>
			      </div>
			    </div>
			    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
			      <div class="quick-link-2">
			        <div class="foot-list-2">
			          <ul>
			            <li><a href="index.html">Home</a></li>
			            <li><a href="faq.html">Testimonials</a></li>
			            <li><a href="gallery.html">Team</a></li>
			            <li><a href="service.html">Service</a></li>
			            <li><a href="blog.html">News</a></li>
			          </ul>
			        </div>
			      </div>
			    </div>
			    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
			      <div class="recent-fot-post mar-top-responsive">
			        <div class="comm-foot-hed">
			          <h6>Recent Post</h6>
			        </div>
			        <div class="post-cover-foot">
			          <div class="pos-rece-1">
			            <div class="post-rect-img">
			              <a href="blog-single.html"><img src="{{url('public')}}/images/footer-blog.png"alt="" /></a>
			            </div>
			            <div class="podt-text-1">
			              <p>
			                <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
			                  tellus ligula c</a>
			              </p>
			              <span>Sep 09, 2019</span>
			            </div>
			          </div>
			          <div class="pos-rece-1">
			            <div class="post-rect-img">
			              <a href="blog-single.html"><img src="{{url('public')}}/images/footer-blog.png" alt="" /></a>
			            </div>
			            <div class="podt-text-1">
			              <p>
			                <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
			                  tellus ligula c</a>
			              </p>
			              <span>Sep 09, 2019</span>
			            </div>
			          </div>
			          <div class="pos-rece-1">
			            <div class="post-rect-img">
			              <a href="blog-single.html"><img src="{{url('public')}}/images/footer-blog.png" alt="" /></a>
			            </div>
			            <div class="podt-text-1">
			              <p>
			                <a href="blog-single.html">Pellentesque convallis, diam et feugiat volutpat,
			                  tellus ligula c</a>
			              </p>
			              <span>Sep 09, 2019</span>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</footer>
		<!-- footer end -->
		<!-- footer-bottom -->
		<div class="footre-bottom">
			<div class="container">
			  <div class="row">
			    <div class="col-lg-6 col-md-8 col-sm-8 col-8">
			      <div class="copy-right-para">
			        <p>And IT Themes © 2019. All Rights Reserved</p>
			      </div>
			    </div>
			    <div class="col-lg-6 col-md-4 col-sm-4 col-4">
			      <div class="copy-right-icon">
			        <a href="#"><i class="fab fa-facebook-f face no-ag"></i></a>
			        <a href="#"><i class="fab fa-twitter face"></i></a>
			        <a href="#"><i class="fab fa-linkedin-in face"></i></a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Zebra Datepicker -->
		<script src="{{url('public')}}/js/zebra_datepicker.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{url('public')}}/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script type="text/javascript" src="{{url('public')}}/js/owl.carousel.min.js"></script>
 		<script type="text/javascript" src="{{url('public')}}/js/app.js"></script>
	</body>
</html>