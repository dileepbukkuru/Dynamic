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
        <link rel="stylesheet" type="text/css" href="Styles/newCascadeStyleSheet.css">
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
            <form name="myform" id="myForm" action="Data2.php" onsubmit= "return validationForm()" method="post">
                 
            <table>
                 <tr>
                    <td>  <h1>Get In Touch With Us!</h1></td>
                </tr>
               
                <tr>
                    <td>Name :</td>
                </tr>
                <tr>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email :</td>
                </tr>
                <tr>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Subject :</td>
                </tr>
                <tr>
                    <td><input type="text" name="subject"></td>
                </tr>
                <tr>
                    <td>Comment :</td>
                </tr>
                <tr>
                    <td><textarea rows="10" cols="50" name="texta">
                         
                        </textarea></td>
                </tr>
                <tr>
                    <td> <button>SUBMIT</button></td>
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
