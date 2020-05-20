@extends('layouts.client.master')
@section('title', 'Trang chủ')
@section('content')
<!-- MATCH FACTS --> 
	<div class="section stat-facts">
		<div class="bg-overlay">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1">
						<div class="row">
							
							<div class="col-sm-4 col-md-4">
								<div class="match-club">
									<img src="{{asset('assets/images/club-fc-1.png')}}" alt="" />
									<div class="club-name">PROSOCCER</div>
								</div>
							</div>
							
							<div class="col-sm-4 col-md-4">
								<div class="match-description">
									<div class="liga-name">LIGA PREMIERE</div>
									<div class="liga-date">JUNE 16, 17:00</div>
									<div class="liga-vs">VS</div>
									<div class="liga-location">STADION JAKABARING<br />PEKANBARU</div>
								</div>
							</div>
							
							<div class="col-sm-4 col-md-4">
								<div class="match-club">
									<img src="{{asset('assets/images/club-fc-2.png')}}" alt="" />
									<div class="club-name">JUPENTUS</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- ABOUT SECTION -->
	<div class="section about">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">ABOUT FC</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 col-md-4">
					<div id="shop-caro" class="owl-carousel owl-theme">
						<div class="item shop-item">
							<div class="img">
								<img src="{{asset('assets/images/shop-item-1.jpg')}}"
 alt="" class="img-responsive" />
							</div>
							<div class="description">
								<div class="collection-name">
									<strong>NEW</strong> COLLECTIONS
									<div class="category">T-shirts</div>
								</div>
								<div class="collection-callout">
									<a href="#" title=""><span class="fa fa-facebook"></span>SHOP NOW</a>
								</div>
							</div>
						</div>
						<div class="item shop-item">
							<div class="img">
								<img src="{{asset('assets/images/shop-item-2.jpg')}}"
 alt="" class="img-responsive" />
							</div>
							<div class="description">
								<div class="collection-name">
									<strong>NEW</strong> COLLECTIONS
									<div class="category">Pin</div>
								</div>
								<div class="collection-callout">
									<a href="#" title=""><span class="fa fa-facebook"></span>SHOP NOW</a>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="col-sm-12 col-md-8">
					
					  <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
						<ul id="myTabs" class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#match" id="match-tab" role="tab" data-toggle="tab" aria-controls="match" aria-expanded="true">NEXT MATCH</a></li>
							<li><a href="#training" role="tab" id="training-tab" data-toggle="tab" aria-controls="training">TRAINING SCHEDULE</a></li>
							<li><a href="#league" role="tab" id="league-tab" data-toggle="tab" aria-controls="league">LEAGUE TABLE</a></li>
						</ul>
						<div id="myTabContent" class="tab-content tab-content-bg">
							<div role="tabpanel" class="tab-pane fade in active" id="match" aria-labelledBy="match-tab">
								<div class="table-responsive">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="tw40"><div class="match-date">01 Juni 19:00</div></td>
												<td><div class="match-title text-right">Jupentus</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title color-red">Pro Soccer</div></td>
											</tr>
											<tr>
												<td><div class="match-date">06 Juni 19:00</div></td>
												<td><div class="match-title color-red text-right">Pro Soccer</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">Viorentina</div></td>
											</tr>
											<tr>
												<td><div class="match-date">12 Juni 19:00</div></td>
												<td><div class="match-title color-red text-right">Pro Soccer</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">ACE Milan</div></td>
											</tr>
											<tr>
												<td><div class="match-date">16 Juni 19:00</div></td>
												<td><div class="match-title text-right">Atlantas</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title color-red">Pro Soccer</div></td>
											</tr>
											<tr>
												<td><div class="match-date">21 Juni 19:00</div></td>
												<td><div class="match-title color-red text-right">Pro Soccer</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">Navoli</div></td>
											</tr>
											<tr>
												<td><div class="match-date">25 Juni 19:00</div></td>
												<td><div class="match-title color-red text-right">Pro Soccer</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">Gemoa</div></td>
											</tr>
											<tr>
												<td><div class="match-date">30 Juni 19:00</div></td>
												<td><div class="match-title color-red text-right">Pro Soccer</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">Samdorio</div></td>
											</tr>
										</tbody>
									</table>
								
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="training" aria-labelledBy="training-tab">
								<div class="table-responsive">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="tw40"><div class="match-date">Sunday 07:00 - 10:00</div></td>
												<td><div class="match-title">Workout</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Sunday 14:00 - 18:00</div></td>
												<td><div class="match-title">Training Penalty Kick</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Monday 07:00 - 10:00</div></td>
												<td><div class="match-title">Aerobic</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Monday 14:00 - 18:00</div></td>
												<td><div class="match-title">Training Free Kick</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Wednesday 07:00 - 18:00</div></td>
												<td><div class="match-title">Swimming</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Friday 14:00 - 18:00</div></td>
												<td><div class="match-title">Training Strategy</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Friday 15:00 - 17:00</div></td>
												<td><div class="match-title">Match Team 1 vs Team 2</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="league" aria-labelledBy="league-tab">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<td class="tw50">TEAM</td>
												<td class="tw10">W</td>
												<td class="tw10">D</td>
												<td class="tw10">L</td>
												<td>POINT</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><div class="match-title">1. Jupentus</div></td>
												<td>4</td>
												<td>0</td>
												<td>1</td>
												<td><div class="match-title">12</div></td>
											</tr>
											<tr>
												<td><div class="match-title color-red">2. Pro Soccer</div></td>
												<td>3</td>
												<td>1</td>
												<td>1</td>
												<td><div class="match-title">10</div></td>
											</tr>
											<tr>
												<td><div class="match-title">3. Atalantas</div></td>
												<td>2</td>
												<td>2</td>
												<td>2</td>
												<td><div class="match-title">8</div></td>
											</tr>
											<tr>
												<td><div class="match-title">4. ACE Milan</div></td>
												<td>2</td>
												<td>1</td>
												<td>3</td>
												<td><div class="match-title">7</div></td>
											</tr>
											<tr>
												<td><div class="match-title">19. AES Roma</div></td>
												<td>0</td>
												<td>1</td>
												<td>6</td>
												<td><div class="match-title">1</div></td>
											</tr>
											<tr>
												<td><div class="match-title">20. Navoli</div></td>
												<td>0</td>
												<td>1</td>
												<td>8</td>
												<td><div class="match-title">0</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						  
						</div>
					  </div><!-- /example -->
					
				</div>
				
				
			</div>
		</div>
	</div>
	
	
	<!-- VIDEO SECTION -->
	<div class="section video bg-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">LATEST VIDEO</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/8F5V7RkZDbw"></iframe>
					</div>

				</div>
				
			</div>
			
		</div>
	</div>

	
	<!-- OUR PLAYER SECTION -->
	<div class="section player" >
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">OUR PLAYER</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div id="player-caro" class="owl-carousel owl-theme">
				
					<div class="item player-item">
						<div class="gambar">
							<img src="{{asset('assets/images/player-1.jpg')}}"
 alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								CHRISTIAN RONALDOEL
							</div>
							<div class="position">
								<span class="cf">CF</span> Forwarder
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="{{asset('assets/images/player-2.jpg')}}"
 alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								GUILUGI BUTTON
							</div>
							<div class="position">
								<span class="gk">GK</span> Goal Keeper
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="{{asset('assets/images/player-3.jpg')}}"
 alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								ALEXANDRO NISTA
							</div>
							<div class="position">
								<span class="cb">CB</span> Center Back
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="{{asset('assets/images/player-4.jpg')}}"
 alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								DAVID BECKMAN
							</div>
							<div class="position">
								<span class="rmf">RMF</span> Right Middle Forward
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="{{asset('assets/images/player-5.jpg')}}"
 alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								CHRISTIAN RONALDOEL
							</div>
							<div class="position">
								<span class="cf">CF</span> Forwarder
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="{{asset('assets/images/player-2.jpg')}}"
 alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								GUILUGI BUTTON
							</div>
							<div class="position">
								<span class="gk">GK</span> Goal Keeper
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="{{asset('assets/images/player-3.jpg')}}"
 alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								ALEXANDRO NISTA
							</div>
							<div class="position">
								<span class="cb">CB</span> Center Back
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="{{asset('assets/images/player-4.jpg')}}"
 alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								DAVID BECKMAN
							</div>
							<div class="position">
								<span class="rmf">RMF</span> Right Middle Forward
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="player-pagination pagination">
				
				<a href="team.html" title="">View Team</a>
			</div>
			
		</div>
	</div>

	
	<!-- GALLERY SECTION -->
	<div class="section gallery bg-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">GALLERY</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			<div class="row popup-gallery">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/gallery-1.jpg" title="Gallery #1">
							<img src="{{asset('assets/images/gallery-1.jpg')}}"
 alt="" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/gallery-2.jpg" title="Gallery #2">
							<img src="{{asset('assets/images/gallery-2.jpg')}}"
 alt="" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/gallery-3.jpg" title="Gallery #3">
							<img src="{{asset('assets/images/gallery-3.jpg')}}"
 alt="" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/gallery-4.jpg" title="Gallery #4">
							<img src="{{asset('assets/images/gallery-4.jpg')}}"
 alt="" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/gallery-5.jpg" title="Gallery #5">
							<img src="{{asset('assets/images/gallery-5.jpg')}}"
 alt="" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/gallery-6.jpg" title="Gallery #6">
							<img src="{{asset('assets/images/gallery-6.jpg')}}"
 alt="" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/gallery-7.jpg" title="Gallery #1">
							<img src="{{asset('assets/images/gallery-7.jpg')}}"
 alt="" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/gallery-8.jpg" title="Gallery #1">
							<img src="{{asset('assets/images/gallery-8.jpg')}}"
 alt="" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				
			</div>
			
			<div class="loadmore">
				<a href="#" title="">See More</a>
			</div>
			
		</div>
	</div>

	 
	<!-- BLOG/NEWS SECTION -->
	<div class="section blog">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-md-offset-3">
					<div class="page-title">
						<h2 class="lead">LATEST NEWS</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="date">
								May 29, 2015
							</div>
							<img src="{{asset('assets/images/blog-img-1.jpg')}}"
 alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="news-single.html" title="">We give you good documentation to make easy to understand about this templates and the features.</a>
								</p>
								<a href="news-single.html" title="" class="readmore">Read More</a>
								
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="date">
								May 29, 2015
							</div>
							<img src="{{asset('assets/images/blog-img-2.jpg')}}"
 alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="news-single.html" title="">We give you good documentation to make easy to understand about this templates and the features.</a>
								</p>
								<a href="news-single.html" title="" class="readmore">Read More</a>
								
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="date">
								May 29, 2015
							</div>
							<img src="{{asset('assets/images/blog-img-3.jpg')}}"
 alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="news-single.html" title="">We give you good documentation to make easy to understand about this templates and the features.</a>
								</p>
								<a href="news-single.html" title="" class="readmore">Read More</a>
								
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="loadmore">
					<a href="#" title="">Load More</a>
				</div>
				
			</div>
		</div>
	</div>
	
	
	<!-- CLIENT SECTION --> 
	<div class="section stat-client p-main bg-client">
		<div class="container">
			<div class="row">
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="{{asset('assets/images/client1.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="{{asset('assets/images/client2.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="{{asset('assets/images/client3.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="{{asset('assets/images/client4.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="{{asset('assets/images/client5.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="{{asset('assets/images/client6.png')}}" alt="" class="img-responsive" />
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
@stop