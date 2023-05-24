<?php
    $current_page = 'login';
    $page_title = "Login - My Drone Photography";
    $page_css = 'login';
    include('assetts/header.php');
?>

<div id="login">
    <h2>Admin Login</h2>
    <form action="functions/login_process" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</div>

<?php include('assetts/footer.php'); ?>