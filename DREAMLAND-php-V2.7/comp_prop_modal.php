<?php 
include 'comp_connection.php';

$id = $_POST['prop_id'];
$query_join = "SELECT s1.property_id, s1.name, s1.location_name, s1.rooms, s1.baths, s1.description, s1.price, s1.parking, s1.google_maps_location, s2.img_path FROM `property` AS s1 JOIN img_repository AS s2 on s1.property_id = s2.property_id WHERE s1.property_id =".$id;
$result_query_by_id = mysqli_query($conn, $query_join);

while ($row = mysqli_fetch_array($result_query_by_id)) {
	?>

	<div class="modal-header">
		<h4 class="modal-title" id="listing-name-label">DLCR-<?php echo $row["property_id"].': '. $row["name"] . ', '. $row["location_name"]; ?></h4>
		<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
	</div>

	<div class="modal-body" id="listing-modal-body">
	 	<div class="modal-carousel">
			<div id="carousel-ind" class="carousel slide" data-ride="carousel">
			  	<ol class="carousel-indicators">
			  	<?php 
			  	$cont = 0;
			  	foreach ($result_query_by_id as $row) {
			  		$act = '';
			  		if ($cont == 0) {
			  			$act = 'active';
			  		}
			  		?>
			    	<li data-target="#carousel-ind" data-slide-to="<?= $cont; ?>" class="<?= $act; ?>"></li>
			    <?php $cont++; } ?>
			  	</ol>

			  	<div class="carousel-inner" >
			  	<?php 
			  	$cont = 0;
			  	foreach ($result_query_by_id as $row) {
			  		$act = '';
			  		if ($cont == 0) {
			  			$act = 'active';
			  		}	
			  	?>
					<div class="carousel-item list-carousel <?= $act ?>">
			      		<img src="<?= $row['img_path']  ?>" class="w-100 h-100" alt="">
			    	</div>	
			    <?php $cont++; } ?>
			  	</div>
			  	<a class="carousel-control-prev" href="#carousel-ind" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carousel-ind" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
		</div>

		<div class="row py-5 px-3">
			<div class="modal-description text-center col-lg-6 ">
				
					<h3>General description</h3>
					<p class="text-justify">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Id eaque dolorum ipsum aspernatur, asperiores dolores officia nisi cupiditate, voluptatibus excepturi quia ut velit. Sint libero labore ipsam neque incidunt ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint repellat corrupti, ex nesciunt omnis impedit commodi quibusdam sunt laborum, vitae voluptates. Sed voluptas, aut dolorem repellat deserunt! Ea, modi maiores?</p>
				
			</div>

			<div class="modal-overview col-lg-6">
			
				<h4 class="h4 ">Overview</h4>
				<hr>
				<div class="">
						<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-hashtag"></i> ID: DLCR-<?php  echo $row["property_id"]; ?>
		    			</div>

		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-comments-dollar"></i> $<?php  echo $row["price"]; ?>
		    			</div>
		    			
		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-bed"></i> <?php  echo $row["rooms"]; ?> Rooms
		    			</div>
		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-bath"></i> <?php  echo $row["baths"]; ?> Baths
		    			</div>
		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-car"></i> <?php  echo $row["parking"]; ?> Parking Lots
		    			</div>
				</div>
			
			</div>
		</div>

		<div class="modal-table pt-3">
			<div class="container">
				<h4 class="h4 color-primary m-0">Features</h4>
				<hr>
				<div class="row">
					<div class="col-5">
					<p class="fs-6"><i class="fas fa-caret-right"></i> Espaciosa</p>
					<p class="fs-6"><i class="fas fa-caret-right"></i> Céntrico</p>
					<p class="fs-6"><i class="fas fa-caret-right"></i> Eco-friendly</p>
					<p class="fs-6"><i class="fas fa-caret-right"></i> Pocos vecinos</p>
					<p class="fs-6"><i class="fas fa-caret-right"></i> Vecindario seguro</p>
				</div>

				<div class="col-5">
					<p class="fs-6"><i class="fas fa-caret-right"></i> Espaciosa</p>
					<p class="fs-6"><i class="fas fa-caret-right"></i> Céntrico</p>
					<p class="fs-6"><i class="fas fa-caret-right"></i> Eco-friendly</p>
					<p class="fs-6"><i class="fas fa-caret-right"></i> Parque para níños</p>
					<p class="fs-6"><i class="fas fa-caret-right"></i> Condominio</p>
				</div>
				</div>
				
			</div>
		</div>

		<div class="modal-multimedia pt-3">
			<div class="container">
				<h4 class="h4 color-primary m-0">Video Tour</h4>
				<hr>
				<iframe width="100%" height="600px" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="modal-map pt-3">
			<div class="container">
				<h4 class="h4 color-primary m-0">Location</h4>
				<hr>
				<iframe src="<?php  echo $row["google_maps_location"]; ?>" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>

	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	</div>
<?php			        	
 }
 ?>