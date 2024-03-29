<?php 

include 'header.php';

?>
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

<?php 
include 'footer.php';
?>
	
