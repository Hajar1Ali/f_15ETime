<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname="eTimeDB";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'SELECT freeBed, waitingTime FROM eTimeTable';
$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}

 while ($row = mysqli_fetch_array($query))
{
$freeBed=$row['freeBed'];
$waitingTime=$row['waitingTime'];            
           
}
echo $freeBed;
// Should we need to run this? read section VII
mysqli_free_result($query);
 
// Should we need to run this? read section VII
mysqli_close($conn);
?>