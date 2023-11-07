<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'dynamic';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Retrieve data from the database (Replace with your specific query)
$sql = "SELECT * FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='2'>";
    echo "<tr><th>fn</th><th>ln</th><th>gender</th><th>dob</th><th>number</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fn"] . "</td>";
        echo "<td>" . $row["ln"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["number"] . "</td>";
        echo "<td> <a href='Approved.php?id=" . $row["userid"] . "'>approv</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>