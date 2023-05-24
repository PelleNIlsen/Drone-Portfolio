<?php
include('../assetts/header.php');
require('connect.php');

$target_dir = '../portfolioImg/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$error = array();

if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        array_push($error, "File is not an image.");
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    array_push($error, "Sorry, file already exists.");
    $uploadOk = 0;
}

if ($_FILES['fileToUpload']['size'] > 5000000) {
    array_push($error, "Sorry, your file is too large.");
    $uploadOk = 0;
}

if ($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg") {
    array_push($error, "Sorry, only jpg, JPG, png, jpeg are allowed.");
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    array_push($error, "Sorry, your file was not uploaded.");
} else {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
    } else {
        array_push($error, "Sorry, there was an error uploading your file.");
    }
}

$imageDescription = mysqli_real_escape_string($db, $_POST['imgDescription']);

$sql = "INSERT INTO portfolio_images (filename, description) VALUES ('" . basename($_FILES['fileToUpload']['name']) . "', '$imageDescription')";

if ($db->query($sql) == TRUE) {
    array_push($error, "New record created successfully!");
} else {
    array_push($error, "Error: " . $sql . "<br>" . $db->error);
}

$db->close();

header('location: ../uploadImage');
?>