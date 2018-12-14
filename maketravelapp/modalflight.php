<!doctype html>
<!-- modal flight -->		
<div class="modal fade bd-example-modal-lg fly" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalCenterTitle">Flight Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="card text-center">
			<img class="card-img-top img-fluid rounded-0" id="flight" src="content/flight/atlanticairways.png" alt="Card image cap">
  			<div class="card-header bg-dark text-white">
    			<h3 class="card-title">Your booking</h3>
  			</div>
  			<div class="card-body text-left">
    			<p class="card-text ml-1"><strong>Name:</strong> John Doe </p>
				<p class="card-text ml-1"><strong>Departure:</strong> 11.30 - 01/12/18 &nbsp;<strong>Arrival:</strong> 12.30 - 01/12/18</p>
				<p class="card-text ml-1"><strong>From:</strong> Copenhagen  <strong>To:</strong> Faroe Islands</p>
				<p class="card-text ml-1"><strong>Flight number Departure:</strong> RC 456 &nbsp;<strong>Flight number Return:</strong> RC 453</p>
      			<a  href="#" class="btn btn-success ml-1 mb-3 rounded-0 col align-self-center">See Tickets</a>
  			</div>
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