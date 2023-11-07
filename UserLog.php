<?php
session_start();

if (!isset($_SESSION["userid"])) {
    header("Location: Admin.php");
    exit();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Styles/Home1.css">
</head>
<body>
<div>

    <ul>
        <li>
            <div class="highlight"><a href="UserHome.php">HOME</a>
            </div>
        </li>
        <li>
            <div class="dropdown highlight">
                <button class="dropbtn">VIEW</button>
                <div class="dropdown-content">
                    <a href="UserLog.php">Adva</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </li>
        <li><a href="UserView.php">FEEDBACK</a></li>
        <li>
            <div class="highlight"><a href="UserPass.php">CHANGE PASSWORD</a></div>
        </li>
        <li>
            <div class="highlight"><a href="Home.php">LOGOUT</a></div>
        </li>
    </ul>
</div>
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

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>


