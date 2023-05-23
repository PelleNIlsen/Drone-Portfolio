<?php
    $current_page = 'contact';
    $page_title = "Contact - My Drone Photography";
    $page_css = 'contact';
    include('assetts/header.php');
?>

<!-- Contact Section -->
<div id="contact">
    <h2>Kontakt Meg</h2>
    <p>Interessert i å jobbe sammen? Fyll ut skjemaet nedenfor med litt info om prosjektet ditt, så kommer jeg tilbake ti deg så snart jeg kan.</p>
    <form action="send_mail.php" method="post">
        <input type="text" name="name" placeholder="Ditt Navn" required>
        <input type="email" name="email" placeholder="Din Epost" required>
        <input type="text" name="subject" placeholder="Emne" required>
        <textarea name="message" placeholder="Melding" required></textarea>
        <button type="submit">Send inn!</button>
    </form>
</div>

<?php include('assetts/footer.php');