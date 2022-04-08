<?php  

// investigar https://www.codexworld.com/bootstrap-modal-dynamic-content-jquery-ajax-php-mysql/
if (mysqli_num_rows($resultado) > 0) {
	while ($row =  mysqli_fetch_array($resultado)) {
?>
		<div class="col-lg-4 col-md-6 col-sm-12 p-1 item-card-outer">
			<div class="p-3 item-card-inner" id="list-border">
				<div class="mt-1 my-1 card-img">
					<img src="img/house7.webp" alt="">
				</div>

				<div class="card-details">
					<div class="location-name">
						<h5><?php  echo $row["name"]; ?>, <?php echo $row["id"]; ?></h5>
						<p><?php  echo $row["location_name"];?></p>
						<hr class="w-75 mx-auto">
					</div>
					<div class="row details">
						<div class="col-4 detail-item" id="list-border">
							<p><i class="fas fa-bed"></i> <?php echo $row["rooms"]; ?></p>
						</div>

						<div class="col-4 detail-item" id="list-border">
							<p><i class="fas fa-bath"></i> <?php echo $row["baths"]; ?></p>
						</div>

						<div class="col-4 detail-item" id="list-border">
							<p><i class="fas fa-car"></i> <?php echo $row["parking"]; ?></p>
						</div>
					</div>	
				</div>

				<div class="card-description text-justify">
					<p> <?php echo $row["description"]; ?></p>
				</div>
				
				<button type="button" data-id="<?php echo $row['id']; ?>" class="boton btn btn-primary" data-bs-toggle="modal" data-bs-target="#listing_modal">Show More</button>
				
			</div>
		</div>
<?php  
		};
	};
?>