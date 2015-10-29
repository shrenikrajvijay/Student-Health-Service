<?php
if(isset($_GET['id'])) {
    $id = intval($_GET['id']);

    if($id <= 0) {
        die('The ID is invalid!');
    }
    else {
        $dbLink = new mysqli('192.168.1.6', 'root', 'password', 'healthcenter');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
        $query = "
            SELECT `details`, `filename`, `filesize`, `data`
            FROM `feedbackform`
            WHERE `id` = {$id}";
        $result = $dbLink->query($query);
 
        if($result) {

            if($result->num_rows == 1) {
        
                $row = mysqli_fetch_assoc($result);
 
                header("Content-Type: ". $row['details']);
                header("Content-Length: ". $row['filesize']);
                header("Content-Disposition: attachment; filename=". $row['filename']);
                echo $row['data'];
            }
            else {
                echo 'Error! No image exists with that ID.';
            }

            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        @mysqli_close($dbLink);
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>