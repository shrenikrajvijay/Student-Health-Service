<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('db_connect.php');
session_start();
if (isset($_POST['AtPageLoad']))
{
    $address = "hello!";
	$id=0;
	if(!isset($_POST['id']))
	{
		$id=$_SESSION['aid'];
	}
	else {
		$temp=$_POST['id'];
	
	if($temp=="")
	{
		$id=$_SESSION['aid'];
	}
	else 
	{
		$id=$temp;	
	}	
	}
	
	
	
    $res = mysql_query("SELECT * FROM adminmaster WHERE ID=".$id);
    
    if(!$res){
        //echo 'Couldn\'t issue database query';
        die(mysql_error());
    }else{
        $var="<table width='400' border='5' align='center'>";
        while($row = mysql_fetch_array($res)){
           
                $var.="<tr>
                    <td colspan='5' align='center'> <h1>Administrator Information</h1></td>
                     
                </tr>
                <tr>
                    <td align='center'>Admin Name:</td>
                    <td><input type='text' id = 'aname' name='aName' value='".$row['AdminName']."'
                                        /></td>
                </tr>
                <tr>
                    <td align='center'>Password:</td>
                    <td><input type='text' id='apass' name='pass' value='".$row['AdminPass']."'/></td>
                </tr>
                <tr>
                    <td align='center'>Address 1:</td>
                    <td><input type='text' id='aadd1' name='add1' value='".$row['AdminAdd1']."'/></td>
                </tr>
                <tr>
                    <td align='center'>Address 2:</td>
                    <td><input type='text' id='aadd2' name='add2' value='".$row['AdminAdd2']."'/></td>
                </tr>
                
                <tr>
                    <td align='center'>City:</td>
                    <td><input type='text' id='acity' name='city' value='".$row['AdminCity']."' /></td>
                </tr>
                <tr>
                    <td align='center'>State:</td>
                    <td><input type='text' id='astate' name='state' value='".$row['AdminState']."'/></td>
                </tr>
                <tr>
                    <td align='center'>Postal Code:</td>
                    <td><input type='text' id='azip' name='zip' value='".$row['AdminZip']."' /></td>
                </tr>
                <tr>
                    <td align='center'>Email:</td>
                    <td><input type='text' id='aemail' name='email' value='".$row['AdminEmail']."'/></td>
                </tr>
                <tr>
                    <td align='center'>Phone Number:</td>
                    <td><input type='text' id='aphone' name='pnum' value='".$row['AdminPhone']."'/></td>
                </tr>
                
                <tr>
                    <td align='center'>Note:</td>
                    <td><input type='text' id='anote' name='note' value='".$row['AdminNote']."'/></td>
                </tr>
                <tr>
                    <td align='center'>Date of Birth (yyyy/mm/dd):</td>
                    <td><input type='date' id='adob' name='dob' value='".$row['AdminDOB']."'/></td>
                </tr>
                <tr>
                    <td colspan='5' align='center'><input type='submit' onclick='updateAdminInfo();' name='submit'
                        value='Submit' /></td>

                    <td></td>
                </tr>";
            
            
        }
        $var.="</table>";
        echo $var;
       
}
    }
if (isset($_POST['updateAdminInfo'])){
// echo "string";

$adname=$_POST['adname'];
$adpass=$_POST['adpass'];
$adadd1=$_POST['adadd1'];

  $adadd2=$_POST['adadd2'];
  $adcity=$_POST['adcity'];
   $adstate=$_POST['adstate'];
    $adzip=$_POST['adzip'];
     $ademail=$_POST['ademail'];
      $adphone=$_POST['adphone'];
   $adnote=$_POST['adnote'];
     $addob=$_POST['addob'];
     //$id=$_SESSION['aid'];
     $id=0;
	if(!isset($_POST['id']))
	{
		$id=$_SESSION['aid'];
	}
	else {
		$temp=$_POST['id'];
	
	if($temp=="")
	{
		$id=$_SESSION['aid'];
	}
	else 
	{
		$id=$temp;	
	}	
	}
	
     $que = mysql_query("UPDATE adminmaster 
                        SET AdminName='$adname', AdminPass='$adpass', AdminAdd1='$adadd1', AdminAdd2='$adadd2', AdminCity='$adcity', AdminState='$adstate', AdminZip='$adzip', AdminEmail='$ademail', AdminPhone='$adphone', AdminNote='$adnote', AdminDOB='$addob' 
                        WHERE ID=".$id);
     $res=mysql_query($que);

     echo "Update Successful";

}


?>