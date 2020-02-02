<?php
    include 'db_manager.php';
    
    $conn = mysqli_connect('db', 'user', 'test', "climberworld");

    /* check connection */
    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $query = "SELECT * FROM `User` WHERE `email`= '$email' AND `password`='$password'";
        $result = mysqli_query($conn, $query);

        if($result->num_rows == 1)
            echo "OK";
        else
            echo "Wrong data";
        
    }
    else
    {
        echo "not valid";
    }
    
    mysqli_close($conn);
?>