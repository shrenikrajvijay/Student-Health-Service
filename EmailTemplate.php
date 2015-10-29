

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

<h2> Add/Edit Templates</h2>
<input type="radio" onclick="clicked(); callme();" value="1" name="rad1" id="rad1" > Select/Edit/Delete Email Template 
<input type="radio"  onclick="clicked(); callme();" value="2" name="rad1" id="rad2" > Add Email Template
<br><br><br>
<!-- query to get everything from database and storing in result -->
<?php
$query = "SELECT * FROM templatemaster ORDER BY TemplateId";

$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>

Select Template:
<?php  echo "<select name='list' id='disable' onChange='changedupdate(this)' disabled>";
while ($row = mysql_fetch_array($result))
{
echo "<option value='".$row['TemplateId']."'>" . $row['TemplateName']."</option>";
}


?>
</select>

<br><br>
<br>Template Name: <input type="text" name="tempname" id="tempname" disabled placeholder="Name of Template"> <br>

<br>Subject Message:  <br> <textarea name="text" id='textarea' rows="10" cols="60" disabled placeholder="Enter the format of this template here"></textarea> <br>
<br><input type="submit"  name="submit" onclick="addme()" id="button" value="Make Changes" disabled>
<input type="button" value="Delete This Template" disabled id="deletebutton" onclick="deletebuttonfunc()"></input>



<!-- Success: Enabling/Disabling Text based on RadioButton Selection -->
<script type="text/javascript">  
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