<!doctype html>
<!-- modal hotel -->		
<div class="modal fade bd-example-modal-lg transport" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header bg-success text-white rounded-0">
        <h5 class="modal-title" id="exampleModalCenterTitle">Transportation information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
		<?php 
		require_once('dbcon.php');
		$sql = 'SELECT sdate, edate, stime, etime, customers.cid, tinfo.tid, tinfo.ttype FROM customers, trans, tinfo WHERE customers_cid=customers.cid AND trans_id=tinfo.tid;';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($sdate, $edate, $stime, $etime, $cid, $tid, $type);
		while($stmt->fetch()){
			
			if($kundenummer==$cid){
		?>
	  <div class="modal-body">
      	<div class="card text-center rounded-0">
			<img class="card-img-top img-fluid rounded-0" id="car" src="content/transport/<?php
				switch($tid){
					case "1":
						echo "bus.png";
						break;
					case "2":
						echo "boat.png";
						break;
					case "3":
						echo "helicopter_sm.png";
						break;
				}
			?>" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title"><?=$type?></h3>
  			</div>
  			<div class="card-body text-left">
				<p class="card-text ml-1"><strong>Departure: </strong><?=$stime?> - <?=$sdate?> &nbsp;<strong>Return: </strong><?=$etime?> - <?=$edate?></p>
				<a href="uploads/trans/<?='tra' . $kundenummer . '.pdf' ?>" target="_blank" class="btn btn-success ml-1 mb-3 rounded-0 col align-self-center">See Voucher</a>
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