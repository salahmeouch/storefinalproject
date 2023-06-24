<!-- connection with database -->
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "finalproject";


try {
    $conn = mysqli_connect($host, $user, $password, $db);
   
} catch (Exception $e) {
    echo("Error:");
}
?>