<?php
    $dbsever = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "labexam";
    
    $conn = mysqli_connect($dbsever, $dbuser, $dbpass, $dbname);

    if (!$conn) {
        die("DB connection failed due to " . mysql_connect_error());
    }

    // echo "DB connected sucessfully!!";
?>