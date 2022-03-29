<?php echo 
'<!-- CAROUSEL -->	
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>

  		<div class="carousel-inner" id="carousel-home">
    		<div class="carousel-item active">
      			<img class="" src="img/city.webp" alt="First slide">
      			<div class="carousel-caption">
    				<h5>Dreamland Properties CR</h5>
    				<p>Your best choice to find your dreamhouse</p>
  				</div>
    		</div>
    		<div class="carousel-item">
      			<img class="" src="img/house7.webp" alt="Second slide">
      			<div class="carousel-caption">
    				<h5>Contact us!</h5>
    				<p>Meet our best realtor.</p>
  				</div>
    		</div>
    		<div class="carousel-item">
      			<img class="" src="img/tour.webp" alt="Third slide">
      			<div class="carousel-caption">
    				<h5>Explore Costa Ricas natural paradise</h5>
    				<p>One with the nature</p>
  				</div>
    		</div>
  		</div>

  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
	</div>

	<!-- INTRODUCTION -->	
	<section class="w-75 mx-auto text-center pt-5" id="intro">
		<h1 class="p-3 border-top border-3"><span id="mission_cap">Dreamland Properties CR</span> is a real estate company compromised with helping our clients to find exactly what they need.</h1>
		<p class="p-3">City, jungle, beach properties. You say it and we will make it happen. Good service and a smile is our slogan!</p>
	</section>

	<!-- OBJETIVES -->	
	<section class="container py-4">
		<div class="row">
			<div class="col-md text-center mx-2 pt-5 pb-2 services-show">
				<img loading="lazy" src="img/realtor.webp" alt="realtor" width="180" height="180">
				<h3>Best Treatment</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolorum accusantium expedita voluptate optio qui velit.</p>
			</div>

			<div class="col-md text-center mx-2 pt-5 pb-2 services-show">
				<img loading="lazy" src="img/realestate.webp" alt="realtor" width="180" height="180">
				<h3>You ask it, we find it for you</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolorum accusantium expedita voluptate optio qui velit.</p>
			</div>

			<div class="col-md text-center mx-2 pt-5 pb-2 services-show">
				<img loading="lazy" src="img/touricon.svg" alt="realtor" width="180" height="180">
				<h3>Tour Services</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolorum accusantium expedita voluptate optio qui velit.</p>
			</div>
		</div>
	</section>

	<!-- PARALLAX SEPARATOR --> 
  	<section class="para mt-5">
    	<div class="parallax-sep"></div>
  	</section>

	<!-- PREVIEW PROPERTIES -->
	<section class="container py-5">
		<div class="w-75 m-auto text-center" id="preview_props">
			<h1 class="pb-5 border-top fs-2 border-3">Properties in <span class="CR">Costa Rica</span></h1>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti nemo, ipsa aliquam aliquid reiciendis modi iure doloribus repellat debitis earum voluptatum molestias obcaecati illum! Iure possimus quas harum esse laborum.</p>
		</div>
		<div class="mt-5 text-center">
			<img loading="lazy" class="img-fluid" src="img/house1.webp" alt="house">
		</div>
	</section>	

	<!-- PROPERTY SECTION SLIDER -->
	<section id="property-section">
		<div class="prop-slider container">
			<h6 class="h6 color-primary m-0">Recent</h6>
			<h1 class="h1 h1-responsive mb-4">Recently Added Properties</h1>
			<div class="text-right">
				<a href="property-list.php">Find More Project <i class="fas fa-long-arrow-alt-right"></i></a>
			</div>

			<div id="property-slider">
				<!-- Slider main container -->
				<div class="swiper swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="property-list">
								<div class="image">
									<img loading="lazy" src="img/house1.webp" alt="">
								</div>
								<div class="text-right">
									<h4 class="h5">$15.000</h4>
								</div>
								<div class="d-flex justify-content-between mb-4">
									<div class="item">
										<h4 class="h5 m-0">Santa Ana City</h4>
										<p class="m-0">San José</p>
									</div>

									<div class="item d-flex align-self-center">
										<i class="fas fa-bed mr-2 align-self-center"></i>
										<span class="mr-1">5</span>
										<i class="fas fa-toilet mr-2 align-self-center"></i>
										<span class="mr-1">2</span>
									</div>
								</div>

								<button type="button" class="btn btn-primary">Preview</button>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="property-list">
								<div class="image">
									<img loading="lazy" src="img/house7.webp" alt="">
								</div>
								<div class="text-right">
									<h4 class="h5">$15.000</h4>
								</div>
								<div class="d-flex justify-content-between mb-4">
									<div class="item">
										<h4 class="h5 m-0">Santa Ana City</h4>
										<p class="m-0">San José</p>
									</div>

									<div class="item d-flex align-self-center">
										<i class="fas fa-bed mr-2 align-self-center"></i>
										<span class="mr-1">5</span>
										<i class="fas fa-toilet mr-2 align-self-center"></i>
										<span class="mr-1">2</span>
									</div>
								</div>

								<button type="button" class="btn btn-primary">Preview</button>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="property-list">
								<div class="image">
									<img loading="lazy" src="img/house3.webp" alt="">
								</div>
								<div class="text-right">
									<h4 class="h5">$15.000</h4>
								</div>
								<div class="d-flex justify-content-between mb-4">
									<div class="item">
										<h4 class="h5 m-0">Santa Ana City</h4>
										<p class="m-0">San José</p>
									</div>

									<div class="item d-flex align-self-center">
										<i class="fas fa-bed mr-2 align-self-center"></i>
										<span class="mr-1">5</span>
										<i class="fas fa-toilet mr-2 align-self-center"></i>
										<span class="mr-1">2</span>
									</div>
								</div>

								<button type="button" class="btn btn-primary">Preview</button>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="property-list">
								<div class="image">
									<img loading="lazy" src="img/house4.webp" alt="">
								</div>
								<div class="text-right">
									<h4 class="h5">$15.000</h4>
								</div>
								<div class="d-flex justify-content-between mb-4">
									<div class="item">
										<h4 class="h5 m-0">Santa Ana City</h4>
										<p class="m-0">San José</p>
									</div>

									<div class="item d-flex align-self-center">
										<i class="fas fa-bed mr-2 align-self-center"></i>
										<span class="mr-1">5</span>
										<i class="fas fa-toilet mr-2 align-self-center"></i>
										<span class="mr-1">2</span>
									</div>
								</div>

								<button type="button" class="btn btn-primary">Preview</button>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="property-list">
								<div class="image">
									<img loading="lazy" src="img/house5.webp" alt="">
								</div>
								<div class="text-right">
									<h4 class="h5">$15.000</h4>
								</div>
								<div class="d-flex justify-content-between mb-4">
									<div class="item">
										<h4 class="h5 m-0">Santa Ana City</h4>
										<p class="m-0">San José</p>
									</div>

									<div class="item d-flex align-self-center">
										<i class="fas fa-bed mr-2 align-self-center"></i>
										<span class="mr-1">5</span>
										<i class="fas fa-toilet mr-2 align-self-center"></i>
										<span class="mr-1">2</span>
									</div>
								</div>

								<button type="button" class="btn btn-primary">Preview</button>
							</div>
						</div>

						<div class="swiper-slide">
							<div class="property-list">
								<div class="image">
									<img loading="lazy" src="img/house6.webp" alt="">
								</div>
								<div class="text-right">
									<h4 class="h5">$15.000</h4>
								</div>
								<div class="d-flex justify-content-between mb-4">
									<div class="item">
										<h4 class="h5 m-0">Santa Ana City</h4>
										<p class="m-0">San José</p>
									</div>

									<div class="item d-flex align-self-center">
										<i class="fas fa-bed mr-2 align-self-center"></i>
										<span class="mr-1">5</span>
										<i class="fas fa-toilet mr-2 align-self-center"></i>
										<span class="mr-1">2</span>
									</div>
								</div>

								<button type="button" class="btn btn-primary">Preview</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>' 
?>