<html>
	<head>
	<title>Create Event</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript">
	$(function() {
		
		$('#datepicker').datepicker({dateFormat:'yy/mm/dd'} );
		$( '#datepicker' ).datepicker();
	 
	});
	
	$(function() {
		
		$('#timepicker').timepicker();
		
		
	});	
	</script>

	</head>
	<style type='text/css'>
		body {
		background: url('original.png');
		}
	</style>
	
	
	<body>
		<form  method='post' action='Event.php'>
			
			<table width='400' border='5' align='center'>
				
				<tr>
					<td colspan='5' align='center'> <h1>New Event</h1></td>
				</tr>
				
				<tr>
					<td align='center'>Event Name:</td>
					<td><input type='text' name='name1' /></td>
				</tr>
				
				<tr>
					<td align='center'>Event Venue :</td>
					<td><input type='text' name='name2' /></td>
				</tr>
					
				<tr>
					<td align='center'>Event Date :</td>
					<td><input type='text' id='datepicker' name='date' /></td>
				</tr>
				
				<tr>
					<td align='center'>Event Time:</td>
					<td><input type='text' id="timepicker"  name='name3' /></td>
				</tr>
				
				<tr>
					<td align='center'>Event Details:</td>
					<td><input type='text' name='name4' /></td>
				</tr>
				
				<?php echo @$_GET['search']; ?> </font>
				
					<td colspan='5' align='center'><input type='submit' 
						name='Submit' value='Submit' /></td>
				</tr>
			</table>
		
		</form>
		
	</body>
</html>


	
<?php
    include('db_connect.php');
 
        if(isset($_POST['Submit'])) {
            
            
            $EventName = $_POST['name1'];
            $EventVenue = $_POST['name2'];
			$EventDate = $_POST['date'];
			$EventTime = $_POST['name3'];
			$EventDetails = $_POST['name4'];
            
            
        if($EventName=='') {
        echo "<script>alert('Enter Event Name')</script>";
        exit();
        }

        if($EventVenue=='') {
        echo "<script>alert('Enter Event Venue')</script>";
        exit();
        }
 
        if($EventDate=='') {
        echo "<script>alert('Enter Event Date')</script>";
        exit();
        }
        
        if($EventTime=='') {
        echo "<script>alert('Enter Event Time')</script>";
        exit();
        }
     
        if($EventDetails=='') {
        echo "<script>alert('Enter Event Details')</script>";
        exit();
        }
     
     
        $query="insert into Events(EventName, EventVenue, EventDate, EventTime, EventDetails) values
        ('$EventName', '$EventVenue', '$EventDate', '$EventTime', '$EventDetails')";
     
        if(mysql_query($query)) {
        echo "<script>window.open('Event.php','_self')</script>";
        }
     
     }
     
    ?>