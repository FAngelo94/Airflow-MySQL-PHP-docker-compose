<?php
include 'includes/_db_manager.php';

$conn = db_connect();
echo "DB OPEN \n";
mysqli_close($conn);
echo "DB CLOSE";
?>