<?php 
include 'connection.php';

$userid = $_POST['userid'];

$query_by_id = "SELECT * FROM property WHERE id=" .$userid;
$result_query_by_id = mysqli_query($conn, $query_by_id);
while ($row = mysqli_fetch_array($result_query_by_id)) {
	?>
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
				
	    			<div class="col-6 text-center py-2 my-1" id="modal-overview-item">
	    				<i class="fas fa-comments-dollar"></i> $<?php  echo $row["price"]; ?>
	    			</div>
	    			<div class="col-6 text-center py-2 my-1" id="modal-overview-item">
	    				<i class="fas fa-hashtag"></i> ID: <?php  echo $row["id"]; ?>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15695.330747442886!2d-84.00539163079384!3d10.434848233776973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa099734387841d%3A0xa5d62bb729a851df!2sBarrio%20Flaminia%2C%20Heredia%2C%20Sarapiqu%C3%AD!5e0!3m2!1ses!2scr!4v1646257878309!5m2!1ses!2scr" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
<?php			        	
 }
 ?>