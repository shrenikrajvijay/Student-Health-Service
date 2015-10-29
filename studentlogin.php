<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="tablecss.css">
	</head>
	<style type='text/css'>
		body {
		background: url('original.png');
		}
	</style>
	
	<body style="background-color:#f0f8ff;">
		<form  method='post' action='studentlogin.php'>
			<div class="CSSTableGenerator">
			<table width='400' border='5' align='center'>
				
				<tr>
					<td colspan='5' align='center'> <h1>Student Login Form</h1></td>
				</tr>
				
				<tr>
					<td align='center'>Email:</td>
					<td><input type='text' name='email' /></td>
				</tr><tr>
				
				<tr>
					<td align='center'>Password:</td>
					<td><input type='password' name='pass' /></td>
				</tr>
				
					<td colspan='5' align='center'><input type='submit' 
						name='Login' value='Login' /></td>
				</tr>
			</table>
		</div>
		
		</form>
		<font color='black' size='4'><center>Registration Required</font><br>
		<a href='StudentRegistration.php'>Sign Up Here</a></center>
	</body>
</html>
<?php
include('db_connect.php');

if(isset($_POST['Login'])) {
	
	$email = $_POST['email'];
	$password = $_POST['pass'];
	
	$check_user = "select * from studentmaster where StudentEmail='$email' 
	AND StudentPass='$password'";
	
	$run = mysql_query($check_user);
	
	if(mysql_num_rows($run)>0) {
		
	session_start();
	while($row=mysql_fetch_assoc($run)){
	$_SESSION['sid']=$row['StudentID'];
	$_SESSION['name']=$row['StudentName'];
	}
	
	
		
		echo "<script>window.open('student_dashboard.php', '_self')</script>";
	}
	else {
		echo "<script>alert('Email or password is incorrect')</script>";
	}
	
}
?>