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
$sql = "SELECT * FROM advadata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='2'>";
    echo "<tr><th>adver</th><th>sel</th><th>validity</th><th>descp</th><th>dateb</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["adver"] . "</td>";
        echo "<td>" . $row["sel"] . "</td>";
        echo "<td>" . $row["validity"] . "</td>";
        echo "<td>" . $row["descp"] . "</td>";
        echo "<td>" . $row["dateb"] . "</td>";
        echo "<td> <a href='EditFile.php?id=" . $row["id"] . "'>Edit</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>