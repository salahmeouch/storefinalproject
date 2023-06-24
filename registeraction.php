<?php
include('db-config/connect.php');
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST["confirm_password"];
$usertype = $_POST["usertype"];

$FileName = $_FILES['image']['name'];
$FileSize = $_FILES['image']['size'];
$FileType = $_FILES['image']['type'];
$FileTmp = $_FILES['image']['tmp_name'];

$ValidImageExtension = ['jpg', 'jpeg', 'png'];

$imageExtension = strtolower(pathinfo($FileName, PATHINFO_EXTENSION));

$newImageName = uniqid() . '.' . $imageExtension;
move_uploaded_file($FileTmp, 'images/' . $newImageName);

$password_hashed = password_hash($password, PASSWORD_BCRYPT);

if ($password !== $confirm_password) {
    echo "Please enter the same password.";
    exit();
}

$sql = "INSERT INTO user (name, email, password, image) VALUES ('$name', '$email', '$password_hashed', '$newImageName')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: login.php");
    exit();
} else {
    echo "Error while inserting user data";
}

mysqli_close($conn);
?>
