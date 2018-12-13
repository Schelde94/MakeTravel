<?php

$firstName = filter_input(INPUT_POST, 'firstname') or die('Missing or illigal fn parameter');
$lastName = filter_input(INPUT_POST, 'lastname') or die('Missing or illigal ln parameter');
$kundeNummer = filter_input(INPUT_POST, 'cid');

$flightTo = filter_input(INPUT_POST, 'fto');
$flightFrom = filter_input(INPUT_POST, 'ffrom');

$hStart = filter_input(INPUT_POST, 'hStartDateVal') or die('Missing or illigal startdate parameter');
$hEnd = filter_input(INPUT_POST, 'hEndDateVal') or die('Missing or illigal enddate parameter');
$hId = filter_input(INPUT_POST, 'hotelid');

$cStart = filter_input(INPUT_POST, 'cStartDateVal');
$cEnd = filter_input(INPUT_POST, 'cEndDateVal');
$cId = filter_input(INPUT_POST, 'carid');

$eStart = filter_input(INPUT_POST, 'eStartDateVal');
$eId = filter_input(INPUT_POST, 'experienceid');

$tStart = filter_input(INPUT_POST, 'tStartDateVal');
$tEnd = filter_input(INPUT_POST, 'tEndDateVal');
$tId = filter_input(INPUT_POST, 'transportid');

$dStart = filter_input(INPUT_POST, 'dStartDateVal');
$dId = filter_input(INPUT_POST, 'diningid');

require_once('dbcon.php');

// Kundeoplysninger
$sql = 'INSERT INTO customers (firstname, lastname, cid) VALUES (?, ?, ?);';
$stmt = $link->prepare($sql);
$stmt->bind_param('ssi', $firstName ,$lastName, $kundeNummer);
$stmt->execute();

// Flyinfo
$sql = 'INSERT INTO flight (fto, ffrom, customers_cid) VALUES (?, ?, ?);';
$stmt = $link->prepare($sql);
$stmt->bind_param('ssi', $flightTo, $flightFrom, $kundeNummer);
$stmt->execute();
//Fly upload
if(isset($_FILES['fupload'])):
$tmp_name = $_FILES['fupload']['tmp_name'];
$new_name = 'uploads/flights/'. 'ft' . $kundeNummer . '.pdf';
move_uploaded_file($tmp_name,$new_name);
$uploadOk = 1;
endif;

// Hotel booking
if(isset($hId)){
	$sql = 'INSERT INTO hotel (sdate, edate, hotel_id, customers_cid) VALUES (?, ?, ?, ?);';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ssii', $hStart, $hEnd, $hId, $kundeNummer);
	$stmt->execute();
	//Hotel upload
	if(isset($_FILES['hupload'])):
	$tmp_name = $_FILES['hupload']['tmp_name'];
	$new_name = 'uploads/hotel/'. 'hb' . $kundeNummer . '.pdf';
	move_uploaded_file($tmp_name, $new_name);
	endif;
}


// Car booking
if(isset($cId)){
	$sql = 'INSERT INTO cars (sdate, edate, car_id, customers_cid) VALUES (?, ?, ?, ?);';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ssii', $cStart, $cEnd, $cId, $kundeNummer);
	$stmt->execute();
	// Car voucher upload
	if(isset($_FILES['cupload'])):
	$tmp_name = $_FILES['cupload']['tmp_name'];
	$new_name = 'uploads/cars/' . 'cb' . $kundeNummer . '.pdf';
	move_uploaded_file($tmp_name, $new_name);
	endif;
}

// Experiences
if(isset($eId)){
	$sql = 'INSERT INTO exp (sdate, exp_id, customers_cid) VALUES (?, ?, ?);';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('sii', $eStart, $eId, $kundeNummer);
	$stmt->execute();
	// Car voucher upload
	if(isset($_FILES['eupload'])):
	$tmp_name = $_FILES['eupload']['tmp_name'];
	$new_name = 'uploads/exp/' . 'exp' . $kundeNummer . '.pdf';
	move_uploaded_file($tmp_name, $new_name);
	endif;
}

// Transport
if(isset($tId)){
	$sql = $sql = 'INSERT INTO trans (sdate, edate, trans_id, customers_cid) VALUES (?, ?, ?, ?);';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ssii', $tStart, $tEnd, $tId, $kundeNummer);
	$stmt->execute();
	// Transport voucher upload
	if(isset($_FILES['tupload'])):
	$tmp_name = $_FILES['tupload']['tmp_name'];
	$new_name = 'uploads/trans/' . 'tra' . $kundeNummer . '.pdf';
	move_uploaded_file($tmp_name, $new_name);
	endif;
}

// Dining
if(isset($eId)){
	$sql = 'INSERT INTO dining (sdate, dining_id, customers_cid) VALUES (?, ?, ?);';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('sii', $eStart, $eId, $kundeNummer);
	$stmt->execute();
	// Car voucher upload
	if(isset($_FILES['dupload'])):
	$tmp_name = $_FILES['dupload']['tmp_name'];
	$new_name = 'uploads/dining/' . 'din' . $kundeNummer . '.pdf';
	move_uploaded_file($tmp_name, $new_name);
	endif;
}


echo header("location: admin.php");
?>
