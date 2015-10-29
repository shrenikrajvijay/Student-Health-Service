<html>
	<head>
		<title>Add Appointment</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript">
		$(function() {
		
		//$('#datepicker1').datepicker({dateFormat:'yy/mm/dd'} );
		//$('#datepicker1').datepicker();
	 
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
		<form  method='post' action='akhila_Add_New_Appointment.php'>
			
			<table width='400' border='5' align='center'>
				
				<tr>
					<td colspan='5' align='center'> <h1>Add Appointment</h1></td>
				</tr>
				
				<tr>
					<td align='center'>Student ID :</td>
					<td><input type='text' name='id' /></td>
				</tr><tr>
				
				<tr>
					<td align='center'>Reason :</td>
					<td><input type='text' name='name1' /></td>
				</tr><tr>
					
				<tr>
					<td align='center'>Speciality :</td>
					<td><input type='text' name='name2' /></td>
				</tr>
				
				<tr>
					<td align='center'>Appointment Date :</td>
					<td><input type='date' name='name3' id='datepicker1'  /></td>
				</tr>
				
				<tr>
					<td align='center'>Appointment Time :</td>
					<td><input type='time' id='timepicker' name='name4' /></td>
				</tr>
				
				<tr>
					<td align='center'>Campaigns :</td>
					<td><input type='text' name='name5' /></td>
				</tr>
				
				<tr>
					<td align='center'>Actions :</td>
					<td><input type='text' name='name6' /></td>
				</tr>
				
				<tr>
					<td align='center'>Notes :</td>
					<td><input type='text' name='name7' /></td>
				</tr>
				
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
	
	$StudentID = $_POST['id'];
	$Reason = $_POST['name1'];
	$Speciality = $_POST['name2'];
	$AppointmentDate = $_POST['name3'];
	$AppointmentTime = $_POST['name4'];
	$Campaign = $_POST['name5'];
	$Actions = $_POST['name6'];
	$Notes = $_POST['name7'];
	
	if($StudentID=='') {
			echo "<script>alert('Enter StudentID')</script>";
			exit();
		}
	
		if($Reason=='') {
			echo "<script>alert('Enter Reason')</script>";
			exit();
		}
	
		if($Speciality=='') {
		echo "<script>alert('Enter Speciality')</script>";
		exit();
		}
		
		if($AppointmentDate=='') {
			echo "<script>alert('Enter AppointmentDate')</script>";
			exit();
		}
	
		if($AppointmentTime=='') {
			echo "<script>alert('Enter AppointmentTime')</script>";
			exit();
		}
		
		if($Campaign=='') {
			echo "<script>alert('Enter Campaign')</script>";
			exit();
		}
	
		if($Actions=='') {
			echo "<script>alert('Enter Actions')</script>";
			exit();
		}
	
		if($Notes=='') {
			echo "<script>alert('Enter Notes')</script>";
			exit();
		}
		
		$check_user = "select * from studentmaster where StudentID=
		'$StudentID'";
	
		$run = mysql_query($check_user);

		if(mysql_num_rows($run)>0) {
		
			echo "<script>alert(' Appointment for $StudentID has been 
			created')</script>";
	
		}
		else {
			echo "<script>alert('$StudentID has not registered')</script>";
		}
	
		$query="INSERT INTO appointmentmaster(StudentID, Reason, Speciality, AppointmentDate, AppointmentTime, 
		Campaign, Actions, Notes) values ('$StudentID','$Reason','$Speciality','$AppointmentDate',
		'$AppointmentTime','$Campaign','$Actions','$Notes')";
		$result = mysql_query($query) or die(mysql_error()."[".$query."]");
			$query="insert into emailqueue (student_id,template_id,appointmentID) values ('".$StudentID."',142,".mysql_insert_id().")";
			$result = mysql_query($query);
	
			echo "<script>alert('Appointment registration successful')</script>";
			echo "<script>window.open('akhila_Add_New_Appointment.php','_self')</script>";
	
	
	}
	
	?>
	
	