<?php 
include 'connection.php';

//DB LINK
$entrada = connect_db();

//LINK CONFIRMATION
if (!$entrada) {
	echo '<script> console.log("Error al conectar a la base de datos.")</script>';
}	else{
	echo '<script> console.log("Base de datos conectada.")</script>';
}

//REQUEST
$consulta = "SELECT ID, name FROM propiedad";
$resultado = $entrada -> query($consulta);

if ($resultado->num_rows > 0) {
	while ($row = $resultado ->fetch_assoc()) {
		echo "ID: " . $row["ID"]. " ".  "Name: " . $row["name"] . "<br>";
	}
} else{
	echo '<script> console.log("0 resultados.")</script>';
};

$entrada->close();
if ($entrada) {
	echo '<script> console.log("Base de datos desconectada.")</script>';
}
echo 
'<!-- CAROUSEL -->	
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>

  		<div class="carousel-inner" id="carousel-home">
    		<div class="carousel-item active">
      			<img class="" src="img/city.webp" alt="First slide">
      			<div class="carousel-caption">
    				<h5>Dreamland Properties CR</h5>
    				<p>Your best choice to find your dreamhouse</p>
  				</div>
    		</div>
    		<div class="carousel-item">
      			<img class="" src="img/house7.webp" alt="Second slide">
      			<div class="carousel-caption">
    				<h5>Contact us!</h5>
    				<p>Meet our best realtor.</p>
  				</div>
    		</div>
    		<div class="carousel-item">
      			<img class="" src="img/tour.webp" alt="Third slide">
      			<div class="carousel-caption">
    				<h5>Explore Costa Ricas natural paradise</h5>
    				<p>One with the nature</p>
  				</div>
    		</div>
  		</div>

  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
	</div>

	<!-- INTRODUCTION -->	
	<section class="w-75 mx-auto text-center pt-5" id="intro">
		<h1 class="p-3 border-top border-3"><span id="mission_cap">Dreamland Properties CR</span> is a real estate company compromised with helping our clients to find exactly what they need.</h1>
		<p class="p-3">City, jungle, beach properties. You say it and we will make it happen. Good service and a smile is our slogan!</p>
	</section>

	<!-- OBJETIVES -->	
	<section class="container py-4">
		<div class="row">
			<div class="col-md text-center mx-2 pt-5 pb-2 services-show">
				<img loading="lazy" src="img/realtor.webp" alt="realtor" width="180" height="180">
				<h3>Best Treatment</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolorum accusantium expedita voluptate optio qui velit.</p>
			</div>

			<div class="col-md text-center mx-2 pt-5 pb-2 services-show">
				<img loading="lazy" src="img/realestate.webp" alt="realtor" width="180" height="180">
				<h3>You ask it, we find it for you</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolorum accusantium expedita voluptate optio qui velit.</p>
			</div>

			<div class="col-md text-center mx-2 pt-5 pb-2 services-show">
				<img loading="lazy" src="img/touricon.svg" alt="realtor" width="180" height="180">
				<h3>Tour Services</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem dolorum accusantium expedita voluptate optio qui velit.</p>
			</div>
		</div>
	</section>

	<!-- PARALLAX SEPARATOR --> 
  	<section class="para mt-5">
    	<div class="parallax-sep"></div>
  	</section>

	<!-- PREVIEW PROPERTIES -->
	<section class="container py-5">
		<div class="w-75 m-auto text-center" id="preview_props">
			<h1 class="pb-5 border-top fs-2 border-3">Properties in <span class="CR">Costa Rica</span></h1>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti nemo, ipsa aliquam aliquid reiciendis modi iure doloribus repellat debitis earum voluptatum molestias obcaecati illum! Iure possimus quas harum esse laborum.</p>
		</div>
		<div class="mt-5 text-center">
			<img loading="lazy" class="img-fluid" src="img/house1.webp" alt="house">
		</div>
	</section>';
	include 'swiper.php'; 
?>
