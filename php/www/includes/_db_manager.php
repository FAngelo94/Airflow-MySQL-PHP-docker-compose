
<?php 

function db_connect() {
    echo "TRY CONNECTION \n";
    $conn = mysqli_connect('db', 'user', 'test', 'testdb');

    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    return $conn;
}
/*
function db_connect() {
    $DBhost = "62.149.150.245";
    $DBuser = "Sql904344";
    $DBpass = "3669q97uhv";
    $DBName = "Sql904344_4";

    $conn = mysqli_connect($DBhost,$DBuser,$DBpass, $DBName);

    /* check connection 
    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    return $conn;
}*/

?>