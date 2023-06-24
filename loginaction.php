<?php
include("./db-config/connect.php");

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $checkEmail = "SELECT * FROM user WHERE email = '$email' AND name IS NOT NULL";
    $checkEmail_result = mysqli_query($conn, $checkEmail);
    $user = mysqli_fetch_assoc($checkEmail_result);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['userId'] = $user['id'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['usertype'] = $user['usertype'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['image'] = $user['image'];
            $_SESSION["logged_in"] = 'true';
        } else {
            echo "<div class='error'>Wrong password</div>";
        }
    } else {
        echo "<div class='error'>Account doesn't exist</div>";
    }
    header("Location: index.php");
}
?>
