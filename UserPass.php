<?php
session_start();

if (!isset($_SESSION["userid"])) {
    header("Location: Admin.php");
    exit();
}
?>

<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'dynamic';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $userid = $_SESSION['userid'];
    $password = $_POST['password'];
    $npass = $_POST['npass'];

    $query = "SELECT password FROM form WHERE Userid = '$userid' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $updateQuery = "UPDATE form SET password = '$npass' WHERE userid = '$userid'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            $_SESSION['msg1'] = "Password Changed Successfully!!";
        } else {
            $_SESSION['msg1'] = "Password update failed!";
        }
    } else {
        $_SESSION['msg1'] = "Old password does not match!";
    }
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
        <li><a href="UserVech.php">FEEDBACK</a></li>
        <li>
            <div class="highlight"><a href="UserPass.php">CHANGE PASSWORD</a></div>
        </li>
        <li>
            <div class="highlight"><a href="Home.php">LOGOUT</a></div>
        </li>
    </ul>
</div>
<div>

    <form method="post">
        <p style="color:red;"><?php echo $_SESSION['msg1']; ?><?php echo $_SESSION['msg1'] = ""; ?></p>
        <table>
            <tr>
                <td><h1>CHANGE YOUR PASSWORD</h1></td>
            </tr>
            <tr>
                <td>
                    Old Password :
                </td>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    New Password :
                </td>
                <td>
                    <input type="text" name="npass">
                </td>
            </tr>
            <tr>
                <td>
                    Retype Password :
                </td>
                <td>
                    <input type="text" name="rpass">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</div>


</body>
</html>


