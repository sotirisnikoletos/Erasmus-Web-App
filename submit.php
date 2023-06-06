<?php
session_start();
$user_id=$_SESSION['user_id'];
// Establish a database connection (assuming you already have this set up)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "erasmus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query2 = "SELECT * FROM users WHERE email = '$user_id' or fname='$user_id'";
$results2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_array($results2);
$fname = $row['fname'];
$lname = $row['lname'];
// Retrieve the selected university from the form

$university1 = $_POST['university'];
$university2 = $_POST['university2'];

$university3 = $_POST['university3'];
$english = $_POST['yes_no1'];
$average = $_POST['average'];
$percent = $_POST['percent'];
$user_AM = '1';





// Insert the selected university into the applications table
$sql = "INSERT INTO applications (fname,lname,student_id,uni_1,uni_2,uni_3,avg,perc,eng,`status`) VALUES ('$fname','$lname','$user_AM', '$university1', '$university2','$university3','$average','$percent','$english','pending')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('You successfully applied. Getting you home!');location.href='index.php';</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>