<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<title>Make Travel Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">

	<link rel="stylesheet" href="styles.css">	
	

</head>

<body>
	<div class="container-fluid bg-white mb-5">
		<div class="row justify-content-center">
			<img class="mb-4 mt-4 img-fluid d-none d-sm-block" src="img/logo.png">
			<img class="mb-4 mt-4 img-fluid d-sm-none" src="img/logo-sm.png">
		</div>
	</div>
	
	<div class="container">
		<form action="test.php" method="post" enctype="multipart/form-data">
			<div class="form-group" id="accordion"> 
				
				<!-- Kundeoplysninger -->
				<h3>Kunde</h3>
  				<div class="col-auto rounded-0">
    				<label for="exampleInputEmail1">Fornavn</label>
    				<input type="text" class="form-control mb-4 rounded-0" name="firstname" id="fornavn" aria-describedby="emailHelp" placeholder="Skriv fornavn her">
					<label for="exampleInputEmail1">Efternavn</label>
    				<input type="text" class="form-control mb-4 rounded-0" name="lastname" id="efternavn" aria-describedby="emailHelp" placeholder="Skriv efternavn her">
					<label for="exampleInputEmail1">Kunde nr.</label>
    				<input type="number" class="form-control mb-5 rounded-0" name="cid" id="kundenummer" aria-describedby="emailHelp" placeholder="Skriv kundernummer her">
  				</div>
				
				<!-- Flyinformation -->
				<h3>Fly</h3>
  				<div>
    				<label for="exampleInputEmail1">Flynummer til</label>
    				<input type="text" class="form-control mb-4 rounded-0" name="fto" id="flytil" aria-describedby="emailHelp" placeholder="Flynummer til destination">
					<label for="exampleInputEmail1">Flynummer fra</label>
    				<input type="text" class="form-control mb-4 rounded-0" name="ffrom" id="flyfra" aria-describedby="emailHelp" placeholder="Flynummer fra destination">
					<label for="exampleInputEmail1">Upload billetter</label>
    				<input type="file" class="form-control-file mb-5 rounded-0" name="fupload" id="exampleFormControlFile6">
  				</div>
				
				<!-- Hotelinformation -->
				<h3>Hotel</h3>
  				<div>
					<!-- Date picker -->
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Check ind</label>
						<div class="mr-5 rounded-0" id="hStartDate"></div>
						<input type="hidden" name="hStartDateVal" id="hStartDateVal" value="<?=date("Y-m-d")?>">
						<label class="mr-3" for="exampleInputEmail1">Check ud</label>
						<div class="mr-5 rounded-0" id="hEndDate"></div>
						<input type="hidden" name="hEndDateVal" id="hEndDateVal" value="<?=date("Y-m-d")?>">
					</div>
					<!-- Hotel selector -->
					<div class="row mb-5">
						<label for="exampleInputEmail1">Hotel</label>
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
        					<!--
        					<option value="1">Hotel Føroyar</option>
        					<option value="2">Hotel Tórshavn</option>
        					<option value="3">Hotel Vágar</option>-->
      					</select>
						<!-- Hotel booking upload -->
						<label for="exampleInputEmail1">Upload voucher</label>
    					<input type="file" class="form-control-file" name="hupload" id="exampleFormControlFile5">
					</div>
  				</div>
				
				<!-- Billeje -->
				<h3>Billeje</h3>
  				<div>
					<!-- Car datepicker -->
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Pick up</label>
						<div class="mr-5 rounded-0" id="cStartDate"></div>
						<input type="hidden" name="cStartDateVal" id="cStartDateVal" value="<?=date("Y-m-d")?>">
						<label class="mr-3" for="exampleInputEmail1">Drop off</label>
						<div class="mr-5 rounded-0" id="cEndDate"></div>
						<input type="hidden" name="cEndDateVal" id="cEndDateVal" value="<?=date("Y-m-d")?>">
					</div>
					<!-- Car selector -->
					<div class="row mb-5">
						<label for="exampleInputEmail1">Bil</label>
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
        					<!--
        					<option value="1">Citroen C1 Kat. A</option>
        					<option value="2">Opel Corsa Kat. B</option>
        					<option value="3">Citroen C3 Kat. C</option>
							<option value="3">Citroen C4 Kat. D</option>
							<option value="3">Mitsubishi ASX Kat. M</option>-->
      					</select>
						
						<!-- Car voucher upload -->
						<label for="exampleInputEmail1">Upload voucher</label>
    					<input type="file" class="form-control-file" name="cupload" id="exampleFormControlFile1">
					</div>
  				</div>
				
				<!-- Oplevelser -->
				<h3>Oplevelser</h3>
  				<div>
					<!-- Oplevelser datepicker -->
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Pick up</label>
						<div class="mr-5 rounded-0" id="eStartDate"></div>
						<input type="hidden" name="eStartDateVal" id="eStartDateVal" value="<?=date("Y-m-d")?>">
					</div>
					<!-- Oplevelser selector -->
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
						<label for="exampleInputEmail1">Upload voucher</label>
    					<input type="file" class="form-control-file" name="eupload" id="exampleFormControlFile2">
					</div>
  				</div>
				
				<!-- Transport -->
				<h3>Transport</h3>
  				<div>
					<!-- Tranport date picker-->
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Departure</label>
						<div class="mr-5 rounded-0" id="tStartDate"></div>
						<input type="hidden" name="tStartDateVal" id="tStartDateVal" value="<?=date("Y-m-d")?>">
						<label class="mr-3" for="exampleInputEmail1">Return</label>
						<div class="mr-5 rounded-0" id="tEndDate"></div>
						<input type="hidden" name="tEndDateVal" id="tEndDateVal" value="<?=date("Y-m-d")?>">
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
				
				<!-- Spisesteder -->
				<h3>Spisesteder</h3>
  				<div>
					<!-- Dining date picker -->
						<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Dato</label>
						<div class="mr-5 rounded-0" id="dStartDate"></div>
						<input type="hidden" name="dStartDateVal" id="dStartDateVal" value="<?=date("Y-m-d")?>">
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
				
				
			</div>
			
			<button type="submit" class="btn btn-dark btn-block mt-3 rounded-0">Submit</button>
		</form>
	</div>
	
	<div class="container-fluid bg-dark mt-3 mb-5">
		<div class="row justify-content-center">
			<h1 class="display-4"><strong>make</strong>travel</h1>
		</div>
	</div>

	 	
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	
<script src="scripts.js"></script>
</body>
</html>