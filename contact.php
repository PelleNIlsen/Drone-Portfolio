<?php
    $current_page = 'contact';
    $page_title = "Contact - My Drone Photography";
    $page_css = 'contact';
    include('assetts/header.php');
?>

<!-- Contact Section -->
<div id="contact">
    <h2>Contact Me</h2>
    <p>Interested in working togheter? Fill out the form below with some info about your project and I will get back to you as soon as I can.</p>
    <form action="send_mail.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

<?php include('assetts/footer.php');