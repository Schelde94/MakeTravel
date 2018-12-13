<!doctype html>
<?php

$kundenummer = $_POST['kundenummer'];

?>

<!-- modal hotel -->		
<div class="modal fade bd-example-modal-lg hotel" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalCenterTitle">Hotel Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<?php
		require_once('dbcon.php');
		$sql = 'SELECT sdate, edate, customers.cid, hinfo.place, hinfo.street, hinfo.zipcode, hinfo.city, hinfo.description, hinfo.checkin, hinfo.checkout, hinfo.link FROM customers, hotel, hinfo WHERE customers_cid=customers.cid AND hotel_id=hinfo.hid;';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($sdate, $edate, $cid, $place, $street, $zip, $city, $description, $checkin, $checkout, $link);
		while($stmt->fetch()){				
				
				if($kundenummer==$cid){
					
					
		
		?>		
	  <div class="modal-body">
      	<div class="card text-center">
			<img class="card-img-top img-fluid rounded-0" id="hotel" src="img/hotelfo.PNG" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title"><?=$place?></h3>
  			</div>
  			<div class="card-body">
    			<p class="card-text ml-1"><?=$street?></p>
				<p class="card-text ml-1"><?=$zip?> <?=$city?></p>
				<p class="card-text ml-1"><?=$description?></p>
				<a href="https://www.make.fo/da/hvor-vil-du-bo/hoteller/<?=$link?>/" target="_blank"><p class="card-text ml-1">Læs mere om hotellet her LINK</p></a>
				<p class="card-text ml-1"><strong>Time for check in: </strong><?=$checkin?></p>
				<p class="card-text ml-1"><strong>Time for check out: </strong><?=$checkout?></p>
				<p class="card-text ml-1"><strong>Check in: </strong><?=$sdate?></p>
				<p class="card-text ml-1"><strong>Check out: </strong><?=$edate?></p>
      			<a href="#" class="btn btn-success btn-sm ml-1 mb-3 rounded-0">See Voucher</a>
  			</div>
  			<div class="card-footer text-muted bg-light rounded-0 text-center">
    			<p>Last updated: insert date</p>
  			</div>
		</div>
      </div>
      <?php } ?>
	  <?php } ?>
	  <div class="modal-body">
      	<div class="card text-center">
			<img class="card-img-top img-fluid rounded-0" id="car" src="img/hotelfo.PNG" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title">Need a hotel room?</h3>
  			</div>
  			<div class="card-body">
    			<p class="card-text ml-1 lead">If you have a request for accomodation, Make Travel can help you and guarantee the best personal service.</p>
				<h5 class="card-text ml-1"><strong>If you need any information or guidance on accommodation, then please contact us at <a href="mailto:make@make.fo">make@make.fo</a>  or by telephone: +298 232100 (FO) / +45 27771234 (DK)</strong></h5>
  			</div>
  			<div class="card-footer text-muted bg-light text-center">
    			<p>Make Travel</p>
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