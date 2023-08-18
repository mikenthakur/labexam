<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $nationality = $_POST["nationality"];
    
    require_once "dbconfig.php";

    $sql = "INSERT INTO `userinfo`(`name`, `email`, `phone`, `nationality`) VALUES ('".name."', '".$email."', '".$phone."', '".$nationality."')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: couldn't insert the data");
    } else {
        echo "Data inserted sucessfully !! ";
    }

} else {
    header("location: ../index.php");
}

?>