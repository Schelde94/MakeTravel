<!doctype html>

<?php
$kundenummer = filter_input(INPUT_POST, 'kundenummer');
?>
<!-- modal hotel -->		
<div class="modal fade bd-example-modal-lg hotel" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalCenterTitle">Hotel Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
		
		<?php 
		require_once('dbcon.php');
		$sql = 'SELECT sdate, edate, customers.cid, hinfo.hid, hinfo.place, hinfo.street, hinfo.zipcode, hinfo.city, hinfo.checkin, hinfo.checkout, hinfo.description, hinfo.link FROM customers, hotel, hinfo WHERE customers_cid=customers.cid AND hotel_id=hinfo.hid;';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($sDate, $eDate, $cid, $hid, $place, $street, $zipcode, $city, $checkin, $checkout, $description, $link);
		while($stmt->fetch()){
			
			if($kundenummer==$cid){
		?>
	  <div class="modal-body">
      	<div class="card text-center">
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
			?>
			" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title"><?=$place?></h3>
  			</div>
<<<<<<< HEAD
  			<div class="card-body">
    			<p class="card-text ml-1"><strong>Address: </strong><?=$street?> , <?=$zipcode?> <?=$city?></p>
				<p class="card-text ml-1"><strong>Check in date: </strong><?=date("d-m-Y", strtotime($sDate))?> &nbsp;<strong>Check out date: </strong><?=date("d-m-Y", strtotime($eDate))?></p>
				<p class="card-text ml-1"><?=$description?></p>
				<p class="card-text ml-1"><strong>Check-in: </strong><?=$checkin?> &nbsp;<strong>Check-out: </strong><?=$checkout?></p>
				<p class="card-text ml-1"> Read more about the hotel <a href="https://www.make.fo/en/where-to-stay/hotels/hotel-foeroyar/">HERE!</a></p>
=======
  			<div class="card-body text-left">
    			<p class="card-text ml-1"><strong>Address:</strong> Oyggjarvegur 45, 100 Tórshavn</p>
				<p class="card-text ml-1"><strong>Check in date:</strong> 01/12/18 &nbsp;<strong>Check out date:</strong> 05/12/18</p>
				<p class="card-text ml-1">Hotel Føroyar is the biggest in the Faroe Islands. It has 106 rooms, and all have a great view voer Tórshavn, N+olsoy and the North Atlantic Sea.</p>
				<p class="card-text ml-1">98 of the 106 are double standard rooms, 2 are family rooms, 2 are
				handicap rooms, 2 business rooms and 2 suites. Every room has a
				bathtub/toilet, telephone, radio, TV, hair dryer, and a minibar.<br><br>

				Restaurant, restaurant/bar, conference facilities and internet. Good parking facilities.<br><br> 

				<strong>Check-in:</strong> kl. 14:00 &nbsp;<strong>Check-out:</strong> kl. 11:00<br><br>
				
				Read more about the hotel <a class="links" href="https://www.make.fo/en/where-to-stay/hotels/hotel-foeroyar/">HERE!</a><br><br>
				
				<a href="#" class="btn btn-success mb-3 rounded-0 col align-self-center">See Voucher</a>	
				</p>
>>>>>>> 9398c8ca31e93cca86ce28247ebbf5b009b13bda
				
      			
  			</div>
  			<div class="card-footer text-muted bg-light rounded-0 text-center">
    			<p>Last updated: insert date</p>
  			</div>
		</div>
      </div>
      <?php } ?>
		<?php } ?>
		<!-- Default hotel modal -->
	  <div class="modal-body">
      	<div class="card text-center">
			<img class="card-img-top img-fluid rounded-0" id="car" src="content/hotels/vagar_sm.png" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title">Need a hotel room?</h3>
  			</div>
  			<div class="card-body text-left">
    			<p class="card-text ml-1 lead">If you have a request for accomodation, Make Travel can help you and guarantee the best personal service.</p>
				<h5 class="card-text ml-1"><strong>If you need any information or guidance on accommodation, then please contact us at <a class="links" href="mailto:make@make.fo">make@make.fo</a>  or by telephone: +298 232100 (FO) / +45 27771234 (DK)</strong></h5>
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