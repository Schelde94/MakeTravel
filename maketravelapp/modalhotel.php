<!doctype html>
<!-- modal hotel -->		
<div class="modal fade bd-example-modal-lg hotel" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header bg-success text-white rounded-0">
        <h5 class="modal-title" id="exampleModalCenterTitle">Hotel Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
		<?php
		require_once('dbcon.php');
		$sql = 'SELECT sdate, edate, customers.cid, hinfo.hid, hinfo.place, hinfo.street, hinfo.zipcode, hinfo.city, hinfo.description, hinfo.checkin, hinfo.checkout, hinfo.link FROM customers, hotel, hinfo WHERE customers_cid=customers.cid AND hotel_id=hinfo.hid;';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($sdate, $edate, $cid, $hid, $place, $street, $zipcode, $city, $desc, $checkin, $checkout, $hlink);
		while($stmt->fetch()){				
				if($kundenummer==$cid){
		?>	
		
	  <div class="modal-body">
      	<div class="card text-center rounded-0">
			<img class="card-img-top img-fluid rounded-0" id="hotel" src="content/hotels/<?php
				switch($hid){
					case "1":
						echo "foroyar_sm.png";
						break;
					case "2":
						echo "hafnia_sm.png";
						break;
					case "3":
						echo "torshavn_sm.png";
						break;
					case "4":
						echo "streym_sm.png";
						break;
					case "5":
						echo "vagar_sm.png";
						break;
					case "6":
						echo "runavik_sm.png";
						break;
					case "7":
						echo "klaksvik_sm.png";
						break;
					case "8":
						echo "tvoroyri_sm.png";
						break;
					case "9":
						echo "bakkin_sm.png";
						break;
					case "10":
						echo "gjaargardur_sm.png";
						break;
					case "11":
						echo "hugo_sm.png";
						break;
					case "12":
						echo "skalavik_sm.png";
						break;
					case "13":
						echo "ro_sm.png";
						break;
				}
			?>" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title"><?=$place?></h3>
  			</div>
  			<div class="card-body text-left">
    			<p class="card-text ml-1"><strong>Address: </strong><?=$street?> , <?=$zipcode?> <?=$city?></p>
				<p class="card-text ml-1"><strong>Check in date: </strong><?=$sdate?> &nbsp;<strong>Check out date: </strong><?=$edate?></p>
				<p class="card-text ml-1"><?=$desc?></p>
				
				Read more about the hotel <a class="links" href="https://www.make.fo/en/where-to-stay/hotels/<?=$hlink?>/" target="_blank">HERE!</a><br><br>
				
				<a href="uploads/hotel/<?='hb' . $kundenummer . '.pdf' ?>" target="_blank" class="btn btn-success mb-3 rounded-0 col align-self-center">See Voucher</a>	
			</div>
  			<div class="card-footer text-muted bg-light rounded-0 text-center">
    			<p>Make Travel &nbsp; +298 232100 &nbsp; <a class="links" href="mailto:make@make.fo">make@make.fo</a></p>
  			</div>
		</div>
      </div>
	  <?php }}?>
      
	  <div class="modal-body">
      	<div class="card text-center rounded-0">
			<img class="card-img-top img-fluid rounded-0" id="car" src="content/hotels/vagar_sm.png" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title">Need a hotel room?</h3>
  			</div>
  			<div class="card-body text-left">
    			<p class="card-text ml-1">If you have a request for accomodation, Make Travel can help you and guarantee the best personal service.</p>
				<h5 class="card-text ml-1"><strong>If you need any information or guidance on accommodation, then please contact us at <a class="links" href="mailto:make@make.fo">make@make.fo</a>  or by telephone: +298 232100 (FO) / +45 27771234 (DK)</strong></h5>
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