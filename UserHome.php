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
        <li>
            <a href="UserVech.php">FEEDBACK</a></li>
        <li>
            <div class="highlight"><a href="UserPass.php">CHANGE PASSWORD</a></div>
        </li>
        <li>
            <div class="highlight"><a href="Home.php">LOGOUT</a></div>
        </li>
    </ul>
</div>


</body>
</html>

