<?php 
include 'connection.php';
include 'header.php'; 

//LINK CONFIRMATION
if (!$conn) {
	echo '<script> console.log("Error al conectar a la base de datos.")</script>';
} else{
	echo '<script> console.log("Base de datos conectada.")</script>';
}

?>

<section>
	<div class="container">
		<div class="list_prop-about py-5" id="sect-intro">
			<p class="h1 text-uppercase text-center"> >> about Dreamland Properties << </p>
			<p class="h4 text-justify py-3">Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Praesentium quia illo est ipsa, dignissimos a quidem esse ratione autem dolor fuga pariatur dicta excepturi, dolore, non totam asperiores minima cum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, cumque, earum, voluptates sit debitis officiis dolores iste similique molestias dolore esse accusantium, perspiciatis nostrum nihil assumenda. Nostrum ea numquam similique.</p>
		</div>
	</div>
</section>

<!-- LIST AREA -->
<section id="listing-property-section">
	<div class="container-fluid py-5 px-4 text-center">
		<div class="listing-title pt-2 pb-5">
			<p class="h1">Lista de propiedades</p>
			<hr class="w-75 mx-auto">
		</div>
		
		<div class="listing row text-center">
			<?php include 'card.php'; ?>
		</div>
	</div>
</section>

<section id="property-modal">
	<div class="modal fade" id="listing_modal" tabindex="-1" aria-labelledby="listing-name-label" aria-hidden="true">
	  	<div class="modal-dialog modal-xl">
	    	<div class="modal-content"></div>
		</div>
	</div>	
</section>

<?php

include 'footer.php';
?>
