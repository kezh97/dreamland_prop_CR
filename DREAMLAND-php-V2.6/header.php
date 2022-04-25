<?php 
	$activePage = basename($_SERVER['PHP_SELF'], ".php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="img/logo1.webp">
	<title>Dreamland Properties CR</title>

	<!-- FONTS&ICONS -->
	<script src="https://kit.fontawesome.com/5770ce2232.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- STYLES -->
	<link rel="stylesheet" href="style/main.css">
	<!-- SWIPERJS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- PERSONALIZE JS -->
	
</head>
<body>
	<!-- NAVBAR -->	
	<nav class="navbar navbar-expand-lg py-2 navbar-light bg-light">
  		<a class="navbar-brand" href="index.php"> 
  		 	<span class="fs-5 fw-bold text-uppercase brand">Dreamland Properties CR.</span>
  		</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
    		<ul class="navbar-nav ml-auto">
      			<li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
        			<a class="nav-link pr-5 text-uppercase font-weight-normal" href="index.php">Home</span></a>
      			</li>
      			<li class="nav-item <?= ($activePage == 'list_properties') ? 'active':''; ?>">
        			<a class="nav-link pr-5 text-uppercase font-weight-normal" href="list_properties.php" >Properties</a>
      			</li>
      			<li class="nav-item <?= ($activePage == 'tours') ? 'active':''; ?>">
        			<a class="nav-link pr-5 text-uppercase font-weight-normal" href="tours.php">Tours</a>
      			</li>
      			<li class="nav-item <?= ($activePage == 'contact') ? 'active':''; ?>">
        			<a class="nav-link pr-5 text-uppercase font-weight-normal" href="contact.php" >Contact</a>
      			</li>
      			<li class="nav-item <?= ($activePage == 'test') ? 'active':''; ?>">
        			<a class="nav-link pr-5 text-uppercase font-weight-normal" href="test.php">tester</a>
      			</li>
      			<div class="btn-group btn-toggle"> 
    				<button class="btn btn-default">ES</button>
    				<button class="btn btn-primary active">EN</button>
  				</div>
    		</ul>
  		</div>
	</nav>
