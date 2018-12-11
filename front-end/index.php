<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
<title>Make Travel Companion</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,700" rel="stylesheet">
	
<link rel="stylesheet" href="styles.css">	

</head>

<body>
	<div class="container-fluid bg-white">
		<div class="row justify-content-center">
			<img class="mb-4 mt-4 img-fluid d-none d-sm-block" src="img/logo.png" alt="Make Travel Logo">
			<img class="mb-4 mt-4 img-fluid d-sm-none" src="img/logo-sm.png" alt="Make Travel Logo">
		</div>
	</div>
		
	<div class="container-fluid">
		<div class="row justify-content-around">
			<p class="lead text-center col-sm text-white mb-4 mt-4">All your files are inlcuded in the sections below.<br>Click on the sections to see vouchers and more detailed information.</p>
		</div>
		
		<div class="row justify-content-around align-content-around">
		<div class="card-deck">
			<div class="card bg-white text-white mb-5 rounded-0" id="fly">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".fly"><img class="card-img rounded-0" src="img/boarding.PNG" alt="Flight information"></button>	
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="hotel">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".hotel"><img class="card-img rounded-0" src="img/hotel.PNG" alt="Hotel information"></button>	
			</div>
			<div class="card  bg-white text-white mb-5 rounded-0" id="bil">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".car"><img class="card-img rounded-0" src="img/billeje.PNG" alt="Car rental information"></button>		
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="oplevelser">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".sights"><img class="card-img rounded-0" src="img/oplevelser.PNG" alt="Experiences information"></button>		
			</div>
		</div>
		</div>
		<div class="row justify-content-around">
		<div class="card-deck">
			<div class="card bg-white text-white mb-5 rounded-0" id="transport">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".transport"><img class="card-img rounded-0" src="img/billeje.PNG" alt="Transportation information"></button>
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="spise">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".eat"><img class="card-img rounded-0" src="img/spise.PNG" alt="Eating information"></button>		
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="alarm">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".emergency"><img class="card-img rounded-0" src="img/generelt.PNG" alt="Emergency information"></button>		
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="generelt">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".general"><img class="card-img rounded-0" src="img/generelt.PNG" alt="General information"></button>		
			</div>
		</div>
		</div>
	</div>
	
	<div class="container-fluid mt-3 mb-5">
		<div class="row justify-content-center">
			<h1 class="logoname"><strong>make</strong>travel</h1>
		</div>
		<div class="row justify-content-center">
			<p class="lead">Tel. +298 232100</p>
		</div>
	</div>

<!-- modal flight -->		
<?php include 'modalflight.php';?>
<!-- modal flight END -->
		
<!-- modal hotel -->		
<?php include 'modalhotel.php';?>
<!-- modal hotel END -->		
		
<!-- modal carrental -->		
<?php include 'modalcar.php';?>
<!-- modal carrental END -->
		
<!-- modal sights -->		
<?php include 'modalsights.php';?>
<!-- modal sights END -->
		
<!-- modal transport -->		
<?php include 'modaltransport.php';?>
<!-- modal transport END -->
		
<!-- modal eating -->		
<?php include 'modaleat.php';?>
<!-- modal eating END -->

<!-- modal other -->		
<?php include 'modalemergency.php';?>
<!-- modal other END -->
		
<!-- modal general -->		
<?php include 'modalgeneral.php';?>
<!-- modal general END -->			

	
<button onclick="topFunction()" class="bg-dark rounded-0" id="myBtn" title="Go to top">Top</button>	

	
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="scripts.js"></script>	
	
</body>
</html>