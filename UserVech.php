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

        </li>
        <li>
            <a href="UserVech.php">FEEDBACK</a></li>
        </li>
        <li>
            <div class="highlight"><a href="UserPass.php">CHANGE PASSWORD</a></div>
        </li>
        <li>
            <div class="highlight"><a href="Home.php">LOGOUT</a></div>
        </li>
    </ul>
</div>
<div>
    <form action="FeedData.php" method="post">
        <table>
            <tr>
                <td>
                    Name :
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Message :
                </td>
                <td>
                    <textarea name="textarea"> Enter Message</textarea>
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

