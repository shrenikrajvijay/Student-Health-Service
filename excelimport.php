

<html>
<head>
	<title></title>
</head>
<body>
<form method="POST"  action="excelimport.php" enctype="multipart/form-data">
	<input type="file" name="file"><br />
	<input type="submit" name="submit" onclick="redir();" value="Submit">

</form>
<script type="text/javascript">
function redir(){
	header('Location: admin_dashboard.php')
}
</script>
</body>
</html>

<?php 
include('db_connect.php');

if(isset($_POST['submit'])){
	$file=$_FILES['file']['tmp_name'];
	$handle=fopen($file,"r");
	while(($fileop=fgetcsv($handle,1000,","))!==false){
		$student_id=$fileop[0];
		$student_name=$fileop[1];
		$student_email=$fileop[2];
		
		
		$student_phone=$fileop[3];
		$student_city=$fileop[4];
		$student_state=$fileop[5];
		$student_zip=$fileop[6];
		$student_add_1=$fileop[7];
		$student_add_2=$fileop[8];
		$student_notes=$fileop[9];
		$student_dob=$fileop[10];
		$mis=$fileop[11];
		$appointment_id=$fileop[12];
		$appointment_date=$fileop[13];
		$appointment_time=$fileop[14];

		
		//code to find age
		$birthDate = $student_dob;
		$birthDate = date('m-d-Y', strtotime($birthDate));
		

  $birthDate = explode("-", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
	
		
		
		$sql=mysql_query("INSERT INTO studentmaster (StudentID,StudentPass,StudentName,StudentDOB,
													StudentEmail,StudentPhone,StudentCity,StudentState,
													StudentZip,StudentAdd1,StudentAdd2,StudentNote,StudentAge) 
											VALUES ('$student_id','1234','$student_name','$student_dob',
													'$student_email','$student_phone','$student_city','$student_state',
													$student_zip,'$student_add_1','$student_add_2','$student_notes',$age)");
		echo mysql_error();
		$sql1=mysql_query("INSERT INTO appointmentmaster (StudentID,AppointmentDate,AppointmentTime) 
											VALUES ('$student_id','$appointment_date','appointment_time')");


	}
	if($sql && $sql1){
		echo "Success";
	}
	
	
}

 ?>