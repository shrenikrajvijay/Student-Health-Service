<?php

if(isset($_FILES['uploaded_file'])) {

    if($_FILES['uploaded_file']['error'] == 0) {
        
        $dbLink = new mysqli('localhost', 'root', '', 'healthcenter');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }

        $filename = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $details = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $filesize = intval($_FILES['uploaded_file']['size']);
 
        
        $query = " INSERT INTO `feedbackform` (`filename`, `details`, `filesize`, `data`, `created`)
            VALUES ('{$filename}', '{$details}', {$filesize}, '{$data}', NOW() )";
 
        $result = $dbLink->query($query);
 
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
         $dbLink->close();
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
   
}
else {
    echo 'Error! A file was not sent!';
}
 
echo '<p>Click <a href="feedbackform.html">here</a> to go back</p>';
?>
 