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
				
			// document.getElementById('displayhere').innerHTML=msg;

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
			
			
		</tr>
		
	</table>

	

</body>
</html>



<!-- connecting to database -->
<?php
include('db_connect.php');
?>


<!-- starting php, html and javascript -->
<html>
<head>
<title>E-mail Template</title>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>


<!-- query to get everything from database and storing in result -->
<?php
$query = "SELECT * FROM templatemaster ORDER BY TemplateId";

$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>

Select Template:
<?php  echo "<select name='list' id='disable1' onChange='changedupdate(this)' >";
while ($row = mysql_fetch_array($result))
{
echo "<option value='".$row['TemplateId']."'>" . $row['TemplateName']."</option>";
}


?>
</select>

<br><br>


<br>Subject Message:  <br> <textarea name="text" id='textarea' rows="10" cols="60" disabled placeholder="Enter the format of this template here"></textarea> <br>

<input type='button' onclick="sendmail();" value='sendmail'>

<!-- Success: Enabling/Disabling Text based on RadioButton Selection -->
<script type="text/javascript">  
function sendmail(){

	var GroupID=document.getElementById('disable').value;
	// alert(GroupID);
	var TemplateID=document.getElementById('disable1').value;
	// alert(TemplateID);
	$.ajax({type:"post",url:"finalmail_php.php",data:{Group:GroupID,TemplateID:TemplateID}}).done(
	function(msg){
	document.getElementById("textarea").value=msg;
	// document.getElementById("tempname").value=el.options[el.selectedIndex].text;
	
	});

}
function changedupdate(el){
var a=el.value;
$.ajax({type:"post",url:"temp.php",data:{GetTextArea:a}}).done(
function(msg){
document.getElementById("textarea").value=msg;
document.getElementById("tempname").value=el.options[el.selectedIndex].text;
});
}


// function1
function clicked(){
document.getElementById('disable').disabled=false;
document.getElementById('tempname').disabled=false;
document.getElementById('textarea').disabled=false;
document.getElementById('button').disabled=false;

}




// function2
function callme(){

if(document.getElementById("rad2").checked==true){

document.getElementById('disable').disabled=true;
document.getElementById('textarea').value="";
document.getElementById('tempname').value="";
document.getElementById('deletebutton').disabled=true;

}else{
document.getElementById('disable').disabled=false;
document.getElementById('deletebutton').disabled=false;
}
}




// function3
function addme(){


if(document.getElementById('rad1').checked){
	
//var ele=document.getElementById('textarea').innerHTML;
//document.getElementById('textarea').innerHTML+=ele;

var txtName=document.getElementById('tempname').value;
//alert(txtName);	
var txtArea=document.getElementById('textarea').value;
//var a=document.getElementById('disable');
var tempID=document.getElementById('disable').options[document.getElementById('disable').selectedIndex].value;
//alert(tempID);
$.ajax({type:"post",url:"temp.php",data:{update:1,textname:txtName,textarea:txtArea,ID:tempID}}).done(
function(msg){
	//alert(msg);
	location.reload(true);
});



}

if(document.getElementById('rad2').checked)
{


var txtName=document.getElementById('tempname').value;
var txtArea=document.getElementById('textarea').value;

$.ajax({type:"post",url:"temp.php",data:{insert:1,textname:txtName,textarea:txtArea}}).done(
function(msg){
	// window.location.replace("EmailTemplate.php");
		location.reload(true);



});

}


}
// function4
function deletebuttonfunc(){
var a=document.getElementById('disable').value;

$.ajax({type:"post",url:"temp.php",data:{delete:1,aa:a}}).done(
function(msg){
	// window.location.replace("EmailTemplate.php");
		location.reload(true);



});

}
</script> 






</body>
</html>