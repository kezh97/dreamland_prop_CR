<?php 
	include 'header.php';
 ?>
<!-- CAROUSEL -->	
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner" id="carousel-home">
    		<div class="carousel-item active" id="carousel_item_home">
      			<img class="" src="img/city.webp" alt="First slide">
      			<div class="carousel-caption home-caption">
    				<h5>The Dreamland CR</h5>
    				<p>Making it real for you</p>
  				</div>
    		</div>
    		<div class="carousel-item" id="carousel_item_home">
      			<img class="" src="img/house7.webp" alt="Second slide">
      			<div class="carousel-caption home-caption">
    				<h5>Contact us!</h5>
    				<p>Your best choice to find your dreamhouse</p>
  				</div>
    		</div>
    		<div class="carousel-item" id="carousel_item_home">
      			<img class="" src="img/tour.webp" alt="Third slide">
      			<div class="carousel-caption home-caption">
    				<h5>Explore Costa Rica's natural paradise</h5>
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
	<section class="w-75 mx-auto text-center pt-5" id="intro" data-aos="fade-up">
		<h1 class="p-3 border-top border-3"><span id="mission_cap">Dreamland Properties CR</span> is a real estate company compromised with helping our clients to find exactly what they need.</h1>
		<p class="p-3">City, jungle, beach properties. You say it and we will make it happen. Good service and a smile is our slogan!</p>
	</section>
	
	<!-- OBJETIVES -->	
	<section class="container py-4" data-aos="fade-up">
		<div class="row">
			<div class="col-md text-center pt-5 pb-2 services-show">
				<img class="rounded-circle" loading="lazy" src="img/city.webp" alt="realtor" width="230" height="230">
				<h3 class="mt-4">Friendly Treatment</h3>
				<p>We are compromised to give the best treat to our clients.</p>
			</div>
			<div class="col-md text-center pt-5 pb-2 services-show">
				<img class="rounded-circle" loading="lazy" src="img/house7.webp" alt="realtor" width="230" height="230">
				<h3 class="mt-4">You ask it, we find it for you</h3>
				<p>Your dreamhouse at the reach of your hands.</p>
			</div>
			<div class="col-md text-center pt-5 pb-2 services-show">
				<img class="rounded-circle" loading="lazy" src="img/beach2.webp" alt="realtor" width="230" height="230">
				<h3 class="mt-4">Tour Services</h3>
				<p>Explore and experience the best of Costa Rica's flora and fauna.</p>
			</div>
		</div>
	</section>

	<!-- PARALLAX SEPARATOR --> 
  	<section class="mt-5">
    	<div class="parallax-sep"></div>
  	</section>

	<!-- ABOUT DREAMLAND -->
	<section class="container py-5">
		<div class="w-75 m-auto text-center" id="about_dreamland">
			<h1 class="text-uppercase pt-4 pb-5 border-top border-3"> >> About The Dreamland CR Team <<</h1>
			<p class="h4">The Dreamland CR crew are a small group of collaborators who are in charge of offering services for sale of properties and tours packs all around in Costa Rica. We are compromised to give the best treatment to all ours affiliated.</p>
		</div>

		<div class="row text-center pt-5" id="dreamland-crew">
			<div class="col-sm-12 col-md-6 crew-box" data-aos="fade-right">
				<img src="img/nature1.webp" alt="">
			</div>

			<div class="col-sm-12 col-md-6 crew-box pt-5" data-aos="fade-left">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eum saepe architecto nobis, voluptatibus corporis corrupti ratione facere totam repudiandae atque enim distinctio dicta, magnam veniam. Minima, atque. Expedita, maiores.</p>
			</div>
			<div class="col-sm-12 col-md-6 crew-box pt-5" data-aos="fade-right">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eum saepe architecto nobis, voluptatibus corporis corrupti ratione facere totam repudiandae atque enim distinctio dicta, magnam veniam. Minima, atque. Expedita, maiores.</p>
			</div>

			<div class="col-sm-12 col-md-6 crew-box" data-aos="fade-left">
				<img src="img/nature6.webp" alt="">
			</div>
		</div>

	</section>
<?php
	include 'comp_swiper.php'; 
	include 'footer.php';
?>
