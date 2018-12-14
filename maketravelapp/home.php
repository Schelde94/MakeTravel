<!doctype html>
<html lang="en">
<head>
<title>Make Travel Companion</title>
<!-- head -->		
<?php include 'head.php';?>
<!-- head END -->
</head>

<body>
	<!-- header -->		
	<?php include 'header.php';?>
	<!-- header END -->
		
	<div class="container-fluid">
		<div class="row justify-content-around">
			<h3 class="text-center col-sm text-white mb-2 mt-4">Welcome John!</h3>
		</div>	
		<div class="row justify-content-around">
			<p class="lead text-center col-sm text-white mb-4 mt-2">All your files are inlcuded in the sections below.<br>Click on the sections to see vouchers and more detailed information.</p>
		</div>
		
		<div class="row justify-content-around align-content-around">
		<div class="card-deck">
			<div class="card bg-white text-white mb-5 rounded-0" id="fly">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".fly"><img class="card-img rounded-0" src="img/icons/flight1.png" onmouseover="this.src='img/icons/flight2.png'" onmouseout="this.src='img/icons/flight1.png'" alt="Flight information"></button>	
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="hotel">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".hotel"><img class="card-img rounded-0" src="img/icons/hotel1.png" onmouseover="this.src='img/icons/hotel2.png'" onmouseout="this.src='img/icons/hotel1.png'" alt="Hotel information"></button>	
			</div>
			<div class="card  bg-white text-white mb-5 rounded-0" id="bil">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".car"><img class="card-img rounded-0" src="img/icons/carrental1.png" onmouseover="this.src='img/icons/carrental2.png'" onmouseout="this.src='img/icons/carrental1.png'" alt="Car rental information" id="imgcar"></button>		
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="oplevelser">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".sights"><img class="card-img rounded-0" src="img/icons/excursion1.png" onmouseover="this.src='img/icons/excursion2.png'" onmouseout="this.src='img/icons/excursion1.png'" alt="Experiences information"></button>		
			</div>
		</div>
		</div>
		<div class="row justify-content-around">
		<div class="card-deck">
			<div class="card bg-white text-white mb-5 rounded-0" id="transport">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".transport"><img class="card-img rounded-0" src="img/icons/transport1.png" onmouseover="this.src='img/icons/transport2.png'" onmouseout="this.src='img/icons/transport1.png'" alt="Transportation information"></button>
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="spise">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".eat"><img class="card-img rounded-0" src="img/icons/dining1.png" onmouseover="this.src='img/icons/dining2.png'" onmouseout="this.src='img/icons/dining1.png'" alt="Eating information"></button>		
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="alarm">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".emergency"><img class="card-img rounded-0" src="img/icons/emergency1.png" onmouseover="this.src='img/icons/emergency2.png'" onmouseout="this.src='img/icons/emergency1.png'" alt="Emergency information"></button>		
			</div>
			<div class="card bg-white text-white mb-5 rounded-0" id="generelt">
 		 		<button type="button" class="btn bg-white rounded-0" data-toggle="modal" data-target=".general"><img class="card-img rounded-0" src="img/icons/generelt1.png" onmouseover="this.src='img/icons/generelt2.png'" onmouseout="this.src='img/icons/generelt1.png'" alt="General information"></button>		
			</div>
		</div>
		</div>
	</div>

    <!-- footer -->		
	<?php include 'footer.php';?>
	<!-- footer END -->	
	<!-- modals -->		
	<?php include 'modal.php';?>
	<!-- modals END -->		
	
	
<button onclick="topFunction()" class="bg-dark rounded-0" id="myBtn" title="Go to top">Top</button>	

	
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="scripts.js"></script>	
	
</body>
</html>