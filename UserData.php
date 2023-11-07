<?php
session_start();

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'dynamic';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $userid = $_POST["userid"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM form WHERE userid = '$userid' AND status='approved'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $result_all_form = mysqli_query($conn, "SELECT * FROM form WHERE userid = '$userid'");

            $all_form = mysqli_fetch_all($result_all_form, MYSQLI_ASSOC);
            $_SESSION["submit"] = true;
            $_SESSION["userid"] = $row["userid"];
            $_SESSION["form"] = $all_form;
            header("Location: UserHome.php");
            exit();

        } else {
            echo "<script>
              alert('Invalid Password');
             window.location.href='User_Register.php';
               </script>";
        }
    } else {

        echo "<script>alert('Invalid UserId or status is pending');
                window.location.href='User_Register.php';
              </script>";
    }


}

mysqli_close($conn);
?>