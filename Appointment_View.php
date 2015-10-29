
<?php

?>


<html>
	<head>
		<title>Appointment List</title>
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript">
	$(function() {
		
		$('#datepicker').datepicker({dateFormat:'yy/mm/dd'} );
		$( '#datepicker' ).datepicker();
	 
	 $('#datepicker2').datepicker({dateFormat:'yy/mm/dd'} );
		$( '#datepicker2' ).datepicker();
	});
	
	</script>
	</head>
	<body>
	<form name="Today"  method="post"  action="#" >
	<br> <br>	
	
	<h2 colspace="10" align="center"> Appointment List</h2>
	<input type="radio" onclick="clicked(); callme(); " value="1" name="rad1" id="rad1" > Today
	<input type="radio"  onclick="clicked(); callme();  " value="2" name="rad1" id="rad2" > Last 7 Days
	<input type="radio"  onclick="clicked(); callme();  " value="2" name="rad1" id="rad2" > This Month

	<br><br><br>
	
	<table width='600' border='5' align='center'>
				
				
				<tr>
					<td align='center'>StudentName</td>
					<td><input type='text' name='name' /></td>
				</tr><tr>
				
				<tr>
					<td align='center'>StudenttID</td>
					<td><input type='id' name='studentid' /></td>
				</tr>
				
				<tr>
					<td align='center'>FromDate</td>
					<td><input type='date' id='datepicker' name='date' /></td>
				</tr>
				
				<tr>
					<td align='center'>ToDate</td>
					<td><input type='date' id='datepicker2' name='date' /></td>
				</tr>
				
					<td colspan='5' align='center' action="Appointment_View.php" method="post"><input type="submit" value="Search" /></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>