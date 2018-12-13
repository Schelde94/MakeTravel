<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<body>
		
		<form action="<?=$_SERVER['PHP_SELF']?>">
			<input type="text" name="flynummer">
			<button type="submit">Find fly</button>
		</form>
		<div>
	<?php 
	
		
			$flynummer = filter_input(INPUT_GET, 'flynummer');
			
			$url = 'http://aviation-edge.com/v2/public/timetable?key=9c035e-3feed4&iataCode=FAE&type=arrival';

			$data = file_get_contents($url);

			$flights = json_decode($data);

			foreach ($flights as $flight){
				$fNumber = $flight->flight->iataNumber;
				$sTime = new DateTime($flight->arrival->scheduledTime);
				$eTime = new DateTime($flight->arrival->estimatedTime);
				
				
				
				if ($fNumber == $flynummer){
					echo '<p>Status: ' . ucfirst($flight->status) . '</p>';
					echo '<p>Skemalagt tid: ' . $sTime->format('H:i') . '</p>';
					echo '<p>Forventet tid: ' . $eTime->format('H:i') . '</p>';
				}
				
			};

	?>
		</div>
	
	</body>
</html>