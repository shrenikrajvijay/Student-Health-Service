<?php 

include('db_connect.php');
if(isset($_POST['Savegroup'])){

	
	$global=$_POST['global'];
	$groupid=$_POST['groupid'];
	$pieces = explode(",", $global);
	foreach ($pieces as &$value) {
    // echo $value;
		$quer="INSERT INTO studentgroups (GroupID,StudentID) VALUES ('".$groupid."','".$value."')";
		$res=mysql_query($quer);
}
	// $query = "SELECT  s.StudentID, s.StudentName,s.StudentDOB,s.StudentEmail,s.StudentPhone
	// 			FROM  studentmaster s 
	// 			WHERE s.StudentName='".$sName."' and s.StudentID=".$sid." and (s.StudentDOB BETWEEN '".$frmDate."' and '".$toDate."')";

	

}



if(isset($_POST['GetAppointmentByIDNameDate']) || isset($_POST['GetAppointmentByIDName']) ||isset($_POST['GetAppointmentByIDDate'])|| isset($_POST['GetAppointmentByNameDate']) ||isset($_POST['GetAppointmentByDate']) || isset($_POST['GetAppointmentByID'])||isset($_POST['GetAppointmentByName']))
{

$groupid=$_POST['groupid'];
	

if(isset($_POST['GetAppointmentByIDNameDate']))
{
	
	$sName=$_POST['sName'];
	$sid=$_POST['sid'];

	$frmDate=$_POST['frmDate'];
	$toDate=$_POST['toDate'];
	//echo "GetAppointmentByIDNameDate";
	
	$query = "SELECT  s.StudentID, s.StudentName,s.StudentDOB,s.StudentEmail,s.StudentPhone
				FROM  studentmaster s 
				WHERE s.StudentName='".$sName."' and s.StudentID=".$sid." and (s.StudentDOB BETWEEN '".$frmDate."' and '".$toDate."') and s.StudentID NOT IN(Select g.StudentID from studentgroups g where g.StudentID=s.StudentID and g.GroupID=".$groupid.")";

	


	



}
else if(isset($_POST['GetAppointmentByIDName']))
{
	
	$sName=$_POST['sName'];
	$sid=$_POST['sid'];
	//echo "GetAppointmentByIDName";
	
	
	$query = "SELECT  s.StudentID, s.StudentName,s.StudentDOB,s.StudentEmail,s.StudentPhone
				FROM  studentmaster s 
				WHERE s.StudentName='".$sName."' and s.StudentID=".$sid." and s.StudentID NOT IN(Select g.StudentID from studentgroups g where g.StudentID=s.StudentID and g.GroupID=".$groupid.")";

	


	



}
else if(isset($_POST['GetAppointmentByIDDate']))
{
	
	$sid=$_POST['sid'];
	$frmDate=$_POST['frmDate'];
	$toDate=$_POST['toDate'];
	//echo "GetAppointmentByIDDate";
	$query = "SELECT  s.StudentID, s.StudentName,s.StudentDOB,s.StudentEmail,s.StudentPhone
				FROM  studentmaster s 
				WHERE s.StudentID=".$sid." and (s.StudentDOB BETWEEN '".$frmDate."' and '".$toDate."') and s.StudentID NOT IN(Select g.StudentID from studentgroups g where g.StudentID=s.StudentID and g.GroupID=".$groupid.")";

	


	



}
else if(isset($_POST['GetAppointmentByNameDate']))
{
	
	$sName=$_POST['sName'];
	$frmDate=$_POST['frmDate'];
	$toDate=$_POST['toDate'];
	//echo "GetAppointmentByNameDate";
	$query = "SELECT  s.StudentID, s.StudentName,s.StudentDOB,s.StudentEmail,s.StudentPhone
				FROM  studentmaster s 
				WHERE s.StudentName='".$sName."' and (s.StudentDOB BETWEEN '".$frmDate."' and '".$toDate."') and s.StudentID NOT IN(Select g.StudentID from studentgroups g where g.StudentID=s.StudentID and g.GroupID=".$groupid.")";

	


	



}

if(isset($_POST['GetAppointmentByDate']))
{
	
	$frmDate=$_POST['frmDate'];
	$toDate=$_POST['toDate'];
	//echo "GetAppointmentByDate";
	
	$query = "SELECT  s.StudentID, s.StudentName,s.StudentDOB,s.StudentEmail,s.StudentPhone
				FROM  studentmaster s 
				WHERE (s.StudentDOB BETWEEN '".$frmDate."' and '".$toDate."') and s.StudentID NOT IN(Select g.StudentID from studentgroups g where g.StudentID=s.StudentID and g.GroupID=".$groupid.")";

	


	



}
else if(isset($_POST['GetAppointmentByID']))
{
	
	$sid=$_POST['sid'];
	//echo "GetAppointmentByID";
	$query = "SELECT  s.StudentID, s.StudentName,s.StudentDOB,s.StudentEmail,s.StudentPhone
				FROM  studentmaster s 
				WHERE s.StudentID=".$sid." and s.StudentID NOT IN(Select g.StudentID from studentgroups g where g.StudentID=s.StudentID and g.GroupID=".$groupid.")";

	



	



}


else if(isset($_POST['GetAppointmentByName']))
{
	
	$sName=$_POST['sName'];
	//echo "GetAppointmentByName";
	$query = "SELECT  s.StudentID, s.StudentName,s.StudentDOB,s.StudentEmail,s.StudentPhone
				FROM  studentmaster s 
				WHERE s.StudentName='".$sName."' and s.StudentID NOT IN(Select g.StudentID from studentgroups g where g.StudentID=s.StudentID and g.GroupID=".$groupid.")";

	


	



}





$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	$dyn_table= "<table border='1' padding-top: '0cm' style='width:50%'>";
	$dyn_table.= "<tr><td>Add</td><td>Student ID</td><td>Student Name</td><td>Student DOB</td><td>Student Email</td><td>Student Phone</td></tr>";




	
	while ($row = mysql_fetch_array($result))
	{
		$id=$row['StudentID'];
	
		$dyn_table.="<tr>


				<td><input type='checkbox' onchange='savethere(".$id.",this);' name='check'></td>
				<td>".$row['StudentID']."</td>
				<td>".$row['StudentName']."</td>
				<td>".$row['StudentDOB']."</td>
				<td>".$row['StudentEmail']."</td>
				<td>".$row['StudentPhone']."</td>
				
				
				</tr>";

	}
	$dyn_table.="</table>";
	echo $dyn_table;
	
echo "<input type='button' name='button' onclick='save();' value='Add to group'>";



}



?>

