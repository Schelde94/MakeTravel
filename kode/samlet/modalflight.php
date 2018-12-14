<!doctype html>

<?php

$kundenummer = filter_input(INPUT_POST, 'kundenummer');



?>

<!-- modal flight -->
<div class="modal fade bd-example-modal-lg fly" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalCenterTitle">Flight Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="card text-center">
			<img class="card-img-top img-fluid rounded-0" id="flight" src="img/flight.PNG" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title">Your booking</h3>
  			</div>
  			<div class="card-body">
				<?php
				require_once('dbcon.php');
				$sql = 'SELECT fto, ffrom, customers.cid, customers.firstname, customers.lastname FROM customers, flight WHERE customers_cid=customers.cid;';
				$stmt = $link->prepare($sql);
				$stmt->execute();
				$stmt->bind_result($fto, $ffrom, $cid, $cfnam, $clnam);
				while($stmt->fetch()){

				if($kundenummer==$cid){?>

				<p class="card-text ml-1"><strong><?=$cfnam. ' ' .$clnam?></strong></p>
				<p class="card-text ml-1"><strong>Arrival:</strong></p>
				<?php
				// Arrival
				//$aurl = 'http://aviation-edge.com/v2/public/timetable?key=9c035e-3feed4&iataCode=FAE&type=arrival';
				$adata = file_get_contents($aurl);
				$aflights = json_decode($adata);
				foreach ($aflights as $aflight){
					$afNumber = $aflight->flight->iataNumber;
					$asTime = new DateTime($aflight->arrival->scheduledTime);
					$aeTime = new DateTime($aflight->arrival->estimatedTime);



					if ($afNumber == $fto){
						echo '<p class="card-text ml-1><strong>Status: </strong>' . ucfirst($aflight->status) . '</p>';
						echo '<p class="card-text ml-1><strong>Schedueld Time: </strong>' . $asTime->format('H:i') . '</p>';
						echo '<p class="card-text ml-1><strong>Estimated Time: </strong>' . $aeTime->format('H:i') . '</p>';
					}

				};

				?>
				<p class="card-text ml-1"><strong>Departure:</strong></p>
				<?php
				// Departure
				//$durl = 'http://aviation-edge.com/v2/public/timetable?key=9c035e-3feed4&iataCode=FAE&type=departure';
				$ddata = file_get_contents($durl);
				$dflights = json_decode($ddata);
				foreach ($dflights as $dflight){
					$dfNumber = $dflight->flight->iataNumber;
					$dsTime = new DateTime($dflight->arrival->scheduledTime);
					$deTime = new DateTime($dflight->arrival->estimatedTime);



					if ($dfNumber == $ffrom){
						echo '<p class="card-text ml-1><strong>Status: </strong>' . ucfirst($dflight->status) . '</p>';
						echo '<p class="card-text ml-1><strong>Schedueld Time: </strong>' . $dsTime->format('H:i') . '</p>';
						echo '<p class="card-text ml-1><strong>Estimated Time: </strong>' . $deTime->format('H:i') . '</p>';
					}

				};

				?>




      			<a href="uploads/flights/<?='ft' . $kundenummer . '.pdf' ?>" target="_blank" class="btn btn-success btn-sm ml-1 mb-3 rounded-0">See Tickets</a>
  			</div>
			<?php } ?>
			<?php } ?>
  			<div class="card-footer text-muted bg-light rounded-0 text-center">
    			<p>Last updated: insert date</p>
  			</div>
		</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal flight END -->
