<?php 
include 'connection.php';

$query_by_img = "SELECT img_path FROM img_repository WHERE property_id=" . $id;
$result_query_by_img = mysqli_query($conn, $query_by_img);
$cont = 1;
$num_rows = mysqli_num_rows($result_query_by_img);


function Carousel_Indicador(){
	echo '<ol class="carousel-indicators">'
	
	while ($cont != $num_rows) {
		if ($cont == 1) {
			echo '<li data-target="#carousel-ind" data-slide-to="' . $cont - 1 .'" class="active"></li>';
		} else{
			echo '<li data-target="#carousel-ind" data-slide-to="' . $cont . '"></li>';
		}
		$cont = $cont + 1;
	}

	$cont = 1;
	 echo '</ol>';
}

function Fetch_image(){
	echo '';
}

 ?>



	


while ($row = mysqli_fetch_array($result_query_by_img)) {
		if ($cont == 1) {
			echo '<div class="carousel-item list-carousel active">
			      	<img src="' .$row['img_path'] .'" class="" alt="">
			    </div>';
		} else{
			echo '<div class="carousel-item list-carousel">
			      	<img src="' .$row['img_path'] .'" class="" alt="">
			    </div>';
		}
		$cont = $cont+1;
	}