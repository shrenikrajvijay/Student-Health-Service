<?php

$dbLink = new mysqli('192.168.1.6', 'root', 'password', 'healthcenter');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
$sql = 'SELECT `id`, `filename`, `details`, `filesize`, `created` FROM `feedbackform`';
$result = $dbLink->query($sql);
 
if($result) {
    
    if($result->num_rows == 0) {
        echo '<p>There are no files in the database</p>';
    }
    else {
        
        echo '<table width="100%">
                <tr>
                    <td><b>File Name</b></td>
                    <td><b>Details</b></td>
                    <td><b>File Size (bytes)</b></td>
                    <td><b>Created</b></td>
                    <td><b>&nbsp;</b></td>
                </tr>';
 
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['filename']}</td>
                    <td>{$row['details']}</td>
                    <td>{$row['filesize']}</td>
                    <td>{$row['created']}</td>
                    <td><a href='feedbackdownload.php?id={$row['id']}'>Download</a></td>
                </tr>";
        }
 
        echo '</table>';
    }
 
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
$dbLink->close();
?>