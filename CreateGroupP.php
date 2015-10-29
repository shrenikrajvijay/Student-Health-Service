<?php
include("db_connect.php");
//mysql_connect("localhost","root","");
//$a=mysql_select_db("healthcenter");





//echo "string";


if(isset($_POST["create_group"])) 
{
	//echo "post submit error";
	$name=$_POST["text"];
	$desc=$_POST["desc"];
	$name1= mysql_real_escape_string($name);
	$desc1= mysql_real_escape_string($desc);

	$query="INSERT INTO groupmaster (GroupName,GroupDescription) values('".$name."','".$desc."')";
	//$qresult=mysql_query($query) or die(mysql_error());
	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	echo "true";


}

if(isset($_POST["GetStudentGroup"]))
{
	$gid=$_POST["gid"];
	
	$query="select s.StudentID,s.StudentName,s.StudentEmail,s.StudentPhone from StudentMaster s,GroupMaster g, studentgroups sg where g.GroupID=".$gid." and sg.StudentID=s.StudentID and g.GroupID=sg.GroupID";
	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	$dyn_table= "<table border='1' padding-top: '0cm' style='width:50%'>";
	
	$dyn_table.= "<tr><td>Student ID</td><td>Student Name</td><td>Student Email</td><td>Student Phone</td></tr>";




	
	while ($row = mysql_fetch_array($result))
	{
		$id=$row["AppointmentID"];
	
		$dyn_table.="<tr>
				<td>".$row['StudentID']."</td>
				<td>".$row['StudentName']."</td>
				<td>".$row['StudentEmail']."</td>
				<td>".$row['StudentPhone']."</td>
				
				
				</tr>";

	}
	
	$dyn_table.="</table>";
	echo $dyn_table;
	
	
	
}






//include('db_connect.php');



?>