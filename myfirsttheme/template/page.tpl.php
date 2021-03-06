<div class="container-fluid">
		<div class="wrapper">
			<!--Header-->
			<div class="row" style="height:130px; background:#094673;">
				<div class="container header-nav">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand nav-logo" href="#">
							<?php $my_static_banner = path_to_theme() . '../image/logo.png';?>
							<img src="<?php print $my_static_banner ?>" width="100" height="100" alt=""
								style="border-radius: 50px;">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item active nav-menu-style">
									<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item dropdown nav-menu-style">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										About
									</a>
									<div class="dropdown-menu menu-list-style" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</li>
								<li class="nav-item dropdown nav-menu-style">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Destinations
									</a>
									<div class="dropdown-menu menu-list-style" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</li>
								<li class="nav-item active nav-menu-style">
									<a class="nav-link" href="#">Tours</a>
								</li>
								<li class="nav-item dropdown nav-menu-style">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										News
									</a>
									<div class="dropdown-menu menu-list-style" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</li>
								<li class="nav-item active nav-menu-style">
									<a class="nav-link" href="#">Tour Search</a>
								</li>
								<li class="nav-item dropdown nav-menu-style">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
										role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Pages
									</a>
									<div class="dropdown-menu menu-list-style" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</li>
								<li class="nav-item active nav-menu-style">
									<a class="nav-link" href="#">Contacts</a>
								</li>
								<li class="nav-item active nav-menu-style">
									<a class="nav-link" href="#">
										<i class="fa fa-search"></i>
									</a>
								</li>

							</ul>
						</div>
					</nav>
				</div>

			</div>
			<!--Header-->

			<!--Booking Section-->

			<div class="row">
				<!--Carousel-->
				<div id="carouselExampleControls " class="carousel slide slider-image w-100" data-ride="carousel"
					style="height: 100vh;">
					<div class="carousel-inner h-100">
						<div class="carousel-item active h-100">
							<?php $my_static_banner = path_to_theme() . '../image/595845.png';?>
							<img class="d-block w-100" src="<?php print $my_static_banner ?>" alt="First slide"
								style="filter: blur(4px);height: 100%;">
						</div>
						<div class="carousel-item h-100">
						<?php $my_static_banner = path_to_theme() . '../image/school-of-tropical-fish.png';?>
							<img class="d-block w-100" src="<?php print $my_static_banner ?>" alt="Second slide"
								style="filter: blur(4px);height: 100%;">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" style="padding-left:35px;" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					<div class="carousel-overlay">
						<div style="position: relative;height: 100%;">
							<div class="container">
								<div class="row">
									<div class="col-8">
										<div class="left-col-content">
											<h2>Hundreds of <br /> Destinations Worldwide</h2>
										</div>
										<div class="left-col-desc">
											<p>We handpicked hundreds of the most spectacular summer destinations all
												over the globe.Relax your body and soul in the most remote corners of
												the world</p>
										</div>
										<div class="left-col-button">
											<button type="button" class="btn btn-primary showAlert" style="font-size:19px;">Learn
												More</button>
										</div>
									</div>
									<div class="col-4 ticket-booking" style="background:#175d90d4;">
										<div class="col-right">
											<h3>Pick Your Destination</h3>
											<div class="col-right-label">
												<p>Travelling From</p>
												<select class="browser-default custom-select">
													<option selected>Open this select menu</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-right-label">
												<p>Travelling To</p>
												<select class="browser-default custom-select">
													<option selected>Open this select menu</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-right-label-time">
												<div class="w-100">
													<div style="margin-right: 10px;">
														<p>Departure Date</p>
														<select class="browser-default custom-select">
															<option selected>Open this select menu</option>
															<option value="1">One</option>
															<option value="2">Two</option>
															<option value="3">Three</option>
														</select>
													</div>
												</div>	
												<div class="w-100">
													<div>
														<p>Ticket Type</p>
														<select class="browser-default custom-select">
															<option selected>Open this select menu</option>
															<option value="1">One</option>
															<option value="2">Two</option>
															<option value="3">Three</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-right-search">
												<button type="button" class="btn btn-primary w-100 showAlert">Search</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!--Carousel-->
			</div>

			<!--Booking Section-->

			<!--Trip Slider-->
			<div class="row card-carousel" style="height:530px;	">
				<div class="col-xs-12 col">
					<div style="padding:80px;">
						<div id="carouselExampleIndicators" class="carousel slide multi-slider" data-ride="carousel">

							<div class="carousel-inner">
								<div class="carousel-item active multi-slider-1">
									<div class="row">
										<div class="col-3">
											<div style="position: relative">
												<div class="slider-tag">
													<p> $19.00/pers.</p>
												</div>
												<?php $my_static_banner = path_to_theme() . '../image/vancavoer.png';?>
												<img class="d-block w-100" src="<?php print $my_static_banner ?>"
													alt="First slide">
												<p class="Trip-info">Las Vegas - Vancouver</p>
											</div>
										</div>
										<div class="col-3">
											<div style="position: relative;">
												<div class="slider-tag">
													<p> $19.00/pers.</p>
												</div>
												<?php $my_static_banner = path_to_theme() . '../image/Colosseum-rome.png';?>
												<img class="d-block w-100" src="<?php print $my_static_banner ?>"
													alt="First slide">
												<p class="Trip-info">New York - Rome</p>
											</div>
										</div>
										<div class="col-3">
											<div style="position: relative;">
												<div class="slider-tag">
													<p>$19.00/pers.</p>
												</div>
												<?php $my_static_banner = path_to_theme() . '../image/Miami.png';?>
												<img class="d-block w-100" src="<?php print $my_static_banner ?>"
													alt="First slide">
												<p class="Trip-info"> Miami - Bogota </p>
											</div>
										</div>
										<div class="col-3">
											<div style="position: relative;">
												<div class="slider-tag">
													<p> $19.00/pers.</p>
												</div>
												<?php $my_static_banner = path_to_theme() . '../image/Seatle.png';?>
												<img class="d-block w-100" src="<?php print $my_static_banner ?>"
													alt="First slide">
												<p class="Trip-info"> Seatle - Boston</p>
											</div>
										</div>
									</div>

								</div>
								<div class="carousel-item">
									<div class="carousel-item active multi-slider-1">
										<div class="row">
											<div class="col-3">
												<div style="position: relative">
													<div class="slider-tag">
														<p> $19.00/pers.</p>
													</div>
													<?php $my_static_banner = path_to_theme() . '../image/vancavoer.png';?>
													<img class="d-block w-100" src="<?php print $my_static_banner ?>"
														alt="First slide">
													<p class="Trip-info">Las Vegas - Vancouver</p>
												</div>
											</div>
											<div class="col-3">
												<div style="position: relative;">
													<div class="slider-tag">
														<p> $19.00/pers.</p>
													</div>
													<?php $my_static_banner = path_to_theme() . '../image/Colosseum-rome.png';?>
													<img class="d-block w-100" src="<?php print $my_static_banner ?>"
														alt="First slide">
													<p class="Trip-info">New York - Rome</p>
												</div>
											</div>
											<div class="col-3">
												<div style="position: relative;">
													<div class="slider-tag">
														<p>$19.00/pers.</p>
													</div>
													<?php $my_static_banner = path_to_theme() . '../image/Miami.png';?>
													<img class="d-block w-100" src="<?php print $my_static_banner ?>"
														alt="First slide">
													<p class="Trip-info"> Miami - Bogota </p>
												</div>
											</div>
											<div class="col-3">
												<div style="position: relative;">
													<div class="slider-tag">
														<p> $19.00/pers.</p>
													</div>
													<?php $my_static_banner = path_to_theme() . '../image/Seatle.png';?>
													<img class="d-block w-100" src="<?php print $my_static_banner ?>"
														alt="First slide">
													<p class="Trip-info"> Seatle - Boston</p>
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="carousel-item">
									<div class="carousel-item active multi-slider-1">
										<div class="row">
											<div class="col-3">
												<div style="position: relative">
													<div class="slider-tag">
														<p> $19.00/pers.</p>
													</div>
													<?php $my_static_banner = path_to_theme() . '../image/vancavoer.png';?>
													<img class="d-block w-100" src="<?php print $my_static_banner ?>"
														alt="First slide">
													<p class="Trip-info">Las Vegas - Vancouver</p>
												</div>
											</div>
											<div class="col-3">
												<div style="position: relative;">
													<div class="slider-tag">
														<p> $19.00/pers.</p>
													</div>
													<?php $my_static_banner = path_to_theme() . '../image/Colosseum-rome.png';?>
													<img class="d-block w-100" src="<?php print $my_static_banner ?>"
														alt="First slide">
													<p class="Trip-info">New York - Rome</p>
												</div>
											</div>
											<div class="col-3">
												<div style="position: relative;">
													<div class="slider-tag">
														<p>$19.00/pers.</p>
													</div>
													<?php $my_static_banner = path_to_theme() . '../image/Miami.png';?>
													<img class="d-block w-100" src="<?php print $my_static_banner ?>"
														alt="First slide">
													<p class="Trip-info"> Miami - Bogota </p>
												</div>
											</div>
											<div class="col-3">
												<div style="position: relative;">
													<div class="slider-tag">
														<p> $19.00/pers.</p>
													</div>
													<?php $my_static_banner = path_to_theme() . '../image/Seatle.png';?>
													<img class="d-block w-100" src="<?php print $my_static_banner ?>"
														alt="First slide">
													<p class="Trip-info"> Seatle - Boston</p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<ol class="carousel-indicators" style="padding-top:75px; bottom:unset;">
								<li data-target="#carouselExampleIndicators" style=" border-radius:50px;"
									data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" style=" border-radius:50px;"
									data-slide-to="1">
								</li>
								<li data-target="#carouselExampleIndicators" style=" border-radius:50px;"
									data-slide-to="2">
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<!--Trip Slider-->
			<div class="row trip-services">
				<div class="col-xl-1 col-0 resize" style="background:#ffffff;"></div>
				<div class="col-xl-6 col-7 resizeCol-2" style="height:560px; background:#ffffff;">
					<div class="left-col-Title">
						<h1>Our Services</h1>
					</div>
					<div class="label-highlight"> </div>
					<div class="trip-service-list">
						<div class="w-100">
							<div class="service-details">
								<div style="padding-left: 10px;">
									<?php $my_static_banner = path_to_theme() . '../image/Ticke icon.png';?>
									<img src="<?php print $my_static_banner ?>">
								</div>
								<div>
									<p class="details-label">
										Booking Tickets</p>
									<p class="detail-desc">
										Booking a ticket for you holiday journey has never been easier!</p>
								</div>
							</div>
						</div>
						<div style="width: 20px;"></div>
						<div class="w-100">
							<div class="service-details">
								<div style="padding-left: 20px;">
									<?php $my_static_banner = path_to_theme() . '../image/Ticke icon.png';?>
									<img src="<?php print $my_static_banner ?>">
								</div>
								<div>
									<p class="details-label">
										Documents</p>
									<p class="detail-desc">We'll
										help you with visas or documents along the way....</p>
								</div>
							</div>
						</div>
					</div>
					<div class="trip-service-list-1">
						<div class="w-100">
							<div class="service-details-1">
								<div style="padding-left: 10px;">
									<?php $my_static_banner = path_to_theme() . '../image/Ticke icon.png';?>
									<img src="<?php print $my_static_banner ?>">
								</div>
								<div>
									<p class="details-label-1">
										Travel Insurance</p>
									<p class="detail-desc-1">We
										can supply you with necessary medical insurance across the globe</p>
								</div>
							</div>
						</div>
						<div style="width: 20px;"></div>
						<div class="w-100">
							<div class="service-details-1">
								<div style="padding-left: 20px;">
									<?php $my_static_banner = path_to_theme() . '../image/Ticke icon.png';?>
									<img src="<?php print $my_static_banner ?>">
								</div>
								<div>
									<p class="details-label-1">
										Planning Tours</p>
									<p class="detail-desc-1">
										Whatever your dream destination is, we'll plan your next vacation easily!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-5" style="padding:0; height:560px;">
					<div class="h-100" style="padding-left:65px;">
						<?php $my_static_banner = path_to_theme() . '../image/BayShore.png';?>
						<img src="<?php print $my_static_banner ?>" class="h-100 w-100">
					</div>
				</div>
			</div>
			<!--Promotional banner-->
			<div class="row promotion-banner">
				<div class="container h-100">
					<div class="content-placing">
						<h2>See Our
							Special Promo Offers</h2>
						<button type="button" class="btn btn-primary showAlert">Get
							Started</button>
					</div>
				</div>
			</div>
			<!--News-offer-->
			<div class="row news-offer">

				<div class="container">
					<div class="news-label">
						<h2>Latest News</h2>
					</div>
					<!-- <div style="display:inline-block;width:20px;border:1px solid black"></div> -->
					<div class="row offer-cards">
						<div class="col-4 card-details">
							<div class="card w-100">
								<?php $my_static_banner = path_to_theme() . '../image/card01.png';?>
								<img class="card-img-top" src="<?php print $my_static_banner ?>" alt="Card image cap">
								<div class="card-body" style="padding:25px;">
									<div class="travel-dates">
										<i class="fa fa-calendar"></i>
										<span class="travel-days">2 days ago</span>
										<span style=" opacity: 0.5;">.</span>
										<span class="travel-days">by Michael Ford</span>
									</div>

									<h5 class="card-title title-style">Thailand Travel Tips
									</h5>
									<p class="card-text card-desc">Thailand is the
										travel hub of southeast Asia. Most people coming in to the region fly in to
										Bangkok</p>
									<span class="card-pin-1">Travel</span>
									<span class="card-pin-2">USA</span>
								</div>
							</div>
						</div>
						<div class="col-4 card-details">
							<div class="card w-100">
								<?php $my_static_banner = path_to_theme() . '../image/card02.png';?>
								<img class="card-img-top" src="<?php print $my_static_banner ?>" alt="Card image cap"
									style="height: 200px;">
								<div class="card-body" style="padding:25px;">
									<div class="travel-dates">
										<i class="fa fa-calendar"></i>
										<span class="travel-days">2 days ago</span>
										<span style=" opacity: 0.5;">.</span>
										<span class="travel-days">by Michael Ford</span>
									</div>

									<h5 class="card-title title-style">Thailand Travel Tips
									</h5>
									<p class="card-text card-desc">Thailand is the
										travel hub of southeast Asia. Most people coming in to the region fly in to
										Bangkok</p>
									<span class="card-pin-1">Travel</span>
									<span class="card-pin-2">USA</span>
								</div>
							</div>
						</div>
						<div class="col-4 card-details">
							<div class="card w-100">
								<?php $my_static_banner = path_to_theme() . '../image/card03.png';?>
								<img class="card-img-top" src="<?php print $my_static_banner ?>" alt="Card image cap">
								<div class="card-body" style="padding:25px;">
									<div class="travel-dates">
										<i class="fa fa-calendar"></i>
										<span class="travel-days">2 days ago</span>
										<span style=" opacity: 0.5;">.</span>
										<span class="travel-days">by Michael Ford</span>
									</div>

									<h5 class="card-title title-style">Thailand Travel Tips
									</h5>
									<p class="card-text card-desc">Thailand is the
										travel hub of southeast Asia. Most people coming in to the region fly in to
										Bangkok</p>
									<span class="card-pin-1">Travel</span>
									<span class="card-pin-2">USA</span>
								</div>
							</div>
						</div>
					</div>
					<div class="view-more-offers">
						<button type="button" class="btn btn-primary showAlert">View
							All News</button>
					</div>
				</div>

			</div>
			<!--Vacay-details-->
			<div class="row footer">
				<div class="col">
					<div class="row vacay-details">
						<div class="w-100 h-100" style="position: relative">
							<?php $my_static_banner = path_to_theme() . '../image/Sunset.png';?>
							<img src="<?php print $my_static_banner ?>" class="w-100 h-100" style="filter: contrast(0.5);">
							<div class="text-overlay">
								<h3>Get inspired for</h3>
								<h1>Your Next Summer Vacation
								</h1>
								<button type="button" class="btn btn-primary showAlert">Read
									More</button>
							</div>
						</div>
					</div>
					<div class="row footer-details">
						<div class="w-100 footer-logo">
							<?php $my_static_banner = path_to_theme() . '../image/Logo.png';?>
							<img src="<?php print $my_static_banner ?>">
						</div>
						<p class="w-100">© 2016 All Rights Reserved Terms of
							Use and Privacy Policy</p>
					</div>
				</div>
			</div>
		</div>
	</div>