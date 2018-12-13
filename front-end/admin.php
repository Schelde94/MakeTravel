<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
<title>Make Travel Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,700" rel="stylesheet">
	
<link rel="stylesheet" href="styles.css">
	
<script src="timescripts.js"></script>
	
</head>

<body>
	<div class="container-fluid bg-white mb-5">
		<div class="row justify-content-center">
			<img class="mb-4 mt-4 img-fluid d-none d-sm-block" src="img/logo.png">
			<img class="mb-4 mt-4 img-fluid d-sm-none" src="img/logo-sm.png">
		</div>
	</div>
	
	<div class="container">
		<form>
			<div class="form-group" id="accordion"> 
				<h3>Kunde</h3>
  				<div class="col-auto rounded-0">
    				<label for="exampleInputEmail1">Fornavn</label>
    				<input type="email" class="form-control mb-4 rounded-0" id="fornavn" aria-describedby="emailHelp" placeholder="Skriv fornavn her" required>
					<label for="exampleInputEmail1">Efternavn</label>
    				<input type="email" class="form-control mb-4 rounded-0" id="efternavn" aria-describedby="emailHelp" placeholder="Skriv efternavn her" required>
					<label for="exampleInputEmail1">Kunde nr.</label>
    				<input type="email" class="form-control mb-5 rounded-0" id="kundenummer" aria-describedby="emailHelp" placeholder="Skriv kundernummer her" required>
  				</div>
				
				<h3>Fly</h3>
  				<div>
    				<label for="exampleInputEmail1">Flynummer til</label>
    				<input type="email" class="form-control mb-4 rounded-0" id="flytil" aria-describedby="emailHelp" placeholder="Flynummer til destination" required>
					<label for="exampleInputEmail1">Flynummer fra</label>
    				<input type="email" class="form-control mb-4 rounded-0" id="flyfra" aria-describedby="emailHelp" placeholder="Flynummer fra destination" required>
					<label for="exampleInputEmail1">Upload billetter</label>
    				<input type="file" class="form-control-file mb-5 rounded-0" id="exampleFormControlFile6">
  				</div>
				
				<h3>Hotel</h3>
  				<div>
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Check ind</label>
    					<div class="mr-5 rounded-0" id="datepicker1"></div>
						<label class="mr-3" for="exampleInputEmail1">Check ud</label>
    					<div class="mr-5 rounded-0" id="datepicker2"></div>
						
					</div>
					<div class="row mb-5">
						<label for="exampleInputEmail1">Hotel</label>
    					<select class="custom-select mr-sm-2 mb-3 rounded-0" id="inlineFormCustomSelect4">
        					<option selected>Vælg hotel</option>
        					<option value="1">Hotel Føroyar</option>
        					<option value="2">Hotel Tórshavn</option>
        					<option value="3">Hotel Vágar</option>
      					</select>
						<label for="exampleInputEmail1">Upload voucher</label>
    					<input type="file" class="form-control-file" id="exampleFormControlFile5">
					</div>
					
  				</div>
				
				<h3>Billeje</h3>
  				<div>
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Pick up</label>
    					<div class="mr-5 rounded-0" id="datepicker3"></div>
						<p>
  						<label for="spinner1">Time:</label>
  						<input type="time" id="spinner1" name="spinner1" value="18:00">
						</p>
					</div>
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Drop off</label>
    					<div class="mr-5 rounded-0" id="datepicker4"></div>
						<p>
  						<label for="spinner2">Time:</label>
  						<input type="time" id="spinner2" name="spinner2" value="18:00">
						</p>
					</div>
					<div class="row mb-5">
						<label for="exampleInputEmail1">Bil</label>
    					<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0" id="inlineFormCustomSelect3">
        					<option selected>Vælg bil type</option>
        					<option value="1">Citroen C1 Kat. A</option>
        					<option value="2">Opel Corsa Kat. B</option>
        					<option value="3">Citroen C3 Kat. C</option>
							<option value="3">Citroen C4 Kat. D</option>
							<option value="3">Mitsubishi ASX Kat. M</option>
      					</select>
						<label for="exampleInputEmail1">Upload voucher</label>
    					<input type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
					
  				</div>
				
				<h3>Oplevelser</h3>
  				<div>
					<div class="row mb-5">
					<label class="mr-3" for="exampleInputEmail1">Dato</label>
    				<div class="mr-5 rounded-0" id="datepicker5"></div>
					<p>
  						<label for="spinner3">Time:</label>
  						<input type="time" id="spinner3" name="spinner3" value="18:00">
					</p>
					</div>
					<div class="row mb-5">
						<label for="exampleInputEmail1">Oplevelse</label>
    					<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0" id="inlineFormCustomSelect2">
        					<option selected>Vælg oplevelse</option>
        					<option value="1">Oplevelse 1</option>
        					<option value="2">Oplevelse 2</option>
        					<option value="3">Oplevelse 3</option>
							<option value="3">Oplevelse 4</option>
							<option value="3">Oplevelse 5</option>
      					</select>
						<label for="exampleInputEmail1">Upload voucher</label>
    					<input type="file" class="form-control-file" id="exampleFormControlFile2">
					</div>
  				</div>
				
				<h3>Transport</h3>
  				<div>
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Departure</label>
    					<div class="mr-5 rounded-0" id="datepicker6"></div>
						<p>
  							<label for="spinner4">Time:</label>
  							<input type="time" id="spinner4" name="spinner4" value="18:00">
						</p>
					</div>
					<div class="row mb-5">	
						<label class="mr-3" for="exampleInputEmail1">Return</label>
    					<div class="mr-5 rounded-0" id="datepicker7"></div>
						<p>
  							<label for="spinner5">Time:</label>
  							<input type="time" id="spinner5" name="spinner5" value="18:00">
						</p>
					</div>
					<div class="row mb-5">
						<label for="exampleInputEmail1">Transport</label>
    					<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0" id="inlineFormCustomSelect">
        					<option selected>Vælg transport type</option>
        					<option value="1">Transport 1</option>
        					<option value="2">Transport 1</option>
        					<option value="3">Transport 1</option>
							<option value="3">Transport 1</option>
							<option value="3">Transport 1</option>
      					</select>
						<label for="exampleInputEmail1">Upload voucher</label>
    					<input type="file" class="form-control-file" id="exampleFormControlFile3">
					</div>
  				</div>
				
				<h3>Spisesteder</h3>
  				<div>
					<div class="row mb-5">
						<label class="mr-3" for="exampleInputEmail1">Dato</label>
    					<div class="mr-5 rounded-0" id="datepicker8"></div>
						<p>
  							<label for="spinner6">Time:</label>
  							<input type="time" id="spinner6" name="spinner6" value="18:00">
						</p>
					</div>
					<div class="row mb-5">
						<label for="exampleInputEmail1">Spisested</label>
    					<select class="col-auto custom-select mr-sm-2 mb-3 rounded-0" id="inlineFormCustomSelect1">
        					<option selected>Vælg spisested</option>
        					<option value="1">Spisested 1</option>
        					<option value="2">Spisested 1</option>
        					<option value="3">Spisested 1</option>
							<option value="3">Spisested 1</option>
							<option value="3">Spisested 1</option>
      					</select>
						<label for="exampleInputEmail1">Upload voucher</label>
    					<input type="file" class="form-control-file" id="exampleFormControlFile4">
					</div>
  				</div>
				
				
			</div>
			
			<button type="submit" class="btn btn-dark btn-block mt-3 rounded-0">Submit</button>
		</form>
	</div>
	
	<div class="container-fluid mt-3 mb-5">
		<div class="row justify-content-center">
			<h1 class="logoname"><strong>make</strong>travel</h1>
		</div>
	</div>

		
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="/resources/demos/external/globalize/globalize.js"></script>
<script src="/resources/demos/external/globalize/globalize.culture.de-DE.js"></script>
<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>		
	
<script src="scripts.js"></script>
</body>
</html>