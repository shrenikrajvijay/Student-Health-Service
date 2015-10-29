
<?php
include('db_connect.php');
require_once "Mail.php";
$que="select e.id,s.studentID,s.StudentPhone,s.StudentEmail,s.StudentName,s.StudentPhoneCarrier,t.TemplateId,t.TemplateName,t.TemplateText,a.AppointmentDate, a.AppointmentTime from StudentMaster s,emailqueue e,templatemaster t,appointmentmaster a  where a.appointmentdate<=CURRENT_DATE and a.AppointmentID=e.appointmentID and e.student_id=s.StudentID and t.templateid<>0 and e.is_sent=0 and e.Type='Appointment' and e.template_id=t.TemplateId";
$result = mysql_query($que) or die(mysql_error()."[".$que."]");
//$res=mysql_query($que);
while($row=mysql_fetch_array($result)){
	//echo "hi";	
	$id=$row['id'];
	$email=$row['StudentEmail'];
	$subject=$row['TemplateName'];
	$StudentPhone=$row['StudentPhone'];
	$StudentPhoneCarrier=$row['StudentPhoneCarrier'];
	$StudentPhoneEmail=$StudentPhone.'@'.$StudentPhoneCarrier;
	$description= str_replace("{{Name}}",$row['StudentName'],$row['TemplateText']); 
	$description=str_replace("{{Date}}",$row['AppointmentDate'],$description);   
	$description=str_replace("{{time}}",$row['AppointmentTime'],$description);   
	
	$from = 'dummy.dbms@gmail.com';
	$to = $email;
	$subject = $subject;
	$body = $description;

	$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'dummy.dbms@gmail.com',
        'password' => 'dummydbms'
    ));
$mail = $smtp->send($StudentPhoneEmail, $headers, $body);
$mail1 = $smtp->send($to, $headers, $body);
 
 	
 	$query="UPDATE emailqueue SET is_sent=1 WHERE id=$id";
 	mysql_query($query);
 		
/*

if (PEAR::isError($mail)) {
    // echo('<p>' . $mail->getMessage() . '</p>');
    $que="UPDATE emailqueue SET error_log=$mail->getMessage() WHERE id=$id";
	$result = mysql_query($que) or die(mysql_error()."[".$que."]");
	} else {
		$que="UPDATE emailqueue SET is_sent=1 WHERE id=$id";
		$result = mysql_query($que) or die(mysql_error()."[".$que."]");

    // echo('<p>Message successfully sent!</p>');
}*/

}


$que="select e.Type,e.id,s.studentID,s.StudentPhone,s.StudentEmail,s.StudentName,s.StudentPhoneCarrier,t.TemplateId,t.TemplateName,t.TemplateText from StudentMaster s,emailqueue e,templatemaster t where s.studentDOB=CURRENT_DATE and e.student_id=s.StudentID and t.templateid<>0 and e.is_sent=0 and e.template_id=t.TemplateId and e.Type='BirthDay'";
$result = mysql_query($que) or die(mysql_error()."[".$que."]");
//$res=mysql_query($que);
while($row=mysql_fetch_array($result)){
	//echo "hi";	
	$id=$row['id'];
	$email=$row['StudentEmail'];
	$subject=$row['TemplateName'];
	
	$StudentPhone=$row['StudentPhone'];
	$StudentPhoneCarrier=$row['StudentPhoneCarrier'];
	$StudentPhoneEmail=$StudentPhone.'@'.$StudentPhoneCarrier;
	$description= str_replace("{{Name}}",$row['StudentName'],$row['TemplateText']);  
	$description=str_replace("{{Date}}",$row['AppointmentDate'],$description);   
	$description=str_replace("{{time}}",$row['AppointmentTime'],$description);   
	
	$from = 'dummy.dbms@gmail.com';
	$to = $email;
	$subject = $subject;
	$body = $description;

	$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'dummy.dbms@gmail.com',
        'password' => 'dummydbms'
    ));
	$mail = $smtp->send($StudentPhoneEmail, $headers, $body);
 	$mail1 = $smtp->send($to, $headers, $body);
 
 	
 	$query="UPDATE emailqueue SET is_sent=1 WHERE id=$id";
 	mysql_query($query);


}

$que="select e.Type,e.id,s.studentID,s.StudentPhone,s.StudentEmail,s.StudentName,s.StudentPhoneCarrier,t.TemplateId,t.TemplateName,t.TemplateText from StudentMaster s,emailqueue e,templatemaster t where e.student_id=s.StudentID and t.templateid<>0 and e.is_sent=0 and e.template_id=t.TemplateId and e.Type='GroupMail'";
$result = mysql_query($que) or die(mysql_error()."[".$que."]");
//$res=mysql_query($que);
while($row=mysql_fetch_array($result)){
	//echo "hi";	
	$id=$row['id'];
	$email=$row['StudentEmail'];
	$subject=$row['TemplateName'];
	$StudentPhone=$row['StudentPhone'];
	$StudentPhoneCarrier=$row['StudentPhoneCarrier'];
	$StudentPhoneEmail=$StudentPhone.'@'.$StudentPhoneCarrier;
	
	$description= str_replace("{{Name}}",$row['StudentName'],$row['TemplateText']);  
	$description=str_replace("{{Date}}",$row['AppointmentDate'],$description);   
	$description=str_replace("{{time}}",$row['AppointmentTime'],$description);  
	 
	
	$from = 'dummy.dbms@gmail.com';
	$to = $email;
	$subject = $subject;
	$body = $description;

	$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'dummy.dbms@gmail.com',
        'password' => 'dummydbms'
    ));
	$mail = $smtp->send($StudentPhoneEmail, $headers, $body);
 	$mail1 = $smtp->send($to, $headers, $body);
 
 	
 	$query="UPDATE emailqueue SET is_sent=1 WHERE id=$id";
 	mysql_query($query);


}


?>
