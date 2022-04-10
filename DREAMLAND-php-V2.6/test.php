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

<!-- LIST AREA -->
	<section id="listing-property-section">
		<div class="container-fluid py-5 px-4 text-center">
			<div class="listing-title pt-2 pb-5">
				<p class="h1">Lista de propiedades</p>
				<hr>
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
