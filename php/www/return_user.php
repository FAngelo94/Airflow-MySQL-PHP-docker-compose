<?php
include 'includes/_db_manager.php';

$conn = db_connect();
echo "DB OPEN </br>";

$query = "SELECT * FROM `User`";
$result = mysqli_query($conn, $query);
$row = $result->fetch_assoc();
echo $row['User'];

mysqli_close($conn);
echo "</br> DB CLOSE </br>";
?>