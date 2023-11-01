<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'dynamic';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$adver = $_POST['adver'];
$sel = $_POST['sel'];
$validity = $_POST['validity'];
$descp = $_POST['descp'];
$dateb = $_POST['dateb'];
$query = "INSERT INTO advadata(adver, sel, validity, descp, dateb) VALUES('$adver', '$sel', '$validity', '$descp', '$dateb' )";

if (mysqli_query($conn, $query)) {
//    echo "<script>
//alert('Registration Successfully');
//window.location.href='AdvaData.php';
//</script>";
//    /* Redirect browser */
////                header("Location:user.php");
////                exit();
    echo 'Registration Successfully';
} else {
    echo mysqli_error($conn);
}

?>


