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
$consulta = "SELECT ID, name FROM propiedad";
$resultado = $entrada -> query($consulta);

if ($resultado->num_rows > 0) {
	while ($row = $resultado ->fetch_assoc()) {
		echo "ID: " . $row["ID"]. " ".  "Name: " . $row["name"] . "<br>";	
		echo '"<div class="col-lg-4 col-md-6 col-sm-12 p-1 item-card-outer">
					
					<div class="p-3 item-card-inner" id="list-border">
						
						<div class="mt-1 my-1 card-img">
							<img src="" alt="">
						</div>

						<div class="card-details">

							<div class="location-name">
								<h5>' . $name . ' </h5>
								<p>' . $location_name . '</p>
								<hr class="w-75 mx-auto">
							</div>

							<div class="row details">

								<div class="col-4 detail-item" id="list-border">
									<p>' . $rooms .'</p>
								</div>

								<div class="col-4 detail-item" id="list-border">
									<p>' . $baths . '</p>
								</div>

								<div class="col-4 detail-item" id="list-border">
									<p>'. $parking . '</p>
								</div>
							</div>	
						</div>

						<div class="card-description text-justify">
							<p>' . $desc . '</p>
						</div>

						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#listing_modal">Show More</button>

					</div>
				</div>"';
	}
	
} else{
	echo '<script> console.log("0 resultados.")</script>';
};

echo '
<!-- LIST AREA -->
	<section id="listing-property-section">
		<div class="container py-5 text-center">
			<div class="listing-title pt-2 pb-5">
				<p class="h1">Lista de propiedades</p>
				<hr>
			</div>
			
			<div class="listing row text-center">';

			

			'</div>
		</div>
	</section>';

include 'footer.php';
?>
