<?php  
include 'comp_connection.php';

//REQUEST
$query_join = "SELECT s1.property_id, s1.name, s1.location_name, s1.rooms, s1.baths, s1.description, s1.price, s1.parking, s2.img_path FROM `property` AS s1 JOIN img_repository AS s2 on s1.property_id = s2.property_id WHERE img_repo_id = 1";
$result_general = $conn -> query($query_join);

if (mysqli_num_rows($result_general) > 0) {
	while ($row =  mysqli_fetch_array($result_general)) {
?>
		<div class="outer-global-card col-lg-4 col-md-6 p-2">
				<div class="global-card card">
					<img src="<?php  echo $row["img_path"];?>" class="card-img-top" alt="...">
	  				<div class="card-body">
	    				<div class="location-name pt-3">
							<h4><strong>DLCR-<?php echo $row["property_id"] .': '. $row["name"]; ?> </strong></h4>
							<p><?php  echo $row["location_name"];?></p>
							<hr class="w-75 mx-auto">
						</div>

	    				<div class="row details">
	    					<div class="col-4 detail-item">
								<p><i class="fas fa-bed"></i> <?php echo $row["rooms"]; ?></p>
							</div>

							<div class="col-4 detail-item">
								<p><i class="fas fa-bath"></i> <?php echo $row["baths"]; ?></p>
							</div>

							<div class="col-4 detail-item">
								<p><i class="fas fa-car"></i> <?php echo $row["parking"]; ?></p>
							</div>
	    				</div>
	    				<p class="card-text"><?php echo $row['description'] ?></p>
	    				<button type="button" data-id="<?php echo $row['property_id'] ?>" class="boton_prop btn btn-primary" data-bs-toggle="modal" data-bs-target="#listing_modal">Show More</button>	
	  				</div>
	  			</div>
			</div>
<?php  
		};
	};
?>
