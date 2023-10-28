   <?php
	$host = 'localhost:3306';
        $user = 'root';
        $pass = '';
        $dbname = 'task2';

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if (!$conn) {
            die('Could not connect: ' . mysqli_connect_error());
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $texta = $_POST['texta'];

        $query = "INSERT INTO data(name, email, subject, texta) VALUES('$name', '$email', '$subject', '$texta')";

        if (mysqli_query($conn, $query)) {
            echo "Sent Successfully"; 
        } else {
            echo mysqli_error($conn);
        }
        
        ?>



