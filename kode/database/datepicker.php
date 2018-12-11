<!DOCTYPE html>
<html>
    <head>
        <title>jQuery DatePicker</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
  				$('#datepicker').datepicker({
					onSelect: function(dateText) {
						$('#datepicker2').datepicker("setDate", $(this).datepicker("getDate"));
					}
				});
			});
			
			$(function() {
  				$("#datepicker2").datepicker({
					dateFormat: "yy-mm-dd"
				});
			});
			
        </script>

    </head>
    <body>
        <form action="showDate.php" method="post">
            <label for="datepicker">Enter date:</label>
			<div class="mr-5 rounded-0" id="datepicker"></div>
			<input type="hidden" name="chosenDate" id="datepicker2">
            <input type="submit" value="Submit">
        </form>
            
		
		<script>
			
		</script>
    </body>
</html>