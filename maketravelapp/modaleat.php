<!doctype html>
<!-- modal hotel -->		
<div class="modal fade bd-example-modal-lg eat" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header bg-success text-white rounded-0">
        <h5 class="modal-title" id="exampleModalCenterTitle">Dining information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
		<?php 
		require_once('dbcon.php');
		$sql = 'SELECT sdate, stime, customers.cid, dinfo.did, dinfo.place, dinfo.street, dinfo.zipcode, dinfo.city, dinfo.description FROM customers, dining, dinfo WHERE customers_cid=customers.cid AND dining_id=dinfo.did;';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($sdate, $stime, $cid, $did, $place, $street, $zipcode, $city, $desc);
		while($stmt->fetch()){
			
			if($kundenummer==$cid){
		?>
	  <div class="modal-body">
      	<div class="card text-center rounded-0">
			<img class="card-img-top img-fluid rounded-0" id="car" src="content/dining/<?php
				switch($did){
					case "1":
						echo "koks_sm.png";
						break;
					case "2":
						echo "aarstova.png";
						break;
					case "3":
						echo "katrinachristiansen_sm.png";
						break;
					case "4":
						echo "barbara-fish-house_sm.png";
						break;
				}
			?>" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title"><?=$place?></h3>
  			</div>
  			<div class="card-body text-left">
				<p class="card-text ml-1"><strong>Address: </strong><?=$street?>, <?=$zipcode?> <?=$city?></p>
				<p class="card-text ml-1"><strong>Arrival: </strong><?=$stime?> - <?=$sdate?></p>
    			<p class="card-text ml-1"><?=$desc?></p>
				<a href="uploads/dining/<?='din' . $kundenummer . '.pdf' ?>" target="_blank" class="btn btn-success ml-1 mb-3 rounded-0 col align-self-center">See Voucher</a>
  			</div>
  			<div class="card-footer text-muted bg-light text-center">
    			<p>Make Travel &nbsp; +298 232100 &nbsp; <a class="links" href="mailto:make@make.fo">make@make.fo</a></p>
  			</div>
		</div>
      </div>
		<?php }}?>
	  <div class="modal-body">
      	<div class="card text-center rounded-0">
			<img class="card-img-top img-fluid rounded-0" id="car" src="img/eat.PNG" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title">Want to explore dining in the Faroe Islands?</h3>
  			</div>
  			<div class="card-body text-left">
    			<p class="card-text ml-1">Make Travel arrange a wide variety of excursions and experiences, including dining experiences. We guarantee the best personal service.</p>
				<p class="card-text ml-1">Do you have questions or are in need of inspiration to new dining adventures, then let Make Travel help you.</p>
				<h5 class="card-text ml-1"><strong>Get in touch by emailing us here:<a class="links" href="mailto:make@make.fo"> make@make.fo</a> or by telephone: +298 232100 (FO) / +45 27771234 (DK)</strong></h5>
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