<?php 
include 'comp_connection.php';

//REQUEST
$query_join = "SELECT s1.tour_id, s1.tour_name, s1.tour_description, s2.tour_img_repo_path FROM `tours_tb` AS s1 JOIN tour_img_repository AS s2 on s1.tour_id = s2.tour_id WHERE tour_img_repo_id = 1";
$result_general = $conn -> query($query_join);

if (mysqli_num_rows($result_general) > 0) {
	while ($row =  mysqli_fetch_array($result_general)) {
?>
		<div class="outer-global-card col-lg-4 col-md-6 p-2">
				<div class="global-card card">
					<img src="<?php  echo $row["tour_img_repo_path"];?>" class="card-img-top" alt="...">
	  				<div class="card-body">
	  					<div class="location-name pt-3">
							<h4><strong>DLCRT-<?php echo $row["tour_id"]; ?> </strong></h4>
							<p><?php  echo $row["tour_name"];?></p>
							<hr class="w-75 mx-auto">
						</div>
	    				<p class="card-text"><?php echo $row['tour_description'] ?></p>
	    				<button type="button" data-id="<?php echo $row['tour_id'] ?>" class="boton_tour btn btn-primary" data-bs-toggle="modal" data-bs-target="#tour_modal">Show More</button>	
	  				</div>
	  			</div>
			</div>
<?php  
		};
	};
?>
