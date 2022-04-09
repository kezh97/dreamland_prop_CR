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
		<div class="container py-5 text-center">
			<div class="listing-title pt-2 pb-5">
				<p class="h1">Lista de propiedades</p>
				<hr>
			</div>
			
			<div class="listing row text-center">
				<?php include 'outer-card.php' ?>		
			</div>
		</div>
	</section>

	<section id="property-modal">
		<div class="modal fade" id="listing_modal" tabindex="-1" aria-labelledby="listing-name-label" aria-hidden="true">
		  	<div class="modal-dialog modal-xl">
		    	<div class="modal-content">
			      	<div class="modal-header">
			        	<h4 class="modal-title" id="listing-name-label"><?php echo $row["id"]; ?></h4>
			        	<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
			      	</div>


			      	<div class="modal-body" id="listing-modal-body">
			      			
		      		</div>

			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			      	</div> 	
			    </div>
			</div>
		</div>	
	</section>



<?php

include 'footer.php';
?>
