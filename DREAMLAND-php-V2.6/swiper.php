<?php 

include 'connection.php';

$query_join = "SELECT s1.property_id, s1.name, s1.location_name, s1.rooms, s1.baths, s1.description, s1.price, s1.parking, s2.img_path FROM `property` AS s1 JOIN img_repository AS s2 on s1.property_id = s2.property_id WHERE img_repo_id = 1";

$result_general = $conn -> query($query_join);

?>

<!-- PROPERTY SECTION SLIDER -->
<section id="property-section">
	<div class="prop-slider container">
		<h6 class="h6 color-primary m-0">Recent</h6>
		<h1 class="h1 h1-responsive mb-4">Recently Added Properties</h1>
		<div class="text-right">
			<a href="list_properties.php" class="btn btn-primary">Find More Project <i class="fas fa-long-arrow-alt-right"></i></a>
		</div>

		<div id="property-slider">
			<!-- Slider main container -->
			<div class="swiper swiper-container">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					
					<?php 
					while ($row = mysqli_fetch_array($result_general)) {
					 ?>
					<!-- Slides -->
					<div class="swiper-slide">
						<div class="property-list">
							<div class="image">
								<img loading="lazy" src="<?php echo $row["img_path"]; ?>" alt="">
							</div>
							<div class="text-left px-2">
								<h4 class="">DLCR-<?php echo $row["property_id"]; ?>: <?php echo $row["name"] ?></h4>
								<h5><?php  echo $row["location_name"]; ?></h5>
							</div>
							<div class="d-flex justify-content-between mb-4 px-2">
								<div class="item py-3">
									<h4 class="h5 m-0 location-name"></h4>
									<p class="m-0 location-name">$<?php echo $row["price"]; ?></p>
								</div>

								<div class="item d-flex align-self-center py-3">
									<i class="fas fa-bed mr-2 align-self-center"></i>
									<span class="mr-4"><?php echo $row["rooms"]; ?></span>
									<i class="fas fa-toilet mr-2 align-self-center"></i>
									<span class="mr-4"><?php echo $row["baths"]; ?></span>
									<i class="fas fa-car mr-2 align-self-center"></i>
									<span class="mr-
									2"><?php echo $row["parking"]; ?></span> 
								</div>
							</div>
						</div>
					</div>
					<?php 
					}
					 ?>
					
				</div>
			</div>
		</div>
	</div>
</section> 
