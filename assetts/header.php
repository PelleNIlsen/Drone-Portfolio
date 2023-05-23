<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <!-- Add CSS link here -->
    <link rel="stylesheet" href="assetts/index.css">
    <!-- Add Bootstrap or any other frameworks here if needed -->
</head>
<body>
    
<nav>
    <ul>
        <li class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>"><a href="home.php">Home</a></li>
        <li class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>"><a href="about.php">About</a></li>
        <li class="<?php echo ($current_page == 'portfolio') ? 'active' : ''; ?>"><a href="portfolio.php">Portfolio</a></li>
        <li class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>"><a href="contact.php">Contact</a></li>
    </ul>
</nav>