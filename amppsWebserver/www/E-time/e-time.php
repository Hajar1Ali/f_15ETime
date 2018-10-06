<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname ="eTimeDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$freeBed=$_POST['bed'];
$waitingTime=$_POST['result'];

$sql = "UPDATE eTimeTable SET freeBed='$freeBed',waitingTime='$waitingTime'";

if (mysqli_query($conn, $sql)) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$conn->close();
?>