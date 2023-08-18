<?php
if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "dbconfig.php";
    $sql = "SELECT * FROM signup WHERE username = '".$username ."' AND password = '". $password ."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION["email"] = $email;
        echo "Logged in!!";
        // goto index.php
    }
    else {
        echo "email or password wrong";
    }
} else {
    header("location: ../login.php");
}



  
?>