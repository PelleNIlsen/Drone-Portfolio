<?php
include('../assetts/header.php');
require('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $username;

        header("location: ../home");
    } else {
        $error = "Your login Name or Password is invalid.";
    }
}
?>