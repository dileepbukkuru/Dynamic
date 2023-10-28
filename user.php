<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Styles/user.css">
    </head>
    <body>
        <div class="nav">
            <ul>
                 <li><a href="Home.php">HOME</a></li>
                <li><a href="User_Register.php">REGISTER</a></li>
                <li><a href="Admin.php">ADMIN LOGIN</a></li>
                <li><a href="user.php">USER LOGIN</a></li>
                <li><a href="index.php">CONTACT</a></li>
            </ul>
        </div>
        <div class="main">
        <div class="log">
            <form name="login" action="Session.php" method="post" autocomplete="off">
            <table>
                <tr>
                    <td><h2>USER LOGIN</h2></td>
                    
                </tr>
                <tr>
                    <td>User Id:</td>
                    
                </tr>
                <tr>
                    <td><input type="text" name="userid" required></td>
                    
                </tr>
                 <tr>
                    <td>Password:</td>
                    
                </tr>
                <tr>
                    <td><input type="password" name="password" required></td>
                    
                </tr>
                
                <tr>
                    <td><input type="submit" name="submit" value="submit" ></td>
                </tr>
             
                
            </table>
        </form>
        </div>
        <div class="contact">
            <table>
                <tr>
                    <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNcT-QhDxJHSh4_bBAmoq-FWQU_0xS-bLMkQ&usqp=CAU" alt="Italian Trulli">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Contact Information</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        Address :426 Grant Street<br>
                        Hill Pune
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone : 9398797501.
                    </td>
                </tr>
                <tr>
                    <td bgcolor="orange">
                        Email : dileep@gmail.com
                    </td>
                </tr>


            </table>

        </div>
</div>

    </body>
</html>


