<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'dynamic';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];

$sql = "INSERT INTO feedback(name, email, textarea) VALUES('$name', '$email', '$textarea')";

if (mysqli_query($conn, $sql)) {
    echo "Sent Successfully";
} else {
    echo mysqli_error($conn);
}

?>


