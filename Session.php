<?php
session_start();

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'task';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}   

 if (isset($_POST["submit"])) {
    $userid = $_POST["userid"];
    $password = $_POST["password"];
     $result = mysqli_query($conn, "SELECT * FROM form WHERE userid = '$userid'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
             $result_all_form = mysqli_query($conn, "SELECT * FROM form WHERE userid = '$userid'");
            
            $all_form = mysqli_fetch_all($result_all_form, MYSQLI_ASSOC);
            $_SESSION["submit"] = true;
            $_SESSION["userid"] = $row["userid"];
            $_SESSION["form"] = $all_form;
            header("Location: Session2.php");
            exit(); 
        } else {
            echo "Invalid password";
        }  
    }

    else {
        echo "Invalid userid";
    }
}

mysqli_close($conn);
?>