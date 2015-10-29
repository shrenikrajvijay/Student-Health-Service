<?php 

include('db_connect.php');
if(isset($_POST['GetAppointment']) || isset($_POST['GetAppointmentByID']) || isset($_POST['GetAppointmentByName']) || isset($_POST['GetAppointmentByIDDate']) || isset($_POST['GetAppointmentByNameDate']) )
{
	

if(isset($_POST['GetAppointment']))
{


	$frmDate=$_POST['frmDate'];
	$toDate=$_POST['toDate'];
	
	
	$query = "SELECT a.AppointmentID,a.AppointmentTime,a.Actions,a.Campaign,a.Notes,a.Reason,a.Speciality,a.AppointmentDate, s.StudentID, s.StudentName,s.StudentEmail,s.StudentPhone 
				FROM appointmentmaster a, studentmaster s 
				WHERE a.IsCancel=0 and a.StudentID=s.StudentID and (a.AppointmentDate BETWEEN '".$frmDate."' and '".$toDate."')";

		
}
if(isset($_POST['GetAppointmentByID']))
{
	$sid=$_POST['sid'];
	//$toDate=$_POST['toDate'];
	
	
	$query = "SELECT a.AppointmentID,a.AppointmentTime,a.Actions,a.Campaign,a.Notes,a.Reason,a.Speciality,a.AppointmentDate, s.StudentID, s.StudentName,s.StudentEmail,s.StudentPhone 
				FROM appointmentmaster a, studentmaster s 
				WHERE a.IsCancel=0 and a.StudentID=s.StudentID and s.StudentID=".$sid;
	
}

if(isset($_POST['GetAppointmentByName']))
{
	$sName=$_POST['sName'];
	//$toDate=$_POST['toDate'];
	
	
	$query = "SELECT a.AppointmentID,a.AppointmentTime,a.Actions,a.Campaign,a.Notes,a.Reason,a.Speciality,a.AppointmentDate, s.StudentID, s.StudentName,s.StudentEmail,s.StudentPhone 
				FROM appointmentmaster a, studentmaster s 
				WHERE a.IsCancel=0 and a.StudentID=s.StudentID and s.StudentName='".$sName."'";
	
}


if(isset($_POST['GetAppointmentByIDDate']))
{
	$sid=$_POST['sid'];
	$frmDate=$_POST['frmDate'];
	$toDate=$_POST['toDate'];
	
	
	$query = "SELECT a.AppointmentID,a.AppointmentTime,a.Actions,a.Campaign,a.Notes,a.Reason,a.Speciality,a.AppointmentDate, s.StudentID, s.StudentName,s.StudentEmail,s.StudentPhone 
				FROM appointmentmaster a, studentmaster s 
				WHERE a.IsCancel=0 and a.StudentID=s.StudentID and s.StudentID=".$sid." and (a.AppointmentDate BETWEEN '".$frmDate."' and '".$toDate."')";

	
}
if(isset($_POST['GetAppointmentByNameDate']))
{
	$sName=$_POST['sName'];
	$frmDate=$_POST['frmDate'];
	$toDate=$_POST['toDate'];
	
	
	$query = "SELECT a.AppointmentID,a.AppointmentTime,a.Actions,a.Campaign,a.Notes,a.Reason,a.Speciality,a.AppointmentDate, s.StudentID, s.StudentName,s.StudentEmail,s.StudentPhone 
				FROM appointmentmaster a, studentmaster s 
				WHERE a.IsCancel=0 and a.StudentID=s.StudentID and s.StudentName='".$sName."' and (a.AppointmentDate BETWEEN '".$frmDate."' and '".$toDate."')";

	
}






	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	$dyn_table= "<table border='1' padding-top: '0cm' style='width:50%'>";
	$dyn_table.= "<tr><td>Appointment Date</td><td>Appointment Time</td><td>Student Name</td><td>Student Email</td><td>Student Phone</td><td>Reason</td><td>Cancel Appointment??</td></tr>";




	
	while ($row = mysql_fetch_array($result))
	{
		$id=$row["AppointmentID"];
	
		$dyn_table.="<tr><td>".$row['AppointmentDate']."</td>
				<td>".$row['AppointmentTime']."</td>
				<td>".$row['StudentName']."</td>
				<td>".$row['StudentEmail']."</td>
				<td>".$row['StudentPhone']."</td>
				<td>".$row['Reason']."</td>
				<td align='center'><input  type='submit' name='Submit' value='Drop' onclick='CancelAppointment(".$id.");' /></td>
				</tr>";

	}
	$dyn_table.="</table>";
	echo $dyn_table;



}


if(isset($_POST['CancelAppointment']))
{
		
	$appID=$_POST['Appid'];
	//$toDate=$_POST['toDate'];
	
	
	$query = "Update appointmentmaster set IsCancel=1 where AppointmentID=".$appID;
	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	
		
}
?>