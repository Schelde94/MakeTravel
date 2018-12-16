<!doctype html>
<!-- modal hotel -->		
<div class="modal fade bd-example-modal-lg car" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header bg-success text-white rounded-0">
        <h5 class="modal-title" id="exampleModalCenterTitle">Car Rental information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
		<?php
		require_once('dbcon.php');
		$sql = 'SELECT sdate, edate, stime, etime, customers.cid, cinfo.cid, cinfo.brand, cinfo.cname, cinfo.description FROM customers, cars, cinfo WHERE customers_cid=customers.cid AND car_id=cinfo.cid;';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($sdate, $edate, $stime, $etime, $cid, $carid, $brand, $carname, $desc);
		while($stmt->fetch()){				
				if($kundenummer==$cid){
		?>		
		
	  <div class="modal-body">
      	<div class="card text-center rounded-0">
			<img class="card-img-top img-fluid rounded-0" id="car" src="content/cars/<?php
				switch($carid){
					case "1":
						echo "c1_sm.png";
						break;
					case "2":
						echo "corsa_sm.png";
						break;
					case "3":
						echo "c3_sm.png";
						break;
					case "4":
						echo "c4_sm.png";
						break;
					case "5":
						echo "v40_sm.png";
						break;
				}
					?>" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title"><?=$brand?> <?=$carname?></h3>
  			</div>
  			<div class="card-body text-left">
				<p class="card-text ml-1"><strong>Pick up: </strong><?=$stime?> - <?=$sdate?> &nbsp;<strong>Drop off: </strong><?=$etime?> - <?=$edate?></p>
    			<p class="card-text ml-1"><?=$description?></p>
				<p class="card-text ml-1"><strong>Price includes:</strong> &nbsp;Free kilometer, hull and personal insurance, 25% VAT<br></p>
				<p class="card-text ml-1"><strong>The following can be bought for an additional fee:</strong><br>
				Extra driver - DKK 150,-<br>
				GPS - DKK 100,- per day<br>
				WiFi - DKK 69,- per day<br>
				Children seat - DKK 100,- per day<br>
				Booster - DKK 50,- per day<br>
				Tunnel - DKK 100,-<br>
				Fuel - DKK 20,- per liter<br><br>

				Deductible DKK 5.000,- per damage - which can be reduced to DKK 500,-, by signing an insurance (SCDW) at DKK 100,- per day.<br><br>

				Read Make Car Rental's "Terms and Conditions" <a class="links" href="https://www.make.fo/en/who-are-we/terms-and-conditions/">HERE!</a>	</p>
				<a href="uploads/cars/<?='cb' . $kundenummer . '.pdf' ?>" target="_blank" class="btn btn-success ml-1 mb-3 rounded-0 col align-self-center">See Voucher</a>
  			</div>
  			<div class="card-footer text-muted bg-light text-center">
    			<p>Make Travel &nbsp; +298 232100 &nbsp; <a class="links" href="mailto:make@make.fo">make@make.fo</a></p>
  			</div>
		</div>
      </div>
		<?php }}?>
	  <div class="modal-body">
      	<div class="card text-center rounded-0">
			<img class="card-img-top img-fluid rounded-0" id="car" src="img/drive.PNG" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title">Need a rental car?</h3>
  			</div>
  			<div class="card-body text-left">
    			<p class="card-text ml-1">Make Car Rental offers you the newest fleet of cars, and guarantee the best personal service.</p>
				<p class="card-text ml-1">All our prices are inlcuded free kilometers, all normal insurances (hull, theft and personal accident isurance) and VAT.</p>
				<h5 class="card-text ml-1"><strong>Book a rental car on the Faroe Islands with Make Car Rental on email: <a class="links" href="mailto:car@make.fo">car@make.fo</a> or call us at tel. +298 23 21 03 (FO) or +45 2777 1234 (DK)</strong></h5>
			</div>
  			<div class="card-footer text-muted bg-light text-center">
    			<p>Make Travel &nbsp; +298 232100 &nbsp; <a class="links" href="mailto:make@make.fo">make@make.fo</a></p>
  			</div>
		</div>
      </div>	
		
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	
<!-- modal hotel END -->