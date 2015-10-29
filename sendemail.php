<?php

echo "hi";

 include('db_connect.php');
 if(!$a){die("Error");}

 require_once "Mail.php";
 $from = 'dummy.dbms@gmail.com';
 $to = 'keyurkamdar6390@gmail.com';
 $subject = '1';
 $body = "2";

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
 //$mail = $smtp->send('2019126424@txt.att.net', $headers, $body);
 $mail = $smtp->send($to, $headers, $body);

 if (PEAR::isError($mail)) {
     echo('<p>' . $mail->getMessage() . '</p>');
 } else {
     echo('<p>Message successfully sent!</p>');
 }
?>