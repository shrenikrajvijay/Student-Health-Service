<?php 

include('db_connect.php');
if(isset($_POST['GetAppointment']))
{

	session_start();
	$frmDate=$_POST['frmDate'];
	$toDate=$_POST['toDate'];
	$sid=$_SESSION['sid'];
	
	$query = "SELECT a.AppointmentID,a.AppointmentTime,a.Actions,a.Campaign,a.Notes,a.Reason,a.Speciality,a.AppointmentDate, s.StudentID, s.StudentName,s.StudentEmail,s.StudentPhone 
				FROM appointmentmaster a, studentmaster s 
				WHERE a.StudentID=s.StudentID and a.StudentID=".$sid." and IsCancel=0 and (a.AppointmentDate BETWEEN '".$frmDate."' and '".$toDate."')";

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
	//echo "string";	
	$appID=$_POST['Appid'];
	//$toDate=$_POST['toDate'];
	//echo $appID;
	
	$query = "Update appointmentmaster set IsCancel=1 where AppointmentID=".$appID;
	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	
		
}




?>