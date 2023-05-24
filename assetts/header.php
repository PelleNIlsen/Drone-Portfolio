<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <!-- Add CSS link here -->
    <link rel="stylesheet" href="assetts/main.css">
    <link rel="stylesheet" href="assetts/<?php echo $page_css; ?>.css">
    <!-- Add Bootstrap or any other frameworks here if needed -->
</head>
<body>
<?php

    session_start();

    if (isset($_SESSION['login_user']) && $_SESSION['login_user'] == true) {
        include(dirname(__DIR__) . '/assetts/loggedin.php');
    } 
?>

<nav>
    <ul>
        <li class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>"><a href="home">Hjem</a></li>
        <li class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>"><a href="about">Om Meg</a></li>
        <li class="<?php echo ($current_page == 'portfolio') ? 'active' : ''; ?>"><a href="showcase">Portefølje</a></li>
        <li class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>"><a href="contact">Kontakt</a></li>
    </ul>
</nav>