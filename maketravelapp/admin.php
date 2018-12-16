<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<title>Make Travel Admin</title>	
		<!-- head -->		
        <?php include 'head.php';?>
        <!-- head END -->
    </head>

    <body>
        <!-- header -->		
        <?php include 'header.php';?>
        <!-- header END -->
		
		<!-- Content -->
		<div class="container mt-5 mb-5">
			<div class="justify-content-around">
				<h3 class="text-center col-sm text-white mb-2 logoname">Welcome!</h3>
			</div>
			<div class="justify-content-around">
				<p class="lead text-center col-sm text-white mb-4 mt-2">Fill in the customer information below.</p>
			</div>
			
			<form action="createcustomer.php" method="post" enctype="multipart/form-data">
				<!-- Accordion begins -->
				<div class="form-group" id="accordion"> 
					<!-- Customer info -->
					<h3>&nbsp;&nbsp;Kunde</h3>
					<div class="col-auto rounded-0">
						<label for="fornavn">Fornavn</label>
						<input type="text" name="firstname" class="form-control mb-4 rounded-0 inputfelt" id="fornavn" aria-describedby="emailHelp" placeholder="Skriv fornavn her" required>
						<label for="efternavn">Efternavn</label>
						<input type="text" name="lastname" class="form-control mb-4 rounded-0 inputfelt" id="efternavn" aria-describedby="emailHelp" placeholder="Skriv efternavn her" required>
						<label for="kundenummer">Kunde nr.</label>
						<input type="number" name="cid" class="form-control mb-5 rounded-0 inputfelt" id="kundenummer" aria-describedby="emailHelp" placeholder="Skriv kundenummer her" required>
					</div>
					<!-- Flight info -->
					<h3>&nbsp;&nbsp;Fly</h3>
					<div>
						<label for="flytil">Flynummer til</label>
						<input type="text" name="fto" class="form-control mb-4 rounded-0 inputfelt" id="flytil" aria-describedby="emailHelp" placeholder="Flynummer til destination" required>
						<label for="flyfra">Flynummer fra</label>
						<input type="text" name="ffrom" class="form-control mb-4 rounded-0 inputfelt" id="flyfra" aria-describedby="emailHelp" placeholder="Flynummer fra destination" required>
						<label for="exampleInputEmail1">Upload billetter</label>
						<input type="file" name="fupload" class="form-control-file mb-5 rounded-0 inputfelt" id="exampleFormControlFile6">
					</div>
					<!-- Hotel info -->
					<h3>&nbsp;&nbsp;Hotel</h3>
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
							<select class="custom-select mr-sm-2 mb-3 rounded-0 inputfelt" name="hotelid" id="inlineFormCustomSelect4">
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
    					<input type="file" class="form-control-file inputfelt" name="hupload" id="exampleFormControlFile5">
						</div>
					</div>
					<!-- Car rental info -->
					<h3>&nbsp;&nbsp;Billeje</h3>
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
								<input class="inputfelt" type="time" id="spinner1" name="cStartTime" value="18:00">
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
								<input class="inputfelt" type="time" id="spinner2" name="cEndTime" value="18:00">
							</p>
						</div>
						<!-- Car selector -->
						<div class="row mb-5">
							<label for="inflineFormCustomSelect3">Bil</label>
							<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0 inputfelt" name="carid" id="inlineFormCustomSelect3">
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
							<input type="file" class="form-control-file inputfelt" name="cupload" id="exampleFormControlFile1">
						</div>
					</div>
					<!-- Excursion info -->
					<h3>&nbsp;&nbsp;Oplevelser</h3>
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
								<input class="inputfelt" type="time" id="spinner3" name="eStartTime" value="18:00">
							</p>
						</div>
						<!-- Excursion selector -->
						<div class="row mb-5">
							<label for="exampleInputEmail1">Oplevelse</label>
							<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0 inputfelt" name="experienceid" id="inlineFormCustomSelect2">
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
							<input type="file" class="form-control-file inputfelt" name="eupload" id="exampleFormControlFile2">
						</div>
					</div>
					<!-- Transport info -->
					<h3>&nbsp;&nbsp;Transport</h3>
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
								<input class="inputfelt" type="time" id="spinner4" name="tStartTime" value="18:00">
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
								<input class="inputfelt" type="time" id="spinner5" name="tEndTime" value="18:00">
							</p>
						</div>
						<!-- Transport selector -->
						<div class="row mb-5">
							<label for="exampleInputEmail1">Transport</label>
							<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0 inputfelt" name="transportid" id="inlineFormCustomSelect">
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
							<input type="file" class="form-control-file inputfelt" name="tupload" id="exampleFormControlFile2">
						</div>
					</div>
					<!-- Dining info -->
					<h3>&nbsp;&nbsp;Spisesteder</h3>
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
								<input class="inputfelt" type="time" id="spinner6" name="dStartTime" value="18:00">
							</p>
						</div>
						<!-- Dining selector -->
						<div class="row mb-5">
							<label for="exampleInputEmail1">Spisested</label>
							<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0 inputfelt" name="diningid" id="inlineFormCustomSelect1">
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
							<input type="file" class="form-control-file inputfelt" name="dupload" id="exampleFormControlFile4">
						</div>
					</div>
				</div> <!-- Accordion ends -->
				<button type="submit" class="btn btn-dark btn-block mt-3 rounded-0">Submit</button>
			</form>
			<div class="mt-4" id="adminlink">
				<a href="https://magnusmultimedia.dk/maketravel/" class="btn btn-secondary btn-sm rounded-0 col-sm-2">To Frontpage</a>
			</div>
		</div>
        
		<!-- header -->		
        <?php include 'footer.php';?>
        <!-- header END -->
        
	</body>
</html>