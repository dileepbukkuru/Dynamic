
<?php
session_start();

if (!isset($_SESSION["userid"])) {
    header("Location: login.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Styles/Sess.css">
    </head>
    <body>

        <div>

            <ul>
                <li><a href="Home1.php">HOME</a></li>
                <li><a href="Register1.php">REGISTER</a></li>
                <li><a href="View.php">VIEW</a></li>
                <li><a href="VehicleInfo.php">VEHICLE INFO</a></li>
                <li><a href="CPass.php">CHANGE PASSWORD</a></li>
                <li><a href="Home.php">LOGOUT</a></li>
            </ul></div>
        <div class="uss">
            <h2>Welcome :<?php echo $_SESSION["userid"];
            ?>.</h2>


        </div>

    </body>
</html>

