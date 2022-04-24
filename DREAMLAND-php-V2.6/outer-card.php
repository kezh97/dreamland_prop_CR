<?php  

//REQUEST
$query_join = "SELECT s1.property_id, s1.name, s1.location_name, s1.rooms, s1.baths, s1.description, s1.price, s1.parking, s2.img_path FROM `property` AS s1 JOIN img_repository AS s2 on s1.property_id = s2.property_id WHERE img_repo_id = 1";
$result_general = $conn -> query($query_join);

if (mysqli_num_rows($result_general) > 0) {
	while ($row =  mysqli_fetch_array($result_general)) {
?>
		<div class="col-lg-4 col-md-6 col-sm-12 p-1 item-card-outer">
			<div class="p-3 item-card-inner" id="list-border">
				<div class="mt-1 my-1 card-img">
					<img src="<?php  echo $row["img_path"];?>" alt="">
				</div>

				<div class="card-details">
					<div class="location-name">
						<h5>DLCR-<?php echo $row["property_id"] .': '. $row["name"]; ?> </h5>
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
				
				<button type="button" data-id="<?php echo $row['property_id']; ?>" class="boton btn btn-primary" data-bs-toggle="modal" data-bs-target="#listing_modal">Show More</button>
				
			</div>
		</div>
<?php  
		};
	};
?>
