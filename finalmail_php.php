<?php
include('db_connect.php');
if(isset($_POST['Group'])){
	$GroupId=$_POST['Group'];
	$TemplateID=$_POST['TemplateID'];
	$query = "SELECT * FROM studentgroups sg WHERE sg.GroupID=".$GroupId."";
	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	$query2="";
	while ($row = mysql_fetch_array($result)){
		$query2="";
	$query2= "INSERT INTO emailqueue (student_id, template_id, Type) VALUES (".$row['StudentID'].",".$TemplateID.",'GroupMail')" ;
	$result2 = mysql_query($query2) or die(mysql_error()."[".$query2."]");
	
	}
	
	echo mysql_error();
	}
?>