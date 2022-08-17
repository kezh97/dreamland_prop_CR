<?php 
include 'header.php'; 
?>

<!-- LIST AREA -->
<section id="listing-property-section">
	<div class="container-fluid py-5 px-4 text-center w-90">
		<div class="listing-title pt-2 pb-5">
			<p class="h1">Lists of properties</p>
			<hr class="w-75 mx-auto">
		</div>
		
		<div class="listing row text-center">
			<?php include 'comp_prop_list.php'; ?>
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
