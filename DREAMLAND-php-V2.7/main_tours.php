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
			<?php  include 'comp_tours_list.php'; ?>
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
	
