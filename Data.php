   <?php
	$host = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $dbname = 'task';

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if (!$conn) {
            die('Could not connect: ' . mysqli_connect_error());
        }

        $userid = $_POST['userid'];
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $question = $_POST['question'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        
        

        $query = "INSERT INTO form(userid, fn, ln, gender, address, dob, question, password, number) VALUES('$userid', '$fn', '$ln', '$gender', '$address', '$dob', '$question', '$password', '$number')";

        if (mysqli_query($conn, $query)) {
            echo "<script>
alert('Registration Successfully');
window.location.href='user.php';
</script>";
                /* Redirect browser */
//                header("Location:user.php");
//                exit();
        } else {
            echo mysqli_error($conn);
        }
        
        ?>

