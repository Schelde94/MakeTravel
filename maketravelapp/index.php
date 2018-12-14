<!doctype html>
<html lang="en">
<head>
<title>Make Travel Admin</title>
<!-- head -->		
<?php include 'head.php';?>
<!-- head END -->
</head>

<body>
	<!-- header -->		
	<?php include 'header.php';?>
	<!-- header END -->
	
	<div class="container mb-5">
		<form>
  			<div class="form-group row">
    			<label for="inputEmail3" class="col-sm-2 col-form-label text-white mt-5">Customer number</label>
    			<div class="col-sm-8">
      			<input type="number" class="form-control mt-5 rounded-0" id="inputEmail3" placeholder="Write your customer number here!">
    			</div>
				<button type="submit" class="btn btn-dark col-sm-8 col-md mx-auto mt-5 rounded-0">Enter</button>
  			</div>
		</form>
	</div>
	
	<!-- footer -->		
	<?php include 'footer.php';?>
	<!-- footer END -->
    
	<!-- modal flight -->		
	<?php include 'modalflight.php';?>
	<!-- modal flight END -->
	<!-- modal hotel -->		
	<?php include 'modalhotel.php';?>
	<!-- modal hotel END -->		
	<!-- modal carrental -->		
	<?php include 'modalcar.php';?>
	<!-- modal carrental END -->
	<!-- modal sights -->		
	<?php include 'modalsights.php';?>
	<!-- modal sights END -->
	<!-- modal transport -->		
	<?php include 'modaltransport.php';?>
	<!-- modal transport END -->
	<!-- modal eating -->		
	<?php include 'modaleat.php';?>
	<!-- modal eating END -->
	<!-- modal other -->		
	<?php include 'modalemergency.php';?>
	<!-- modal other END -->
	<!-- modal general -->		
	<?php include 'modalgeneral.php';?>
	<!-- modal general END -->
</body>
</html>