<?php 

include 'header.php';

?>
<section>
	<div class="container">
		<div class="tour-about py-5" id="sect-intro">
			<p class="h1 text-uppercase text-center"> >> about Dreamland Tours << </p>
			<p class="h4 text-justify py-3">Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Praesentium quia illo est ipsa, dignissimos a quidem esse ratione autem dolor fuga pariatur dicta excepturi, dolore, non totam asperiores minima cum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, cumque, earum, voluptates sit debitis officiis dolores iste similique molestias dolore esse accusantium, perspiciatis nostrum nihil assumenda. Nostrum ea numquam similique.</p>
		</div>
	</div>
</section>

<section class="tours-packs">
	<div class="container-fluid py-5 px-4 text-center w-90">

		<div class="listing-title pt-2 pb-5">
			<p class="h1">Lists of Tour Packs</p>
			<hr class="w-75 mx-auto">
		</div>

		<div class="row tours-packs-list">

			<div class="outer-tours-packs-card col-lg-4 col-md-6 p-2">
				<div class="tours-packs-card card">
					<img src="img/nature1.webp" class="card-img-top" alt="...">
	  				<div class="card-body">
	    				<h5 class="card-title">Tour Pack: 1</h5>
	    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    				<button type="button" data-id="1" class="boton_tour btn btn-primary" data-bs-toggle="modal" data-bs-target="#tour_modal">Show More</button>	
	  				</div>
	  			</div>
			</div>

			<div class="outer-tours-packs-card col-lg-4 col-md-6 p-2">
				<div class="tours-packs-card card">
					<img src="img/nature2.webp" class="card-img-top" alt="...">
	  				<div class="card-body">
	    				<h5 class="card-title">Tour Pack: 2</h5>
	    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    				<button type="button" data-id="<?php echo $row['tour_id']; ?>" class="boton_tour btn btn-primary" data-bs-toggle="modal" data-bs-target="#tour_modal">Show More</button>	
	  				</div>
	  			</div>
			</div>

			<div class="outer-tours-packs-card col-lg-4 col-md-6 p-2">
				<div class="tours-packs-card card">
					<img src="img/nature3.webp" class="card-img-top" alt="...">
	  				<div class="card-body">
	    				<h5 class="card-title">Tour Pack: 3</h5>
	    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    				<button type="button" data-id="<?php echo $row['tour_id']; ?>" class="boton_tour btn btn-primary" data-bs-toggle="modal" data-bs-target="#tour_modal">Show More</button>	
	  				</div>
	  			</div>
			</div>

			<div class="outer-tours-packs-card col-lg-4 col-md-6 p-2">
				<div class="tours-packs-card card">
					<img src="img/nature4.webp" class="card-img-top" alt="...">
	  				<div class="card-body">
	    				<h5 class="card-title">Tour Pack: 4</h5>
	    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    				<button type="button" data-id="<?php echo $row['tour_id']; ?>" class="boton_tour btn btn-primary" data-bs-toggle="modal" data-bs-target="#tour_modal">Show More</button>	
	  				</div>
	  			</div>
			</div>

		</div>
	</div>
</section>

<section id="tours-modal">
	<div class="modal fade" id="tour_modal" tabindex="-1" aria-labelledby="listing-name-label" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
	    	<div class="modal-content"></div>
		</div>
	</div>	
</section>

<!-- PARALLAX SEPARATOR --> 


<section class="container gallery py-5">
	<div class="gallery-intro text-center">
		<h1>Some of our tours</h1>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius officiis, ipsum earum? Sapiente, sequi? Consequatur consequuntur, sunt maxime ea eaque perspiciatis!</p>
	</div>

	<div class="row">
		<div class="col-md-4 p-1 gallery-item">
			<img loading="lazy" src="img/nature1.webp" alt="">
		</div>

		<div class="col-md-4 p-1 gallery-item">
			<img loading="lazy" src="img/nature2.webp" alt="">
		</div>

		<div class="col-md-4 p-1 gallery-item">
			<img loading="lazy" src="img/nature3.webp" alt="">
		</div>

		<div class="col-md-4 p-1 gallery-item">
			<img loading="lazy" src="img/nature4.webp" alt="">
		</div>

		<div class="col-md-4 p-1 gallery-item">
			<img loading="lazy" src="img/nature5.webp" alt="">
		</div>

		<div class="col-md-4 p-1 gallery-item">
			<img loading="lazy" src="img/nature6.webp" alt="">
		</div>


	</div>
</section>
<?php 
include 'footer.php';
?>
	