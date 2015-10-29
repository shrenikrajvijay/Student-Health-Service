<?php
include('db_connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Add StudentsInGroup</title>
	<meta name="author" content="K2U2" />
	<!-- Date: 2014-12-11 -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript">
	
	
	function changedupdate(el){
			var a=el.value;
			$.ajax({type:"post",url:"temp.php",data:{GetStudentGroup:1,gid:a}}).done(
			function(msg){
			document.getElementById("stuList").innerHTML=msg;
			//document.getElementById("tempname").value=el.options[el.selectedIndex].text;
			});
		}
		
		function AddStudent(){
			var a=document.getElementById('disable').value;

			window.location ='addstudentingroup.php?id=' + a;
		}
		function displayall(aa){
			var a=aa.value;
			$.ajax({type:"post",url:"temp.php",data:{displayall:1,groupid:a}}).done(
			function(msg){
				// alert
			document.getElementById('displayhere').innerHTML=msg;

			//document.getElementById("tempname").value=el.options[el.selectedIndex].text;
			});
		}
	</script>
</head>
<body>
	
	<table>
		<tr>
			<td>
				Select Group Name:				
			</td>
			<td>
				<?php
					$query = "SELECT * FROM groupmaster ORDER BY GroupName";

					$result = mysql_query($query) or die(mysql_error()."[".$query."]");
				?>
				<select name='list' id='disable' onChange='changedupdate(this);displayall(this);'>
				<?php  
				while ($row = mysql_fetch_array($result))
				{
					echo "<option value='".$row['GroupID']."'>" . $row['GroupName']."</option>";
				}


				?>	
					
				</select>
				
			</td>
		</tr>
		<tr>
			<td>
				<div id="stuList">
					
					
				</div>
				
			</td>
			
		</tr>
		<tr>
			<td>
				
				<input type="button" value="Add New Student" id="btnAddNewStudent" onclick="AddStudent();">
				<td><a href="creategroup.html" target="frameright">Create New Group</a></td>
			</td>
			
		</tr>
		
	</table>
	<div id="displayhere">

	</div>

</body>
</html>

