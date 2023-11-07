<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'dynamic';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$userId = $_GET['id'];


$query = "UPDATE form SET status = 'approved'  WHERE userid = '$userId'";
if ($conn->query($query) === TRUE) {
    echo "<h1> Record updated successfully!</h1>";
} else {
    echo "Error updating record: " . $conn->error;
}


?>