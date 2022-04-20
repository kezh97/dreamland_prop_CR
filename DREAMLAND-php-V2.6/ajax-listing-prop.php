<?php 
include 'connection.php';

$id = $_POST['prop_id'];
$dir = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15695.330747442886!2d-84.00539163079384!3d10.434848233776973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa099734387841d%3A0xa5d62bb729a851df!2sBarrio%20Flaminia%2C%20Heredia%2C%20Sarapiqu%C3%AD!5e0!3m2!1ses!2scr!4v1646257878309!5m2!1ses!2scr';

$query_by_id = "SELECT * FROM property WHERE property_id=" .$id;
$result_query_by_id = mysqli_query($conn, $query_by_id);

$query_by_img = "SELECT img_path FROM img_repository WHERE property_id =" . $id;
$result_query_by_img = mysqli_query($conn, $query_by_img);
$cont = 0;

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
			    $i = 0;
			    foreach ($result_query_by_img as $var1) {
			    	if ($i  == 0) {
			    		echo '<li data-target="#carousel-ind" data-slide-to="' . $i +1 .'" class="active"></li>';
			    	} else{
			    		echo '<li data-target="#carousel-ind" data-slide-to="' . $i +1 .'" class=""></li>';
			    	}
			    	$i = $i+1;
			    }
			     ?>
			  </ol>
			  <div class="carousel-inner" >
			    <?php 
			    	while ($row1 = mysqli_fetch_array($result_query_by_img)) {
						if ($cont == 0) {
							?>
							<div class="carousel-item list-carousel active">
			      				<img src=" <?php echo $row1['img_path']; ?>" class="" alt="">
			    			</div>
			    		<?php
						} else{
						?>
							<div class="carousel-item list-carousel">
			      				<img src="<?php echo $row1['img_path']; ?>" class="" alt="">
			    			</div>'
			    		<?php
						}
						$cont = $cont+1;
					}
			     ?>
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
				
					<h3>Descripción principal</h3>
					<p class="text-justify">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Id eaque dolorum ipsum aspernatur, asperiores dolores officia nisi cupiditate, voluptatibus excepturi quia ut velit. Sint libero labore ipsam neque incidunt ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint repellat corrupti, ex nesciunt omnis impedit commodi quibusdam sunt laborum, vitae voluptates. Sed voluptas, aut dolorem repellat deserunt! Ea, modi maiores?</p>
				
			</div>

			<div class="modal-overview col-lg-6">
			
				<h4 class="h4 ">Overview</h4>
				<hr>
				<div class="">
		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-comments-dollar"></i> $<?php  echo $row["price"]; ?>
		    			</div>
		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-hashtag"></i> ID: DLCR-<?php  echo $row["property_id"]; ?>
		    			</div>
		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-bed"></i> <?php  echo $row["rooms"]; ?> Cuartos
		    			</div>
		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-bath"></i> <?php  echo $row["baths"]; ?> Baños
		    			</div>
		    			<div class="text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-car"></i> <?php  echo $row["parking"]; ?> Parqueos
		    			</div>
				</div>
			
			</div>
		</div>

		<div class="modal-description text-center pt-3">
			<div class="container">
				<h3>Descripción principal</h3>
				<p class="text-justify">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Id eaque dolorum ipsum aspernatur, asperiores dolores officia nisi cupiditate, voluptatibus excepturi quia ut velit. Sint libero labore ipsam neque incidunt ab. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint repellat corrupti, ex nesciunt omnis impedit commodi quibusdam sunt laborum, vitae voluptates. Sed voluptas, aut dolorem repellat deserunt! Ea, modi maiores?</p>
			</div>
		</div>

		<div class="modal-overview">
			<div class="container-fluid">
				<h4 class="h4 ">Overview</h4>
				<hr>
				<div class="row">
		    			<div class="col-6 text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-comments-dollar"></i> $<?php  echo $row["price"]; ?>
		    			</div>
		    			<div class="col-6 text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-hashtag"></i> ID: DLCR-<?php  echo $row["property_id"]; ?>
		    			</div>
		    			<div class="col-4 text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-bed"></i> <?php  echo $row["rooms"]; ?> Cuartos
		    			</div>
		    			<div class="col-4 text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-bath"></i> <?php  echo $row["baths"]; ?> Baños
		    			</div>
		    			<div class="col-4 text-center py-2 my-1" id="modal-overview-item">
		    				<i class="fas fa-car"></i> <?php  echo $row["parking"]; ?> Parqueos
		    			</div>
				</div>
			</div>
		</div>

		<div class="modal-table pt-3">
			<div class="container">
				<h4 class="h4 color-primary m-0">Características</h4>
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

		<div class="modal-map pt-3">
			<div class="container">
				<h4 class="h4 color-primary m-0">Ubicación</h4>
				<hr>
				<iframe src="<?php echo $dir ?>" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>

	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	</div>
<?php			        	
 }
 ?>
