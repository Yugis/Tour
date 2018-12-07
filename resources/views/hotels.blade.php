<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hotels | Tour</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
			<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Tour</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="{{Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
								
								<li class="{{Request::is('hotels') ? "active" : "" }}"><a href="/hotels">Hotels</a></li>
								<li class="{{Request::is('services') ? "active" : "" }}"><a href="/services">Services</a></li>
								<li class="{{Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
								<li class="{{Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Find Hotel</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="wrap-division">
									@if($hotels->isNotEmpty())
									@foreach($hotels as $hotel)
									<div class="col-md-6 col-sm-6 animate-box">
										<div class="hotel-entry">
											<a href="/hotel-room" class="hotel-img" style="background-image: url(https://loremflickr.com/800/535/hotel,resort/all?random={{ $hotel->id }});">
												<p class="price"><span>${{ trim($hotel->price, '.0') }}</span><small> /night</small></p>
											</a>
											<div class="desc">
												<p class="star">
													<span>
														@for($i = 0; $i < $hotel->rating; $i++)
															<i class="icon-star-full"></i>
														@endfor
													</span> {{ $hotel->rating * mt_rand(10, 300) }} Reviews
												</p>
												<h3><a href="/hotel-room">{{ $hotel->name }}</a></h3>
												<span class="place">{{ $hotel->location->name }}</span>
												<p>{{ $hotel->description }}</p>
											</div>
										</div>
									</div>
									@endforeach
								@else
									<center><h3>No hotels available with these specifications.</h3></center>
								@endif
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="pagination">
									{{ $hotels->links() }}
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="sidebar-wrap">
							<form action="">
								<div class="side search-wrap animate-box colorlib-form">
									<h3 class="sidebar-heading">Find your hotel</h3>
					              	<div class="row">
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <label for="date">Check-in:</label>
					                    <div class="form-field">
					                      <i class="icon icon-calendar2"></i>
					                      <input name="check_in" type="text" id="date" class="form-control date" placeholder="Check-in date" value="{{ old('check_in') }}">
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <label for="date">Check-out:</label>
					                    <div class="form-field">
					                      <i class="icon icon-calendar2"></i>
					                      <input name="check_out" type="text" id="date" class="form-control date" placeholder="Check-out date" value="{{ old('check_out') }}">
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <div class="form-group">
					                    <label for="guests">Guest</label>
					                    <div class="form-field">
					                      <i class="icon icon-arrow-down3"></i>
					                      <select name="guests" id="people" class="form-control">
					                        <option value="1" {{ old('guests') == 1 ? ' selected' : '' }}>1</option>
					                        <option value="2" {{ old('guests') == 2 ? ' selected' : '' }}>2</option>
					                        <option value="3" {{ old('guests') == 3 ? ' selected' : '' }}>3</option>
					                        <option value="4" {{ old('guests') == 4 ? ' selected' : '' }}>4</option>
					                        <option value="5" {{ old('guests') == 5 ? ' selected' : '' }}>5+</option>
					                      </select>
					                    </div>
					                  </div>
					                </div>
					                <div class="col-md-12">
					                  <input type="submit" value="Find Hotel" class="btn btn-primary btn-block">
					                </div>
					              </div>
								</div>
								<div class="side animate-box">
									<div class="row">
										<div class="col-md-12 colorlib-form-2">
											<h3 class="sidebar-heading">Price Range</h3>
							              	<div class="row">
							                <div class="col-md-6">
							                  <div class="form-group">
							                    <label for="guests">Price from:</label>
							                    <div class="form-field">
							                      <i class="icon icon-arrow-down3"></i>
							                      <select name="min_price" id="min_price" class="form-control">
							                        <option value="0" selected>0</option>
							                        <option value="100" {{ old('min_price') == 100 ? ' selected' : '' }}>100</option>
							                        <option value="200" {{ old('min_price') == 200 ? ' selected' : '' }}>200</option>
							                        <option value="300" {{ old('min_price') == 300 ? ' selected' : '' }}>300</option>
							                        <option value="400" {{ old('min_price') == 400 ? ' selected' : '' }}>400</option>
							                        <option value="1000" {{ old('min_price') == 1000 ? ' selected' : '' }}>1000</option>
							                      </select>
							                    </div>
							                  </div>
							                </div>
							                <div class="col-md-6">
							                  <div class="form-group">
							                    <label for="guests">Price to:</label>
							                    <div class="form-field">
							                      <i class="icon icon-arrow-down3"></i>
							                      <select name="max_price" id="max_price" class="form-control">
							                        <option value="10000" {{ old('max_price') == 10000 ? ' selected' : '' }}>10000</option>
							                        <option value="8000" {{ old('max_price') == 8000 ? ' selected' : '' }}>8000</option>
							                        <option value="6000" {{ old('max_price') == 6000 ? ' selected' : '' }}>6000</option>
							                        <option value="4000" {{ old('max_price') == 4000 ? ' selected' : '' }}>4000</option>
							                        <option value="2000" {{ old('max_price') == 2000 ? ' selected' : '' }}>2000</option>
							                      </select>
							                    </div>
							                  </div>
							                </div>
							              </div>
						            </div>
									</div>
								</div>
								<div class="side animate-box">
									<div class="row">
										<div class="col-md-12 colorlib-form-2">
											<h3 class="sidebar-heading">Review Rating</h3>
											   <div class="form-check">
													<input type="checkbox" name="rating[]" class="form-check-input" value="5" {{ (is_array(old('rating')) && in_array(5, old('rating'))) ? ' checked' : '' }}>
													<label class="form-check-label" for="exampleCheck1">
														<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="rating[]" class="form-check-input" value="4" {{ (is_array(old('rating')) && in_array(4, old('rating'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
											    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											      </label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="rating[]" class="form-check-input" value="3" {{ (is_array(old('rating')) && in_array(3, old('rating'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
											      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											     </label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="rating[]" class="form-check-input" value="2" {{ (is_array(old('rating')) && in_array(2, old('rating'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
											      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
											     </label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="rating[]" class="form-check-input" value="1" {{ (is_array(old('rating')) && in_array(1, old('rating'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
											      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
											     </label>
											   </div>
										</div>
									</div>
								</div>
								<div class="side animate-box">
									<div class="row">
										<div class="col-md-12 colorlib-form-2">
											<h3 class="sidebar-heading">Categories</h3>
											   <div class="form-check">
													<input type="checkbox" name="category_id[]" class="form-check-input"  value="1" {{ (is_array(old('category_id')) && in_array(1, old('category_id'))) ? ' checked' : '' }}>
													<label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Apartment</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="category_id[]" class="form-check-input"  value="2" {{ (is_array(old('category_id')) && in_array(2, old('category_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Hotel</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="category_id[]" class="form-check-input" value="3" {{ (is_array(old('category_id')) && in_array(3, old('category_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Hostel</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="category_id[]" class="form-check-input" value="4" {{ (is_array(old('category_id')) && in_array(4, old('category_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Inn</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="category_id[]" class="form-check-input" value="5" {{ (is_array(old('category_id')) && in_array(5, old('category_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Villa</h4>
													</label>
											   </div>
										</div>
									</div>
								</div>
								<div class="side animate-box">
									<div class="row">
										<div class="col-md-12 colorlib-form-2">
											<h3 class="sidebar-heading">Location</h3>
											   <div class="form-check">
													<input type="checkbox" name="location_id[]" class="form-check-input" value="1" {{ (is_array(old('location_id')) && in_array(1, old('location_id'))) ? ' checked' : '' }}>
													<label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Greece</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="location_id[]" class="form-check-input" value="2" {{ (is_array(old('location_id')) && in_array(2, old('location_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Italy</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="location_id[]" class="form-check-input" value="3" {{ (is_array(old('location_id')) && in_array(3, old('location_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Spain</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="location_id[]" class="form-check-input" value="4" {{ (is_array(old('location_id')) && in_array(4, old('location_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Germany</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="location_id[]" class="form-check-input" value="5" {{ (is_array(old('location_id')) && in_array(5, old('location_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Japan</h4>
													</label>
											   </div>
										</div>
									</div>
								</div>
								<div class="side animate-box">
									<div class="row">
										<div class="col-md-12 colorlib-form-2">
											<h3 class="sidebar-heading">Facilities</h3>
											   <div class="form-check">
													<input type="checkbox" name="facility_id[]" class="form-check-input" value="1" {{ (is_array(old('facility_id')) && in_array(1, old('facility_id'))) ? ' checked' : '' }}>
													<label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Airport Transfer</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="facility_id[]" class="form-check-input" value="2" {{ (is_array(old('facility_id')) && in_array(2, old('facility_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Resto Bar</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="facility_id[]" class="form-check-input" value="3" {{ (is_array(old('facility_id')) && in_array(3, old('facility_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Restaurant</h4>
													</label>
											   </div>
											   <div class="form-check">
											      <input type="checkbox" name="facility_id[]" class="form-check-input" value="4" {{ (is_array(old('facility_id')) && in_array(4, old('facility_id'))) ? ' checked' : '' }}>
											      <label class="form-check-label" for="exampleCheck1">
														<h4 class="place">Swimming Pool</h4>
													</label>
											   </div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.stellar.min.js"></script>

	<script src="js/main.js"></script>

	</body>
</html>

