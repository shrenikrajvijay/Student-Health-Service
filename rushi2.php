
<?php
include('db_connect.php');

if (isset($_POST['AtPageLoad']))
{
    $res = mysql_query("SELECT AdminName,AdminPass,AdminEmail,AdminNote,AdminPhone FROM adminmaster");
    
    if(!$res){
        echo 'Couldn\'t issue database query';
        die(mysql_error());
    }else{
        echo '<table align = "left" cellspacing = "2" border = "1" cellpadding = "8">'
        . '<tr><td align = "left"><b>Admin Name</b></td>'
                . '<td align = "left"><b>Admin Password</b></td>'
                . '<td align = "left"><b>Admin Email</b></td>'
                . '<td align = "left"><b>Admin Note</b></td>'
                . '<td align = "left"><b>Admin Phone</b></td>';
        
        while($row = mysql_fetch_array($res)){
            echo '<tr><td align = "left">'.
                $row[0] . '</td><td align = "left">'.
                $row[1] . '</td><td align = "left">'.
                $row[2] . '</td><td align = "left">'.
                $row[3] . '</td><td align = "left">'.
                $row[4] . '</td><td align = "left">'
                . '<a href = "adminForm.html">Edit</a></td>';
                echo '</tr>';
        }
        echo '</table>';
    }
}

        
//if (isset($_POST['AtPageLoad']))
//	{
//		$res = mysql_query("SELECT * FROM adminmaster");
//
//		if(!$res) 
//		{
//    		die(mysql_error()); 
//		}
//		$dyn_table='<table border="1" cellpadding="10"><form action=AdminManager.php method=post>';
//	
//		while($row=mysql_fetch_array($res))
//		{
//	
//			$id=$row["id"];
//		
//			$dyn_table .='<tr><td><input type="hidden" name="hidden" value="'.$id.'">'.$row["user_name"].'</td>';
//			$dyn_table .='<tr><td><input type="text" name="user_name" value="'.$row["user_name"].'"></td>';
//	
//			$dyn_table.='<td> <button id="'.$row["user_name"].'" name="update" onclick="randString('.$id.')">Say Hello</button></td></tr>';
//		}
//		$dyn_table.='</form></table>';
//		echo $dyn_table;	
//	}
?>