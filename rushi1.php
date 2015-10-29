


<?php
include('db_connect.php');
?>
<?php
$aname=$_POST['aName'];
$pass=$_POST['pass'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$pnum=$_POST['pnum'];
$note=$_POST['note'];
$dob=$_POST['dob'];

$que="UPDATE adminmaster SET AdminName='$aname',AdminPass='$pass',AdminCity='$city',AdminAdd1='$add1',AdminAdd2='$add2',AdminEmail='$email',AdminDOB='$dob',AdminNote='$note',AdminState='$state',AdminZip='$zip',AdminPhone='$pnum' WHERE ID=1";
$res=mysql_query($que);
if($res){
    echo "Success";
}
else{
    echo mysql_error();
}

?>
<?php

  
    $res = mysql_query("SELECT AdminName,AdminPass,AdminEmail,AdminNote,AdminPhone FROM adminmaster");

    
    if(!$res){
        echo 'Couldn\'t issue database query';
        die(mysql_error());
    }else{

        while($row = mysql_fetch_assoc($res)){

            echo $row['AdminName'];
        }
        
      

}
?>