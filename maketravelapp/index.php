<!doctype html>
<html lang="en">
<head>
<title>Make Travel Companion</title>
<!-- head -->		
<?php include 'head.php';?>
<!-- head END -->
</head>

<body>
	<!-- header -->		
	<?php include 'header.php';?>
	<!-- header END -->
	
	<div class="container mb-5 mt-5">
		<form action="home.php" method="post">
  			<div class="form-group row">
    			<label for="inputEmail3" class="col-sm-2 col-form-label text-white mt-5">Customer number</label>
    			<div class="col-sm-8">
      				<input name="kundenummer" type="number" class="form-control mt-5 rounded-0" id="inputEmail3" placeholder="Write your customer number here!">
    			</div>
				<button type="submit" class="btn btn-dark col-sm-8 col-md mx-auto mt-5 rounded-0">Enter</button>
  			</div>
		</form>
	</div>
	
	<!-- footer -->		
	<?php include 'footer.php';?>
	<!-- footer END -->
    
</body>
</html>