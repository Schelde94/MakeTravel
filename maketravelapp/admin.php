<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<title>Make Travel Admin</title>
		<!-- Bootstrap and JQuery -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,700" rel="stylesheet">
		<!-- Custom stylesheet -->
		<link rel="stylesheet" href="styles.css">
		<!-- Time spinner script -->
		<script src="timescripts.js"></script>

	</head>

	<body>
		<!-- Header -->
		<div class="container-fluid bg-white mb-5">
			<div class="row justify-content-center">
				<img class="mb-4 mt-4 img-fluid d-none d-sm-block" src="img/logo.png">
				<img class="mb-4 mt-4 img-fluid d-sm-none" src="img/logo-sm.png">
			</div>
		</div>
		
		<!-- Content -->
		<div class="container">
			<form action="createcustomer.php" method="post" enctype="multipart/form-data">
				<!-- Accordion begins -->
				<div class="form-group" id="accordion"> 
					<!-- Customer info -->
					<h3>Kunde</h3>
					<div class="col-auto rounded-0">
						<label for="fornavn">Fornavn</label>
						<input type="text" name="firstname" class="form-control mb-4 rounded-0" id="fornavn" aria-describedby="emailHelp" placeholder="Skriv fornavn her" required>
						<label for="efternavn">Efternavn</label>
						<input type="text" name="lastname" class="form-control mb-4 rounded-0" id="efternavn" aria-describedby="emailHelp" placeholder="Skriv efternavn her" required>
						<label for="kundenummer">Kunde nr.</label>
						<input type="number" name="cid" class="form-control mb-5 rounded-0" id="kundenummer" aria-describedby="emailHelp" placeholder="Skriv kundernummer her" required>
					</div>
					<!-- Flight info -->
					<h3>Fly</h3>
					<div>
						<label for="flytil">Flynummer til</label>
						<input type="text" name="fto" class="form-control mb-4 rounded-0" id="flytil" aria-describedby="emailHelp" placeholder="Flynummer til destination" required>
						<label for="flyfra">Flynummer fra</label>
						<input type="text" name="ffrom" class="form-control mb-4 rounded-0" id="flyfra" aria-describedby="emailHelp" placeholder="Flynummer fra destination" required>
						<label for="exampleInputEmail1">Upload billetter</label>
						<input type="file" name="fupload" class="form-control-file mb-5 rounded-0" id="exampleFormControlFile6">
					</div>
					<!-- Hotel info -->
					<h3>Hotel</h3>
					<div>
						<div class="row mb-5">
							<label class="mr-3" for="hStartDate">Check ind</label>
							<div class="mr-5 rounded-0" id="hStartDate"></div>
							<input type="hidden" name="hStartDateVal" id="hStartDateVal" value="<?=date("Y-m-d")?>">
							
							<label class="mr-3" for="hEndDate">Check ud</label>
							<div class="mr-5 rounded-0" id="hEndDate"></div>
							<input type="hidden" name="hEndDateVal" id="hEndDateVal" value="<?=date("Y-m-d")?>">
						</div>
						<div class="row mb-5">
							<label for="inlineFormCustomSelect4">Hotel</label>
							<select class="custom-select mr-sm-2 mb-3 rounded-0" name="hotelid" id="inlineFormCustomSelect4">
								<option selected>Vælg hotel</option>
								<?php
									require_once('dbcon.php');
									$sql = 'SELECT hid, place FROM hinfo';
									$stmt = $link->prepare($sql);
									$stmt->execute();
									$stmt->bind_result($hid, $hnam);

								   while($stmt->fetch()){
									   echo '<option value="'. $hid .'">'. $hnam .'</option>'.PHP_EOL;
								   }
								?>
							</select>
						<!-- Hotel booking upload -->
						<label for="exampleFormControlFile5">Upload voucher</label>
    					<input type="file" class="form-control-file" name="hupload" id="exampleFormControlFile5">
						</div>
					</div>
					<!-- Car rental info -->
					<h3>Billeje</h3>
					<div>
						<!-- Start date and time -->
						<div class="row mb-5">
							<!-- Date picker -->
							<label class="mr-3" for="exampleInputEmail1">Pick up</label>
							<div class="mr-5 rounded-0" id="cStartDate"></div>
							<input type="hidden" name="cStartDateVal" id="cStartDateVal" value="<?=date("Y-m-d")?>">
							<!-- Time picker -->
							<p>
								<label for="spinner1">Time:</label>
								<input type="time" id="spinner1" name="cStartTime" value="18:00">
							</p>
						</div>
						<!-- End date and time -->
						<div class="row mb-5">
							<!-- Date picker -->
							<label class="mr-3" for="exampleInputEmail1">Drop off</label>
							<div class="mr-5 rounded-0" id="cEndDate"></div>
							<input type="hidden" name="cEndDateVal" id="cEndDateVal" value="<?=date("Y-m-d")?>">
							<!-- Time picker -->
							<p>
								<label for="spinner2">Time:</label>
								<input type="time" id="spinner2" name="cEndTime" value="18:00">
							</p>
						</div>
						<!-- Car selector -->
						<div class="row mb-5">
							<label for="inflineFormCustomSelect3">Bil</label>
							<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0" name="carid" id="inlineFormCustomSelect3">
								<option selected>Vælg bil type</option>
								<?php
									require_once('dbcon.php');
									$sql = 'SELECT cid, brand, cname, category FROM cinfo';
									$stmt = $link->prepare($sql);
									$stmt->execute();
									$stmt->bind_result($cid, $cbrand, $cnam, $ccat);

								   while($stmt->fetch()){
									   echo '<option value="'. $cid .'">'. $cbrand .' '. $cnam .' Kat. ' . $ccat . '</option>'.PHP_EOL;
								   }
								?>
							</select>

							<!-- Car voucher upload -->
							<label for="exampleInputEmail1">Upload voucher</label>
							<input type="file" class="form-control-file" name="cupload" id="exampleFormControlFile1">
						</div>
					</div>
					<!-- Excursion info -->
					<h3>Oplevelser</h3>
					<div>
						<!-- Start date and time -->
						<div class="row mb-5">
							<!-- Date picker -->
							<label class="mr-3" for="exampleInputEmail1">Pick up</label>
							<div class="mr-5 rounded-0" id="eStartDate"></div>
							<input type="hidden" name="eStartDateVal" id="eStartDateVal" value="<?=date("Y-m-d")?>">
							<!-- Time picker -->
							<p>
								<label for="spinner3">Time:</label>
								<input type="time" id="spinner3" name="eStartTime" value="18:00">
							</p>
						</div>
						<!-- Excursion selector -->
						<div class="row mb-5">
							<label for="exampleInputEmail1">Oplevelse</label>
							<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0" name="experienceid" id="inlineFormCustomSelect2">
								<option selected>Vælg oplevelse</option>
								<?php
									require_once('dbcon.php');
									$sql = 'SELECT eid, ename FROM einfo';
									$stmt = $link->prepare($sql);
									$stmt->execute();
									$stmt->bind_result($eid, $enam);

								   while($stmt->fetch()){
									   echo '<option value="'. $eid .'">'. $enam .'</option>'.PHP_EOL;
								   }
								?>
							</select>
							<!-- Experience voucher upload -->
							<label for="exampleFormControlFile2">Upload voucher</label>
							<input type="file" class="form-control-file" name="eupload" id="exampleFormControlFile2">
						</div>
					</div>
					<!-- Transport info -->
					<h3>Transport</h3>
					<div>
						<!-- Start date and time -->
						<div class="row mb-5">
							<!-- Date picker -->
							<label class="mr-3" for="exampleInputEmail1">Departure</label>
							<div class="mr-5 rounded-0" id="tStartDate"></div>
							<input type="hidden" name="tStartDateVal" id="tStartDateVal" value="<?=date("Y-m-d")?>">
							<!-- Time picker -->
							<p>
								<label for="spinner4">Time:</label>
								<input type="time" id="spinner4" name="tStartTime" value="18:00">
							</p>
						</div>
						<!-- End date and time -->
						<div class="row mb-5">	
							<!-- Date Picker -->
							<label class="mr-3" for="exampleInputEmail1">Return</label>
							<div class="mr-5 rounded-0" id="tEndDate"></div>
							<input type="hidden" name="tEndDateVal" id="tEndDateVal" value="<?=date("Y-m-d")?>">
							<!-- Time picker -->
							<p>
								<label for="spinner5">Time:</label>
								<input type="time" id="spinner5" name="tEndTime" value="18:00">
							</p>
						</div>
						<!-- Transport selector -->
						<div class="row mb-5">
							<label for="exampleInputEmail1">Transport</label>
							<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0" name="transportid" id="inlineFormCustomSelect">
								<option selected>Vælg transport type</option>
								<?php
									require_once('dbcon.php');
									$sql = 'SELECT tid, ttype FROM tinfo';
									$stmt = $link->prepare($sql);
									$stmt->execute();
									$stmt->bind_result($tid, $ttype);

								   while($stmt->fetch()){
									   echo '<option value="'. $tid .'">'. $ttype .'</option>'.PHP_EOL;
								   }
								?>

							</select>
							<!-- Transport voucher uploader -->
							<label for="exampleInputEmail1">Upload voucher</label>
							<input type="file" class="form-control-file" name="tupload" id="exampleFormControlFile2">
						</div>
					</div>
					<!-- Dining info -->
					<h3>Spisesteder</h3>
					<div>
						<!-- Start date and time -->
						<div class="row mb-5">
							<!-- Date picker -->
							<label class="mr-3" for="exampleInputEmail1">Dato</label>
							<div class="mr-5 rounded-0" id="dStartDate"></div>
							<input type="hidden" name="dStartDateVal" id="dStartDateVal" value="<?=date("Y-m-d")?>">
							<!-- Time picker -->
							<p>
								<label for="spinner6">Time:</label>
								<input type="time" id="spinner6" name="spinner6" value="18:00">
							</p>
						</div>
						<!-- Dining selector -->
						<div class="row mb-5">
							<label for="exampleInputEmail1">Spisested</label>
							<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0" name="diningid" id="inlineFormCustomSelect1">
								<option selected>Vælg spisested</option>
								<?php
									require_once('dbcon.php');
									$sql = 'SELECT did, place FROM dinfo';
									$stmt = $link->prepare($sql);
									$stmt->execute();
									$stmt->bind_result($did, $dnam);

								   while($stmt->fetch()){
									   echo '<option value="'. $did .'">'. $dnam .'</option>'.PHP_EOL;
								   }
								?>
							</select>
							<!-- Dining voucher upload -->
							<label for="exampleInputEmail1">Upload voucher</label>
							<input type="file" class="form-control-file" name="dupload" id="exampleFormControlFile4">
						</div>
					</div>
				</div> <!-- Accordion ends -->
				<button type="submit" class="btn btn-dark btn-block mt-3 rounded-0">Submit</button>
			</form>
		</div>
		<!-- Footer -->
		<div class="container-fluid mt-3 mb-5">
			<div class="row justify-content-center">
				<h1 class="logoname"><strong>make</strong>travel</h1>
			</div>
		</div>


		<!-- Bootstrap and Jquery scripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<script src="/resources/demos/external/globalize/globalize.js"></script>
		<script src="/resources/demos/external/globalize/globalize.culture.de-DE.js"></script>
		<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>		

		<!-- Custom scripts -->
		<script src="scripts.js"></script>
	</body>
</html>