<?php 

include 'connection.php';

$query = "SELECT id, name, location_name, price, rooms, baths, parking, description FROM property";
$result_general = $conn -> query($query);

?>

<!-- PROPERTY SECTION SLIDER -->
<section id="property-section">
	<div class="prop-slider container">
		<h6 class="h6 color-primary m-0">Recent</h6>
		<h1 class="h1 h1-responsive mb-4">Recently Added Properties</h1>
		<div class="text-right">
			<a href="list-properties.php">Find More Project <i class="fas fa-long-arrow-alt-right"></i></a>
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
								<img loading="lazy" src="img/house1.webp" alt="">
							</div>
							<div class="text-right">
								<h4 class="h5">DLCR-<?php echo $row["id"]; ?>: <?php echo $row["name"] .', '. $row["location_name"]; ?></h4>
							</div>
							<div class="d-flex justify-content-between mb-4">
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

							<button type="button" class="btn btn-primary">Preview</button>
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


