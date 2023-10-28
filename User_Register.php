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
    <link rel="stylesheet" type="text/css" href="Styles/reg.css">
</head>
<body>
<script>

    function validationForm() {
        // document.getElementById("myForm").reset();
        var us = document.myform.userid.value;
        var pa = document.myform.password.value;
        var fina = document.myform.fn.value;
        var lana = document.myform.ln.value;
        var nu = document.myform.number.value;


        if ((us.length < 7) || (us.length >= 15)) {
            alert("User Name Must Cantain 7 to 15 Letters ");

            return false;
            us.focus();
        } else if ((pa.length < 7) || (pa.length >= 15)) {
            alert("Password Must Cantain 7 to 15 Letters ");

            return false;
        } else if ((lana.length < 3) || (lana.length >= 15)) {
            alert("Last Name Must Cantain 7 to 15 Letters ");

            return false;
        } else if ((fina.length < 3) || (fina.length >= 15)) {
            alert("First Name Must Cantain 7 to 15 Letters ");

            return false;
        } else if (nu == "") {
            alert("enter the Number");
            return false;
        } else if (isNaN(nu)) {
            alert("Enter numbers only");
            return false;
        }


    }
</script>
<form name="myform" id="myForm" action="Data.php" onsubmit="return validationForm()" method="post">
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
            <table>
                <td><h2>USER REGISTRATION</h2></td>

                </tr>
                <tr>
                    <td>User Id:</td>

                </tr>
                <tr>
                    <td><input type="text" name="userid"></td>

                </tr>
                <tr>
                    <td>First Name:</td>

                </tr>
                <tr>
                    <td><input type="text" name="fn"></td>

                </tr>
                <tr>
                    <td>Last Name :</td>

                </tr>
                <tr>
                    <td><input type="text" name="ln"></td>
                </tr>
                <tr>
                    <td>Gender :</td>
                </tr>
                <tr>
                    <td>
                        <select name="gender">
                            <option>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                </tr>
                <tr>
                    <td><textarea name="address" rows="10" cols="50"></textarea></td>
                </tr>
            </table>
        </div>
        <div class="sel">
            <table>
                <tr>
                    <td>Date Of Birth :</td>
                </tr>
                <tr>
                    <td>
                        <input type="date" min="2000-01-02" max="2005-01-02" name="dob">
                    </td>
                </tr>
                <tr>
                    <td>Security Question</td>
                </tr>
                <tr>
                    <td><select name="question">
                            <option> Select Security Question</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Password :</td>

                </tr>
                <tr>
                    <td><input type="password" name="password" size="50px"></td>
                </tr>
                <tr>
                    <td>Phone Number :</td>

                </tr>
                <tr>
                    <td><input type="text" name="number"></td>
                </tr>
                <tr>
                    <td class="but"><input type="submit" value="REGISTER ME !"/></td>
                    <!--                        <td><button > REGISTER ME !</button></td>-->
                </tr>
                <tr>
                    <td class="but"><input type="reset" value="RESET ALL"/>
                </tr>
            </table>
        </div>


        <div class="contact">
            <table>
                <tr>
                    <td>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNcT-QhDxJHSh4_bBAmoq-FWQU_0xS-bLMkQ&usqp=CAU"
                             alt="Italian Trulli">
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

</form>
</body>
</html>


