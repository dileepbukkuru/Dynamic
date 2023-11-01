<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'dynamic';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $adver = $_POST['adver'];
    $sel = $_POST['sel'];
    $validity = $_POST['validity'];
    $descp = $_POST['descp'];
    $dateb = $_POST['dateb'];

    // Update the record in the database (Replace with your specific query)
    $sql = "UPDATE advadata SET adver = '$adver', sel = '$sel', validity = '$validity', descp = '$descp', dateb = '$dateb' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
