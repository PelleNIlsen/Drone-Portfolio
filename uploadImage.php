<?php
    $page_title = "Upload Image - My Drone Photography";
    $page_css = 'uploadImage';
    include('assetts/header.php');

    if (!isset($_SESSION['login_user']) && $_SESSION['login_user'] !== true) {
        header('location: login');
        exit;
    } 
?>

<h2>Upload new image</h2>
<form action="functions/upload" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileTpUpload">
    Enter image description:
    <input type="text" name="imgDescription" id="imgDescription">
    <input type="submit" value="Upload Image" name="submit">
</form>