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
            <div class="highlight"><a href="Home1.php">HOME</a>
            </div>
        </li>
        <li>
            <div class="dropdown highlight">
                <button class="dropbtn">REGISTER</button>
                <div class="dropdown-content">
                    <a href="Register1.php">Adva</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown highlight">
                <button class="dropbtn">VIEW</button>
                <div class="dropdown-content">
                    <a href="Viewetails.php">Advatagments</a>
                    <a href="MessageReq.php">Message Request</a>
                    <a href="FeedView.php">FEED BACK</a>
                    <a href="#">Vehicals</a>
                </div>
            </div>
            </a></li>
        <li>
            <div class="highlight"><a href="VehicleInfo.php">VEHICLE INFO</a></div>
        </li>
        <li>
            <div class="highlight"><a href="CPass.php">CHANGE PASSWORD</a></div>
        </li>
        <li>
            <div class="highlight"><a href="Home.php">LOGOUT</a></div>
        </li>
    </ul>
</div>


</body>
</html>

