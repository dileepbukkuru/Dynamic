<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Styles/reggg.css">
    </head>
    <body>

        <div class="nav">

            <ul>
                <li><a href="Home1.php">HOME</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">REGISTER</button>
                        <div class="dropdown-content">
                            <a href="Register1.php">Adva</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">VIEW</button>
                        <div class="dropdown-content">
                            <a href="Viewetails.php">Advatagments</a>
                            <a href="#">Jobs</a>
                            <a href="#">Vehicals</a>
                        </div>
                    </div>
                </li>
                <li><a href="VehicleInfo.php">VEHICLE INFO</a></li>
                <li><a href="CPass.php">CHANGE PASSWORD</a></li>
                <li><a href="Home.php">LOGOUT</a></li>
            </ul></div>
        <div class="main1">
            <div class="adv">
                <table>
                    <form name="login" id="myForm" action="AdvaData.php" method="post">

                    <tr>
                        <td><h1>Register Advertisement</h1></td>
                    </tr>
                    <tr>
                        <td>Advertisement Title </td>
                    </tr>
                     <tr>
                         <td><input type="text" name="adver" > </td>
                    </tr>
                     <tr>
                        <td>Advertisement Category </td>
                    </tr>
                     <tr>
                         <td><select name="sel">
                                 <option>Select Advertisement Category</option>
                                 <option>Select Advertisement Category</option>
                                 <option>Select Advertisement Category</option>
                            </select> </td>
                    </tr>
                     <tr>
                        <td>Validity Period </td>
                    </tr>
                     <tr>
                        <td><input type="text" name="validity" > </td>
                    </tr>
                     <tr>
                        <td>Description</td>
                    </tr>
                     <tr>
                        <td><input type="text" name="descp" > </td>
                    </tr>
                     <tr>
                        <td>Date </td>
                    </tr>
                     <tr>
                        <td><input type="date" name="dateb" > </td>
                    </tr>
                     <tr>
                         <td><input type="submit" name="button" value="ADD ADVERTISEMENT"</td>
                    </tr>
                     <tr>
                         <td><input type="reset" name="button1" value="CANCLE"></td>
                    </tr>
                    
                    
                </table>
                </form>
            </div>
            <div class="abou">
                <h2>About</h2>
                 <ul>
                <li><a href="">The Company</a></li>
                <li><a href="">The Team</a></li>
                <li><a href="">Testmonials</a></li>
                <li><a href="">Gallery</a></li>
                
            </ul>
            </div>
            
        </div>
        
    </body>
</html>

