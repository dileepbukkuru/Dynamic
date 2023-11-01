<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'dynamic';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve data for the specific ID (Replace with your specific query)
    $sql = "SELECT * FROM advadata WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        $conn->close();
        exit;
    }
} else {
    echo "Invalid ID.";
    $conn->close();
    exit;
}
?>

    <form action="Update.php" method="post">
        <table>
            <tr>
                <td> ID:</td>
                <td><input type="read" name="id" value="<?php echo $id; ?>" readonly></td>
            </tr>
            <tr>
                <td> Advertisement Title:</td>
                <td><input type="text" name="adver" value="<?php echo $row['adver']; ?>"></td>
            </tr>
            <tr>
                <td> Advertisement Category:</td>
                <td><input type="text" name="sel" value="<?php echo $row['sel']; ?>"></td>
            </tr>
            <tr>
                <td> Validity Period:</td>
                <td><input type="text" name="validity" value="<?php echo $row['validity']; ?>"></td>
            </tr>
            <tr>
                <td> Description:</td>
                <td><input type="text" name="descp" value="<?php echo $row['descp']; ?>"></td>
            </tr>
            <tr>
                <td> Date:</td>
                <td><input type="text" name="dateb" value="<?php echo $row['dateb']; ?>"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Update"></td>
                </td>
            </tr>

        </table>
    </form>

<?php
// Close the database connection
$conn->close();
?><?php
