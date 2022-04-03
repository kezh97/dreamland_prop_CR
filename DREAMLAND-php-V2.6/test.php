<?php 
include 'connection.php';
include 'header.php'; 

//DB LINK
$entrada = connect_db();

//LINK CONFIRMATION
if (!$entrada) {
	echo '<script> console.log("Error al conectar a la base de datos.")</script>';
} else{
	echo '<script> console.log("Base de datos conectada.")</script>';
}

//REQUEST
$consulta = "SELECT ID, name, location_name, price, rooms, baths, parking, description FROM property";
$resultado = $entrada -> query($consulta);

?>
<!-- LIST AREA -->
	<section id="listing-property-section">
		<div class="container py-5 text-center">
			<div class="listing-title pt-2 pb-5">
				<p class="h1">Lista de propiedades</p>
				<hr>
			</div>
			
			<div class="listing row text-center">
				<?php  
				if ($resultado->num_rows > 0) {

					while ($row = $resultado ->fetch_assoc()) {
						?>
							<div class="col-lg-4 col-md-6 col-sm-12 p-1 item-card-outer">
								<div class="p-3 item-card-inner" id="list-border">
									<div class="mt-1 my-1 card-img">
										<img src="img/house7.webp" alt="">
									</div>

									<div class="card-details">
										<div class="location-name">
											<h5><?php  echo $row["name"]; ?></h5>
											<p><?php  echo $row["location_name"];?></p>
											<hr class="w-75 mx-auto">
										</div>
										<div class="row details">
											<div class="col-4 detail-item" id="list-border">
												<p><?php echo $row["rooms"]; ?> Cuartos</p>
											</div>

											<div class="col-4 detail-item" id="list-border">
												<p><?php echo $row["baths"]; ?> Baños</p>
											</div>

											<div class="col-4 detail-item" id="list-border">
												<p><?php echo $row["parking"]; ?> Parqueos</p>
											</div>
										</div>	
									</div>

									<div class="card-description text-justify">
										<p> <?php echo $row["description"]; ?></p>
									</div>

									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#listing_modal">Show More</button>
								</div>
							</div>
						
					<?php  
					};
				};
				?>
			</div>
		</div>
	</section>

	<section id="property-modal">
		<div class="modal fade" id="listing_modal" tabindex="-1" aria-labelledby="listing-name-label" aria-hidden="true">

		  	<div class="modal-dialog modal-xl">
		    	<div class="modal-content">
			      	<div class="modal-header">
			        	<h4 class="modal-title" id="listing-name-label">Santa Ana, San José</h4>
			        	<i class="fas fa-times" data-bs-dismiss="modal" aria-label="Close"></i>
			      	</div>

			      	<div class="modal-body" id="listing-modal-body">
			      		<div class="modal-carousel">
			      			<div id="carousel-ind" class="carousel slide" data-ride="carousel">
								  <ol class="carousel-indicators">
								    <li data-target="#carousel-ind" data-slide-to="0" class="active"></li>
								    <li data-target="#carousel-ind" data-slide-to="1"></li>
								    <li data-target="#carousel-ind" data-slide-to="2"></li>
								  </ol>
								  <div class="carousel-inner" >
								    <div class="carousel-item list-carousel active">
								      <img src="img/house1.webp" class="" alt="">
								    </div>
								    <div class="carousel-item list-carousel">
								      <img src="img/house7.webp" class="" alt="">
								    </div>
								    <div class="carousel-item list-carousel">
								      <img src="img/house3.webp" class="" alt="">
								    </div>
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
				        			<?php  
										if ($resultado->num_rows > 0) {

											while ($row = $resultado ->fetch_assoc()) {
										?>
					        			<div class="col-6 text-center py-2 my-1" id="modal-overview-item">
					        				<i class="fas fa-comments-dollar"></i> <?php  echo $row["price"]; ?>
					        			</div>
					        			<div class="col-6 text-center py-2 my-1" id="modal-overview-item">
					        				<i class="fas fa-hashtag"></i> ID: <?php  echo $row["ID"]; ?>
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
				        			<?php  
											};
										};
									?>
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
			        			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15695.330747442886!2d-84.00539163079384!3d10.434848233776973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa099734387841d%3A0xa5d62bb729a851df!2sBarrio%20Flaminia%2C%20Heredia%2C%20Sarapiqu%C3%AD!5e0!3m2!1ses!2scr!4v1646257878309!5m2!1ses!2scr" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			        		</div>
			        	</div>	
		      		</div>

			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			      	</div> 	
			    </div>
			</div>
		</div>	
	</section>
<?php
include 'footer.php';
?>
