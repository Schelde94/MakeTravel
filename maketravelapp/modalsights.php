<!doctype html>
<!-- modal hotel -->		
<div class="modal fade bd-example-modal-lg sights" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header bg-success text-white rounded-0">
        <h5 class="modal-title" id="exampleModalCenterTitle">Excursions information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
		<?php
		require_once('dbcon.php');
		$sql = 'SELECT sdate, stime, customers.cid, einfo.eid, einfo.ename, einfo.shortdesc, einfo.longdesc, einfo.adultprice, einfo.childprice FROM customers, exp, einfo WHERE customers_cid=customers.cid AND exp_id=einfo.eid;';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($sdate, $stime, $cid, $eid, $ename, $shortdesc, $longdesc, $adultprice, $childprice);
		while($stmt->fetch()){
			if($kundenummer==$cid){
		?>
      <div class="modal-body">
      	<div class="card text-center rounded-0">
			<img class="card-img-top img-fluid rounded-0" id="car" src="content/excursions/<?php
			switch($eid){
					case "1":
						echo "islands_sm.png";
						break;
					case "2":
						echo "mykines_sm.png";
						break;
					case "3":
						echo "horse_sm.png";
						break;
					case "4":
						echo "bird-cliffs_sm.png";
						break;
					case "5":
						echo "nordlysid_sm.png";
						break;
				}													
			?>" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title"><?=$ename?></h3>
  			</div>
  			<div class="card-body text-left">
				<p class="card-text ml-1"><strong>Departure: </strong><?=$stime?> - <?=$sdate?></p>
    			<p class="card-text ml-1"><?=$shortdesc?></p>
				<p class="card-text ml-1"><?=$longdesc?></p>
				
				<a href="uploads/exp/<?='exp' . $kundenummer . '.pdf' ?>" target="_blank" class="btn btn-success ml-1 mb-3 rounded-0 col align-self-center">See Voucher</a>
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
    			<h3 class="card-title">Want to explore the Faroe Islands?</h3>
  			</div>
  			<div class="card-body text-left">
    			<p class="card-text ml-1">Make Travel arrange a wide variety of excursions and experiences, and guarantee the best personal service.</p>
				<p class="card-text ml-1">Do you have questions or are in need of inspiration to a new adventure, then let Make Travel help you.</p>
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